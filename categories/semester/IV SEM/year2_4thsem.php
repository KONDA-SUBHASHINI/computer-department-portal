<?php
include("../../../includes/menu.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }
        .year1-main{
            top:200px;
            left:20px;
            position:fixed;
            height:400px;
            width:500px;
        }
        .subjectstable table {
            width: auto;
            border-collapse: collapse;
            margin-top: 50px;
        }

        .subjectstable th, .subjectstable td {
            padding:15px 20px;
            text-align: left;
        }

        .subjectstable th {
            background-color: #3498db;
            color: #fff;
        }

        .subjectstable tr:nth-child(odd) {
            background-color: #ecf0f1; /* Color for odd rows */
        }

        .subjectstable tr:nth-child(even) {
            background-color: #bdc3c1; /* Color for even rows */
        }

        a {
            color: blue;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #3498db; /* Updated color on hover */
        }
    </style>
</head>
<body>
    <div class="year1-main">
    <table class="subjectstable">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">CM-401</a></td>
                <td><a href="maths3.php">MATHEMATICS-III</a></td>
            </tr>
            <tr>
                <td><a href="#">CM-402</a></td>
                <td><a href="wt1.php">Web Technologies</a></td>
            </tr>
            <tr>
                <td><a href="#">CM-403</a></td>
                <td><a href="comp1.php">Computer Organization & Microprocessors</a></td>
            </tr>
            <tr>
                <td><a href="#">CM-404</a></td>
                <td><a href="c++1.php">OOPs through C++</a></td>
            </tr>
            <tr>
                <td><a href="#">CM-405</a></td>
                <td><a href="cn1.php">Computer Networks</a></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    </div>
</body>
</html>
