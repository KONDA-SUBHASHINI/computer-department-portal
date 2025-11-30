<?php
    include("../includes/menu.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../assets/css/style.css">
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
    .aboutmain1{
    margin-top:80px;
    height: 540px;
    width: 100%;    
    background-color: rgb(235, 231, 231);
    color: black;
    display: flex;
    column-gap: 140px;
}
.about-main2{
    height: 400px;
    width: 500px;
    padding: 50px;
    margin-top: 60px;
    margin-left: 160px;
    font-size: 17px;
    line-height:24px;
}
.about-image{
    height: 360px;
    width: 500px;
    margin-top:80px ;
}
.about-submain{
    height: 880px;
    width: 100%;
    margin: 0 auto;
    background-color:rgb(235, 231, 231)
}
.vis-mis{
    height: 600px;
    width: 1000px;
    margin: 0 auto;
    background-color: #5499bf;
    line-height: 36px;
    padding: 40px;
}
.vishead{
    text-align: center;
}
.vis-con{
    font-size: 20px;
}
.staff-submain{
    height: 700px;
    width:1500px;
    margin: 30px auto;
    display: flex;
    flex-wrap: wrap;
}
.aboutstaff{
    font-size: 20px;
    text-align: center;
    line-height: 30px;
}
.staff2{
    font-size: 30px;
}
.staffbox{
    height: 200px;
    width: 280px;
    background-color: white;
    border: 6px solid transparent;
    border-radius: 20px;
    padding: 20px;
    margin-top: 100px;
    margin-left: 70px;
    font-size: 22px;
    text-align: center;
    line-height: 36px;
}
.staffbox:hover{
    border: 6px solid white;
}
.aboutcircle{
    height: 90px;
    width: 90px;
    background-color: brown;
    margin-top: -70px;
    margin-left: 80px;
    border-radius: 50px;
}
.about-logo1{
    height: 180px;
    width: 180px;
    border-radius: 55%;
    margin-top: -100px;
    border: 6px solid white;
}
.aboutlogo-2{
    border-radius: 50%;
}
.abt-btn{
    padding: 3px 10px;
    border-style: none;
    background-color: rgb(235, 231, 231);
    color: black;
    font-size: 14px;
    font-weight: bold;
    
}
.abt-btn:hover{
    background-color: black;
    color: white;
}
.abt-qual{
    font-size: 16px;
    font-weight: 400
}
    </style>
</head>
<body>
    <div class="aboutmain">
        <div class="aboutmain1">
            <div class="about-main2">
                <p class="about-con">Welcome to Sri Venkateswara Govt. Polytechnic , an institution dedicated to academic excellence, innovation, and holistic student development. Established in 1993, Sri Venkateswara Govt. Polytechnic has evolved into a distinguished center of learning, empowering students to succeed in a rapidly changing world. Our commitment to fostering a dynamic learning environment goes beyond the traditional classroom, encouraging students to explore their passions, cultivate leadership skills, and make a meaningful impact on society. Embark on a transformative journey with us, where education extends far beyond textbooks, preparing you for a future of endless possibilities.</p>
            </div>
            <div class="about-img">
                <img src="../assets/images/aboutimg1.jpg" alt="" class="about-image">
            </div>
        </div>
        <div class="vis-mis">
            <h1 class="vishead">Vision Of The Department</h1>
            <p class="vis-con">To empower the students to be technologically adept, innovative, self-motivated and responsible citizen with human values and technical skills and to contribute significantly towards the rapidly changing field of Computer Science</p>
            <br><h1 class="vishead">Mission Of The Department</h1>
                <ol class="vis-con" type="1">
                    <li class="">To provide Diploma students who are capable to take pivotal role in wide aspects of modern Computer Engineering.</li>
                    <li class="">To make the students understand basic concepts underlie in Computer Engineering and able to apply them creatively in different fields of Engineering</li>
                    <li class="">To Train the student sensitive to the Environment, safety and economic context</li>
                    <li class="">To produce technically skilled students through intensive training in computer engineering tools and application and to prepare the students for professional career and further research</li>
                </ol>
        </div>
        <div class="about-submain"><br><br>
            <h3 class="aboutstaff">The Staff</h3>
            <h3 class="aboutstaff staff2">Meet Our Staff</h3>
            <div class="staff-submain">
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1" src="../assets/images/hod.jpg"><br><button class="abt-btn">HOD</button><br>BOSU BABU</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1 aboutlogo-2" src="../assets/images/masila_mani.jpg"><br><button class="abt-btn"> SENIORLECTURER</button><br>T.MASILA MANI</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1" src="../assets./images/chaitanya.jpg"><br><button class="abt-btn">LECTURER</button><br>K.V.K. CHAITANYA</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1 " src="../assets/images/hari_sankar.jpg"><br><button class="abt-btn">LECTURER</button><br>G. HARI SANKAR</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1" src="../assets/images/mohan.jpg"><br><button class="abt-btn">LECTURER</button><br>B. MOHAN</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1 aboutlogo-2" src="../assets/images/sandhya.jpg"><br><button class="abt-btn">LECTURER</button><br>B.SANDHYA</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1" src="../assets/images/srujana.jpg"><br><button class="abt-btn">LECTURER</button><br>H.SRUJANA</p>
                </div>
                <div class="staffbox">
                    <p class="staffcontent"><img class="about-logo1" src="../assets/images/lab-attender.jpg"><br><button class="abt-btn">LAB ATTENDER</button><br>T.A. VENKAT REDDY</p>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include("../includes/footer.php")
?>