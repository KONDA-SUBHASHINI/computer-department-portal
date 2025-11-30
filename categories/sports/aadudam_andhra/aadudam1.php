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
            width: 1000px;
            column-gap:40px;
            row-gap:40px;
            display:flex;
            justify-content:space-evenly;
            flex-wrap:wrap;
            background: rgb(227, 224, 224);
        }
        .main-ipsgm{
            margin-left:350px;
            margin-top:200px;
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
    </style>
    </head>
    <body>
        <div class="aadudam-con">
            <img src="../../../assets//images/jagan.jpg" alt="" class="">
            <div class="">
            CM JAGAN TO LAUNCH ‘AADUDAM ANDHRA’ TODAYChief Minister Y.S. Jagan Mohan Reddy Will Kickstart The ‘Aadudam Andhra’, Sports Festival, On Loyola Public School Grounds At Nallapadu In Guntur District On Tuesday. This Is The First Time The State Government Is Conducting Sports Competitions From The Village/Ward Secretariat Level To The State Level. The Competitions Include Cricket, Volleyball, Kabaddi, Kho-Kho, And Badminton Doubles, According To The Press Release. The Government Is Set To Conduct The Tournaments For 47 Days Starting From December 26 To February 10, 2024. As Many As 34.19 Lakh Players Will Participate, While More Than 88.66 Lakh Spectators Will Be Present. Prizes Will Be Awarded At The Constituency, District, And State Levels, Including ₹12 Crores In Cash Prizes And Other Exciting Prizes.
            </div>
        </div>
        <div class="iot-index">
                <div class="ipsgm-cont">
                    <div class="image-container">
                        <img src="../../../assets/images/cricketad.jpg" alt="Your Image">
                        <div class="image-name">CRICKET</div>
                    </div>
                    <div class="image-container">
                        <img src="../../../assets/images/badminton.jpg" alt="Your Image">
                        <div class="image-name">BADMINTON</div>
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
                        <img src="../../../assets/images/khokhoad.jpg" alt="Your Image">
                        <div class="image-name">KHO KHO</div>
                    </div>
                </div>
        </div>
        <div class="main-ipsgm">
            <button class=""><a href="loginaududam.php" class="insert">Insert</a></button>
            <?php
            include("../../../includes/connection.php");
            $sql="select * from aadudam";
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