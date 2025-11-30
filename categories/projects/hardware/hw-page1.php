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
                <img src="../../../assets/images/doorlock.png" alt="">
                <div class="intro">
                    <a href="doorlock.php">Door Lock System</a>
                    <p>The <span> Digital Door Lock System </span> employs cutting-edge technology, incorporating biometric sensors, unique PINs, a mobile app, and real-time updates for secure and convenient access control.</p>
                </div>
            </div>  
            <div class="card">
                <img src="../../../assets/images/plantwatering.png" alt="">
                <div class="intro">
                    <a href="plantwateringhw.php">Smart Plant Watering</a>
                    <p>The <span>Smart Plant Watering </span>monitors soil moisture levels, activating the water pump when needed based on constant sensor measurements, ensuring plants receive water until optimal moisture levels are reached.</p>
                </div>
            </div>     
            <div class="card">
                <img src="../../../assets/images/watercontroller.png" alt="">
                <div class="intro">
                    <a href="waterlevel.php">Water Controller</a>
                    <p>The <span>Water Level Detector And Controller </span> is designed using sensors, microcontrollers, and relay switches for accurate monitoring and automated, ensuring optimal water levels with real-time updates.</p>
                </div>
            </div>    
        </div>   
    </div>
    </body>
</html>
