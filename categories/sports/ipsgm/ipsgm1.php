<?php
    include("../sports.php")
?>
<html>
    <head>
    <style>
        .aadudam-con{
            margin-left: 400px;
            margin-top:160px;
            padding: 50px;
            height:340px;
            width:70%;
            background:rgb(207, 201, 201);
            display: flex;
            gap: 100px;
            font-family: sans-serif;
            font-size: 16px;
            line-height: 22px;
        }
        .aadudam-con img{
            height: 200px;
            width: 200px;
            border-radius: 6px;
        }
        .ipsgm-cont{
            margin-left:400px;
            margin-top:140px;
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
        .main-ipsgm{
            margin-left:350px;
            margin-top:200px;
            margin-bottom:100px;
            height:auto;
            background:rgb(207,201,201);
        }
        .ipsgm-box{
          margin-top: 200px;
          height: 900px;
          width: 1000px;
          background-color: red;
          display: flex;
          flex-wrap: wrap;
          gap: 40px;
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
        button {
            border-style:none;
        }
        .main-ipsgm .insert{
            position:relative;
            top:80px;
            margin-left:500px;
            padding:10px 20px;
            background:green;
            border-style:none;
            text-decoration:none;
            font-size:22px;
            color:white;
            border-radius:6px;
        }
        .main-ipsgm table{
            border:2px solid black;
            margin:100px 80px;
            border-collapse:collapse;
            font-size:18px;
        }
        .main-ipsgm table tr,th,td{
            padding:10px 20px;
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
        <div class="aadudam-con">
            <img src="../../../assets/images/jagan.jpg" alt="" class="">
            <div class="">
            Welcome to the heart-pounding excitement of the Inter Polytechnic Sports and Games Meet (IPSGM), an initiative championed by Chief Minister Y.S. Jagan Mohan Reddy exclusively for the vibrant state of Andhra Pradesh. This thrilling sporting spectacle kicks off at the district level, providing a dynamic platform for polytechnic students to showcase their athletic prowess. With a vision to cultivate healthy competition and sportsmanship, IPSGM escalates from district-level showdowns to the grand stage of state-level championships. More than just a celebration of physical prowess, this event serves as a nexus for students to build enduring connections, fostering teamwork, and a sense of camaraderie. Dive into the action and join us in witnessing the rise of these talented athletes as they compete, connect, and leave an indelible mark on the landscape of Andhra Pradesh's sporting legacy. 
            </div>
        </div>
        <div class="main-content">           
                <div class="ipsgm-cont ipsgm-cont2">
                    <div class="con-ipsgm">Sports</div>
                    <div class="image-container">
                        <img src="../../../assets/images/running.png" alt="Your Image">
                        <div class="image-name">RUNNING</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/relay.png" alt="Your Image">
                        <div class="image-name">RELAY</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/high-jump.png" alt="Your Image">
                        <div class="image-name">HIGH JUMP</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/broadjump.png" alt="Your Image">
                        <div class="image-name">BROAD JUMP</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/triplejump.png" alt="Your Image">
                        <div class="image-name">TRIPLE JUMP</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/shotput.png" alt="Your Image">
                        <div class="image-name">SHOT PUT</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/discussthrowad.png" alt="Your Image">
                        <div class="image-name">DISCUSS THROW</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/javelinthrow.png" alt="Your Image">
                        <div class="image-name">JAVELIN THROW</div>
                    </div>
                    <div class="con-ipsgm">Games</div>
                    <div class="image-container">
                        <img src="../../../assets/images/chess.png" alt="Your Image">
                        <div class="image-name">CHESS</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/volleyballad.jpg" alt="Your Image">
                        <div class="image-name">VOLLEY BALL</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/kabaddi.jpg" alt="Your Image">
                        <div class="image-name">KABADDI</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/tabletennis.png" alt="Your Image">
                        <div class="image-name">TABLE TENNIS</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/badminton.jpg" alt="Your Image">
                        <div class="image-name">BADMINTON</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets//images/khokhoad.jpg" alt="Your Image">
                        <div class="image-name">KHO KHO</div>
                    </div>
                </div>
        </div>
        <div class="main-ipsgm">
            <button class=""><a href="login-ipsgm.php" class="insert">Insert</a></button><br><br>
            <?php
            include("../../../includes/connection.php");
            $sql="select * from ipsgm";
            $result = mysqli_query($con,$sql);          
            $c=mysqli_num_rows($result);

            if($c > 0) {
                echo '<table border="1">';
                echo '<tr>
                        <th>Name</th>
                        <th>PIN</th>
                        <th>Branch</th>
                        <th>Year</th>
                        <th>Game Name</th>
                        <th>Result</th>
                      </tr>';

                while($row=mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'.$row['uname'].'</td>';
                    echo '<td>'.$row['pin'].'</td>';
                    echo '<td>'.$row['branch'].'</td>';
                    echo '<td>'.$row['uyear'].'</td>';
                    echo '<td>'.$row['gamename'].'</td>';
                    echo '<td>'.$row['result'].'</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } 
            ?> 
        </div>
    </body>
</html>