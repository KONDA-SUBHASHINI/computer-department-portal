<?php
    include("sports.php")
?>
<html>
    <head>
    <style>
        .ipsgm-cont{
            margin-left:400px;
            margin-top:160px;
            height:500px;
            width: 1040px;
            gap:30px;
            padding:40px;
            display:flex;
            justify-content:space-evenly;
            flex-wrap:wrap;
            background: rgb(227, 224, 224);
        }
        .ipsgm-cont2{
            height:1600px;
        }
        .image-container {
            position: relative;
            overflow: hidden;
            width: 300px;
            height: 200px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            border-radius:4px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .image-name {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .image-container:hover .image-name {
            opacity: 1;
            background-color: black;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .con-ipsgm{
            padding:10px;
            text-align:center;
            width:100%;
            font-size:34px;
            font-weight:bolder;

        }
    </style>
    </head>
    <body>
    <div class="main-content">           
                <div class="ipsgm-cont ipsgm-cont2">
                    <div class="con-ipsgm">Sports</div>
                    <div class="image-container">
                        <img src="../../assets/images/running.png" alt="Your Image">
                        <div class="image-name">RUNNING</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/relay.png" alt="Your Image">
                        <div class="image-name">RELAY</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/high-jump.png" alt="Your Image">
                        <div class="image-name">HIGH JUMP</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/broadjump.png" alt="Your Image">
                        <div class="image-name">BROAD JUMP</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/triplejump.png" alt="Your Image">
                        <div class="image-name">TRIPLE JUMP</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/shotput.png" alt="Your Image">
                        <div class="image-name">SHOT PUT</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/discussthrowad.png" alt="Your Image">
                        <div class="image-name">DISCUSS THROW</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/javelinthrow.png" alt="Your Image">
                        <div class="image-name">JAVELIN THROW</div>
                    </div>
                    <div class="con-ipsgm">Games</div>
                    <div class="image-container">
                        <img src="../../assets/images/chess.png" alt="Your Image">
                        <div class="image-name">CHESS</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets//images/volleyballad.jpg" alt="Your Image">
                        <div class="image-name">VOLLEY BALL</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets//images/kabaddi.jpg" alt="Your Image">
                        <div class="image-name">KABADDI</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets/images/tabletennis.png" alt="Your Image">
                        <div class="image-name">TABLE TENNIS</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets//images/badminton.jpg" alt="Your Image">
                        <div class="image-name">BADMINTON</div>
                    </div>
                    <div class="image-container">
                        <img src="../../assets//images/khokhoad.jpg" alt="Your Image">
                        <div class="image-name">KHO KHO</div>
                    </div>
                </div>
        </div>
    </body>
</html>