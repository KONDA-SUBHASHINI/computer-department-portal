<?php
include(__DIR__ . '/../../includes/menu.php');
?>

<html>
    <head>
    <link rel="stylesheet" href="assests/css/styles.css">
    <style>
        .project-main {
            top:80px;
            position:fixed;
            width: 300px;
            height: 660px;
            background-color: black;
            color:white;
            text-align:center;
            line-height:50px;
            font-size:20px;
            border-top:1px solid white;
        }
        .project-main a{
            text-decoration:none;
            padding:20px 100px;
            color:white;
        }
        .project-main li:hover {
            background:#555;
        }
    </style>
    </head>
    <body>
        <div class="project-main">
        <ul>
                <!-- <li class=""><a href="/software/sw1-page.php">Software</a></li>
                <li class=""><a href="/hardware/hw-page1.php">Hardware</a></li>
                <li class=""><a href="/iot/iot1-page.php">IOT</a></li> -->
                <li><a href="/public_html/categories/projects/software/sw1-page.php">Software</a></li>
                <li><a href="/public_html/categories/projects/hardware/hw-page1.php">Hardware</a></li>
                <li><a href="/public_html/categories/projects/iot/iot1-page.php">IOT</a></li>

        </ul>
        </div>
    </body>
</html>