<?php
$conn = new mysqli("localhost", "root", "", "abc");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$targetDir = "images/";
$targetFile = $targetDir . basename($_FILES["volunteerFile"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the file is an allowed type
$allowedTypes = array("pdf", "doc", "docx", "jpg", "jpeg", "png", "gif");
if (!in_array($fileType, $allowedTypes)) {
    echo "Sorry, only PDF, Word documents, and image files are allowed.";
    $uploadOk = 0;
}

// Check if the file already exists
if (file_exists($targetFile)) {
    echo "Sorry, the file already exists.";
    $uploadOk = 0;
}

// Check file size (adjust the size limit as needed)
if ($_FILES["volunteerFile"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // If everything is ok, try to upload the file
    if (move_uploaded_file($_FILES["volunteerFile"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["volunteerFile"]["name"])) . " has been uploaded.";
        
        // Insert the file path into the database
        $sql = "INSERT INTO files (file_path) VALUES ('$targetFile')";
        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully.";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>