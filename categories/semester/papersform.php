<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foem12</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        form {
            background-color: whitesmoke    ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        form input {
            width: auto;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        form input[type="file"] {
            margin-top: 5px;
        }

        form div {
            display: flex;
            justify-content: space-between;
        }

        form div input {
            flex: 1;
            margin-right: 10px;
        }

        .file-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <form action="insertpapers.php" method="post" enctype="multipart/form-data">
        <label for="sno">SNo</label>
        <input type="number" name="sno" required><br>

        <label for="subjectcode">Subject Code</label>
        <input type="text" placeholder="Enter subject code" name="subjectcode" ><br>

        <label for="subjectname">Subject Name</label>
        <input type="text" placeholder="Enter subject name" name="subjectname" ><br>

        <label for="subjectname">Year</label>
        <input type="text" placeholder="Enter year" name="uyear" ><br>

        <label for="pdfs">Upload</label>
        <input type="file" name="pdfs" accept=".pdf, .xls, .xlsx, .doc, .docx" ><br>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

    <div class="file-info">
</div>
</body>
</html>
