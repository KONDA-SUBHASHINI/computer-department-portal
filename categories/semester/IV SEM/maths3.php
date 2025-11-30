<?php
include("year2_4thsem.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hovering Box with Shadow</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        .hover-box {
            width: 800px;
            height: auto;
            padding-bottom:100px;
            margin-left: 600px;
            margin-top: 160px;
            margin-bottom:100px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.3s ease-in-out;
        }

        .hover-box:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6); /* Updated box-shadow on hover */
        }

        .eng-h1 {
            text-align: center;
            padding-top: 20px;
        }

        .action-buttons {
            display: flex;
        }

        .table2fetch {
            border-collapse: collapse;
            margin:0 auto;
        }

        .table2fetch th, .table2fetch td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            padding: 10px 60px;
            text-align: center;
        }

        .table2fetch th {
            background-color: #f2f2f2;
        }

        .download-btn,
        .view-btn {
            margin-right: 10px;
            padding: 8px;
            text-decoration: none;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .download-btn {
            background-color: #007bff;
        }

        .view-btn {
            background-color: #28a745;
        }
        .download-btn:hover{
            color:black;
        }
         .view-btn:hover{
            color:black;
        }
    </style>
</head>
<body>
    <div class="hover-box">
        <h1 class="eng-h1">MATHEMATICS-III</h1><br><br>
        <?php
        include("../../../includes/connection.php");

        // Display file information with download and view buttons
        $sql = "SELECT * FROM year1tb where subjectname='MATHS-III'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table class='table2fetch'>";
            echo "<tr><th>Year</th><th>Actions</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $uyear = $row['uyear'];
                $pdfs = $row['actions'];

                // Generate download and view links
                $downloadLink = '../../year1qp/' . $pdfs;
                $viewLink = '../../year1qp/' . $pdfs;

                // Display file information with download and view buttons in table rows
                echo "<tr>";
                echo "<td>$uyear</td>";
                echo "<td class='action-buttons'>";
                echo "<a class='download-btn' href='$downloadLink' download>Download</a>";
                echo "<a class='view-btn' href='$viewLink' target='_blank'>View</a>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No records found.";
        }

        mysqli_close($con);
        ?>
    </div>
</body>
</html>
