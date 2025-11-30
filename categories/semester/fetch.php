<?php
$conn = new mysqli("localhost", "root", "", "abc");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $filePath = $row["file_path"];
        $fileName = basename($filePath);

        // Display the file based on its type
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        if (in_array($fileType, array("pdf", "doc", "docx"))) {
            // Display link to view PDF or Word document
            echo '<a href="' . $filePath . '" target="_blank">' . $fileName . '</a><br>';
        } elseif (in_array($fileType, array("jpg", "jpeg", "png", "gif"))) {
            // Display image
            echo '<img src="' . $filePath . '" alt="' . $fileName . '" style="max-width: 300px; max-height: 300px;"><br>';
        } else {
            // Display a generic link for other file types
            echo '<a href="' . $filePath . '" target="_blank">' . $fileName . '</a><br>';
        }
    }
} else {
    echo "No files found.";
}

$conn->close();
?>