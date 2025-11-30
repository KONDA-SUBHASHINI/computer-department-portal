<?php
include("../project1.php")
?>
<html>
    <head>
    <link rel="stylesheet" href="./css/styles.css">
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        font-family: sans-serif;
        font-size: 12px;
    }
    .iot-index{
    height: 1000px;
    width: 1030px;
    margin-left: 400px;
    margin-top: 150px;
    }
    .iot-index b{
        font-size: 40px;
    }
    .iot-index img{
        height: 200px;
        width: 200px;
    }
    .container .card img{
        height: 400px;
        width: 300px;
        border-radius: 10px;
    }
    .container{
        display: flex;
        flex-wrap:wrap;
    }
    .card{
        height: 400px;
        margin: 20px;
        box-shadow: 5px 5px 20px black;
        overflow: hidden;
        position: relative; /* Add this line */
    }
    .intro{
        height: 60px;
        width: 300px;
        padding-top:16px;
        box-sizing: border-box;
        position: absolute;
        bottom: 0; /* Change this line */
        background-color: rgb(18, 17, 17);
        color: white;
        line-height: 20px;
        transition: .5s;
    }
    .card a{
        font-size: 28px;
        color:white;
        text-decoration: none;
        margin-top:100px;
        text-align: center;
        margin-left:10px;
        margin-top:20px;
    }
    .intro p span{
        font-weight: bold;
    }
    .intro p{
        font-size: 17px;
        margin: 12px;
        visibility: hidden;
        opacity: 0x;
    }
    .intro button{
        opacity: 0x;
    }
    .card:hover{
        cursor: pointer;
    }
    .card:hover .intro{
        height: 190px;
        bottom: 0; /* Change this line */
    }
    .card:hover p{
        opacity: 1;
        visibility: visible;
    }
    .card:hover a{
        margin-left:12px;
        opacity: 1;
        visibility: visible;
    }
    .card a:hover{
        background:white;
        color:black;
        border-radius:6px;
    }
    </style>
    </head>
    <body>
    <div class="iot-index">
        <div class="container">
            <div class="card">
                <img src="../../../assets/images/onlinevoting.png" alt="">
                <div class="intro">
                    <a href="onlinevoting.php">Online Voting</a>
                    <p>The <span>Online Voting </span>Empower your voice, participate seamlessly in democratic processes, and ensure secure, accessible elections with our innovative online voting platform.</p>
                </div>
            </div>
            <div class="card">
                <img src="../../../assets/images/oldquestinpaper.png" alt="">
                <div class="intro">
                    <a href="oldquestionpp.php">Old Question Papers</a>
                    <p>The <span>Old Question Papers Website </span>Explore an extensive archive of educational history, providing valuable insights through a diverse collection of past examination papers.</p>
                </div>
            </div>
            <div class="card">
                <img src="../../../assets/images/tc.png" alt="">
                <div class="intro">
                    <a href="studycertificate.php">TC, Study Certificate</a>
                    <p>The <span>Transfer and Study Certificate </span>Easily request and obtain Transfer or Study Certificates with our user-friendly online platform, simplifying the administrative process for students.</p>
                </div>
            </div>        
            <div class="card">
                <img src="../../../assets/images/studentbiodata.png" alt="">
                <div class="intro">
                    <a href="stubiodata.php">Student Bio Data</a>
                    <p>The<span> Student Biodata Management </span> platform, emphasizing its purpose as a streamlined system for storing and managing student records, offering simplicity in administrative tasks</p>
                </div>
            </div>
            
            <div class="card">
                <img src="../../../assets/images/ecet.png" alt="">
                <div class="intro">
                    <a href="ecetmoctest.php">Ecet Moc Test</a>
                    <p>The <span>ECET Mock Test </span> Website simplifies engineering exam preparing with user-friendly features and realistic mock tests, fostering confidence and precision in aspiring students.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="../../../assets/images/studentdatabase.png" alt="">
                <div class="intro">
                    <a href="studatabase.php">Student Database</a>
                    <p>The <span> Student Database Management </span> website enhances academic efficiency and communication by streamlining processes, offering tailored features for students and faculty.</p>
                </div>
            </div>
            
        </div>   
    </div>
    </body>
</html>