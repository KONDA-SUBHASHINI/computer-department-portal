<?php
include("connection.php");
if (isset($_FILES['pdfs'])) {
    $sno = mysqli_real_escape_string($con, $_POST['sno']);
    $subjectcode = mysqli_real_escape_string($con, $_POST['subjectcode']);
    $subjectname = mysqli_real_escape_string($con, $_POST['subjectname']);
    $uyear = mysqli_real_escape_string($con, $_POST['uyear']);

    // Generate a unique filename using time and date
    $timestamp = time();
    $uploadFileName = $timestamp . '_' . $_FILES['pdfs']['name']; // Appending timestamp to the original filename

    // Move the uploaded file to the desired directory
    $uploadDirectory = 'C:/xampp/htdocs/clg-project/year1qp/';
    $destinationPath = $uploadDirectory . $uploadFileName;
    move_uploaded_file($_FILES['pdfs']['tmp_name'], $destinationPath);

    $sql = "INSERT INTO year1tb (sno, subjectcode, subjectname, uyear, actions) 
            VALUES ('$sno', '$subjectcode', '$subjectname', '$uyear', '$uploadFileName')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted: " . mysqli_error($con);
    }
} else {
    echo "File upload failed. Error code: ";
    print_r($_FILES['pdfs']['error']);
}

mysqli_close($con);
?>
