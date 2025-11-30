<?php
if (isset($_GET['file'])) {
    $filePath = 'uploads/' . $_GET['file'];

    if (file_exists($filePath)) {
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        readfile($filePath);
        exit();
    } else {
        echo 'File not found.';
    }
}
?>
