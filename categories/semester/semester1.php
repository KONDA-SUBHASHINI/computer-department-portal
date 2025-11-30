<?php
include("../../includes/menu.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Div</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        .styled-div {
            width:400px;
            margin:250px auto;
            background-color: lightblue; /* Updated div background color */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: background-color 0.3s ease-in-out; /* Smooth background color transition */
        }
        .styled-div p{
            font-size:26px;
            font-weight:bolder;
        }
        .styled-div:hover {
            background-color: ; 
            border:5px solid white;
        }

        .styled-div a {
            background:whitesmoke;
            display: block;
            color: blue; /* Updated anchor text color */
            font-size: 18px;
            margin: 10px 0;
            padding:10px 10px;
            transition: color 0.3s ease-in-out;
        }

        .styled-div a:hover {
            background:white;
        }
    </style>
</head>
<body>
    <div class="styled-div">
        <p>Old Question Papers</p>
        <a href="I Year/year1.php">I Year</a>
        <a href="III SEM/year2_3rdsem.php">III SEM</a>
        <a href="IV SEM/year2_4thsem.php">IV SEM</a>
        <a href="V SEM/year2_5thsem.php">V SEM</a>
    </div>
</body>
</html>

