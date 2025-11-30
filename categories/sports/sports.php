<?php
include(__DIR__ . '/../../includes/menu.php');
?>

<html>
    <head>
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        .project-main {
            position:fixed;
            top:80px;
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
            color:white;
        }

        .project-main li:hover{
            background:#555;
        }
    </style>
    </head>
    <body>
        <div class="project-main">
            <ul>
                <!-- <li class=""><a href="games1.php">Games</a></li>
                <li class=""><a href="ipsgm/ipsgm1.php">IPSGM Event</a></li>
                <li class=""><a href="aadudam_andhra/aadudam1.php">Aadudam Andhra Event</a></li> -->
                <li><a href="/public_html/categories/sports/games1.php">Games</a></li>
                <li><a href="/public_html/categories/sports/ipsgm/ipsgm1.php">IPSGM Event</a></li>
                <li><a href="/public_html/categories/sports/aadudam_andhra/aadudam1.php">Aadudam Andhra Event</a></li>
        </ul>
        </div>
    </body>
</html>