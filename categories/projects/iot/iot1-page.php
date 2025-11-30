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
        padding-top:16px;
        width: 300px;
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
                <img src="../../../assets/images/homeautomate.png" alt="">
                <div class="intro">
                    <a href="homeautomation.php">Home Automation</a>
                    <p>The <span> Smart Home Automation </span> system streamlines tasks with centralized IoT control, seamlessly automating devices, and providing manual options for enhanced versatility and convenience.</p>
                </div>
            </div> 
            <div class="card">
                <img src="../../../assets/images/protectcrops.png" alt="">
                <div class="intro">
                    <a href="protecting crops.php">Protect Crops</a>
                    <p>The <span> Protect Crops From Animals</span> System uses advanced Passive Infrared (PIR) sensors to detect animal movement, ensuring efficient crop field protection with customizable sensitivity.</p>
                </div>
            </div> 
            <div class="card">
                <img src="../../../assets/images/trafficcontrol.png" alt="">
                <div class="intro">
                    <a href="trafficcontrol.php">Traffic Controlling</a>
                    <p>The <span>Traffic Controlling </span>employs advanced technology, including cameras, sensors, and machine learning, for precise vehicle detection at intersections, facilitating efficient traffic light control.</p>
                </div>
            </div>     
        </div>   
    </div>
    </body>
</html>
