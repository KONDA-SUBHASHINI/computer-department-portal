<?php
    include("../../includes/menu.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .rec{
    height: 1800px;
    width: 79%;
    background-color: whitesmoke;
    margin: 0 auto;
    margin-top: 180px;
    margin-bottom: 100px;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}
.subrec{
    border-radius: 4px;
    height: 300px;
    width: 361px;
    background-color: white;
}
.subrec:hover{
    z-index: 0;
    -webkit-box-shadow: 0px 0px 23px 4px rgba(0,0,0,0.4);
-moz-box-shadow: 0px 0px 23px 4px rgba(0,0,0,0.4);
box-shadow: 0px 0px 23px 4px rgba(0,0,0,0.4);
transform: translateY(-10px);
transition: 0.5ms ease;
}
.tech-names{
    font-size: 30px;
    margin-top: 50px;
    margin-right: 16px;
}
.tech-content{
    margin: 20px;
    font-size: 18px;
}
.rec1{
    height: 60px;
    width: 50px;
    margin-left: 18px;
    background-color: blueviolet;
}
.con-main{
    display: flex;
    gap: 24px;
}
.cir1{
    margin-top: 40px;
    margin-left: -4px;
    height: 60px;
    width: 60px;
    border-radius: 50px;
    background-color: rgb(204, 170, 235);
}
.cir1 i{
    font-size: 30px;
    color: white;
    padding-top: 14px;
    padding-left: 14px;
}
.box1{
    height: 12px;
    width: 12px;
    background-color: blueviolet;
}
.box{
    margin-left: 20px;
    width: 340px;
    display: flex;
    column-gap:200px;
}
.box a{
    margin-top:-20px;
    font-size: 16px;
    color: blueviolet;
}
.year{
    margin-left: 20px;
}
.aboutmain{
    height: auto;
    width: 100%;
    padding-top: 200px;
}
.rec2,.box2{
    background-color: rgb(255, 153, 52);
}
.cir2{
    background: rgb(255, 204, 153);
}
.box2 a,div .read2{
    color: rgb(255, 153, 52);
}
.rec3,.box3{
    background: rgb(51, 153, 255);
}
.cir3{
    background: rgb(153, 204, 255);
}
.ds{
    height:36px;
    margin-left:10px;
    margin-top:11px;
    border-radius:3px;
}
.box3 a,div .read3{
    color: rgb(51, 153, 255);
}
.rec4,.box4{
    background: rgb(255, 102, 102);
}
.cir4{
    background: rgb(255, 153, 153);
}
.box4 a,div .read4{
    color: rgb(255, 102, 102);
}
.rec5,.box5{
    background: rgb(87, 166, 78);
}
.cir5{
    background: rgb(173, 216, 173);
}
.cir5 i{
    color:white;
}
.box5 a,div .read5{
    color: rgb(87, 166, 78);
}
.rec6,.box6{
    background: rgb(255, 102, 255);
}
.cir6{
    background: rgb(255, 183, 255);
}
.box6 a,div .read6{
    color: rgb(255, 102, 255);
}
.rec7,.box7{
    background: rgb(102, 102, 255);
}
.cir7{
    background: rgb(153, 186, 255);
}
.box7 a,div .read7{
    color: rgb(102, 102, 255);
}
.rec8,.box8{
    background: rgb(51, 153, 153);
}
.cir8{
    background: rgb(153, 204, 204);
}
.box8 a,div .read8{
    color: rgb(51, 153, 153);
}
.rec9,.box9{
    background: blueviolet;
}
.cir9{
    background: rgb(204, 170, 235);
}
.box9 a,div .read9{
    color: blueviolet;
}
.rec10,.box10{
    background: rgb(87, 166, 78);
}
.cir10{
    background: rgb(229, 255, 204);
}
.box10 a,div .read10{
    color: rgb(87, 166, 78);
}
.rec11,.box11{
    background: rgb(255, 102, 178);
}
.cir11{
    background: rgb(255, 173, 204);
}
.box11 a,div .read11{
    color: rgb(255, 102, 178);
}
.rec12,.box12{
    background: rgb(255, 153, 52);
}
.cir12{
    background: rgb(255, 204, 153);
}
.box12 a,div .read12{
    color: rgb(255, 153, 52);
}
.rec13,.box13{
    background: blueviolet;
}
.cir13{
    background: rgb(204, 170, 235);
}
.box13 a,div .read13{
    color: blueviolet;
}
.rec14,.box14{
    background: rgb(51, 153, 255);
}
.cir14{
    background: rgb(153, 204, 255);
}
.box14 a,div .read14{
    color: rgb(51, 153, 255);
}
.rec15,.box15{
    background: rgb(255, 102, 102);
}
.cir15{
    background: rgb(255, 153, 153);
}
.box15 a,div .read15{
    color: rgb(255, 102, 102);
}
    </style>
</head>
<body>
        <div class="rec">
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1"><div class="cir1"><i class="fa-solid fa-cloud"></i></div></div>
                    <b class="tech-names">Cloud Computing</b>
                </div><br>
                <p class="tech-content">Cloud computing is using the internet to access and manage computing services and resources remotely.</p>
                <div class="box">
                    <div class="box1"><a  class="year">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/cloudcomputing.html" class="">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec2"><div class="cir1 cir2"><i class="fa-brands fa-hive"></i></div></div>
                    <b class="tech-names">Blockchain</b>
                </div><br>
                <p class="tech-content">Blockchain is like a public, unchangeable digital notebook that records transactions securely and openly for everyone to see.</p>
                <div class="box">
                    <div class="box1 box2"><a class="year year2">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/blockchain.html" class="read2">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec3"><div class="cir1 cir3"><img class="ds" src="../../assets/images/dslogo.png" alt=""></i></div></div>
                    <b class="tech-names">Data Science</b>
                </div><br>
                <p class="tech-content">Data science is using data to find insights, patterns, and solutions, helping make informed decisions.</p>
                <div class="box">
                    <div class="box1 box3"><a class="year year3">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/datascience.html" class="read3">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec4"><div class="cir1 cir4"><img class="ds" src="../../assets/images/ailogo1.png"></div></div>
                    <b class="tech-names">Artificial Intelligence</b>
                </div>
                <p class="tech-content">Artificial Intelligence is making computers smart, enabling them to learn, think, and solve problems like humans.</p>
                <div class="box">
                    <div class="box1 box4"><a class="year year4">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/ai.html" class="read4">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec5"><div class="cir1 cir5"><i class="fa-solid fa-robot"></i></div></div>
                    <b class="tech-names">Robotics</b>
                </div><br><br>
                <p class="tech-content">Robotics is creating and using robots to perform tasks or jobs, often mimicking human actions.</p>
                <div class="box">
                    <div class="box1 box5"><a class="year year5">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/robotics.html" class="read5">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec6"><div class="cir1 cir6"><i class="fa-solid fa-computer"></i></div></div>
                    <b class="tech-names">Quantum Computing</b>
                </div>
                <p class="tech-content"> Quantum computing uses quantum bits to process information, offering faster problem-solving potential compared to classical computers.</p>
                <div class="box">
                    <div class="box1 box6"><a class="year year6">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/qc.html" class="read6">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec7"><div class="cir1 cir7"><img class="ds" src="../../assets/images/vrlogo.png"></div></div>
                    <b class="tech-names">Virtual Reality</b>
                </div><br>
                <p class="tech-content">Virtual reality is a computer-generated environment that immerses users in a simulated, interactive experience using headsets.</p>
                <div class="box">
                    <div class="box1 box7"><a class="year year7">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/vr.html" class="read7">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec8"><div class="cir1 cir8"><i class="fa-solid fa-vr-cardboard"></i></div></div>
                    <b class="tech-names">Human Augumentation</b>
                </div><br>
                <p class="tech-content">Human augmentation enhances natural abilities using technology, like implants or exoskeletons, to improve performance or functionality.</p>
                <div class="box">
                    <div class="box1 box8"><a class="year year8">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/augmentation123.html" class="read8">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec9"><div class="cir1 cir9"><img class="ds" src="../../assets/images/mllogo.png"></div></div>
                    <b class="tech-names">Machine Learning</b>
                </div><br>
                <p class="tech-content">Machine learning is teaching computers to learn from data, make decisions, and improve performance without explicit programming.</p>
                <div class="box">
                    <div class="box1 box9"><a class="year year9">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/machine.html" class="read9">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec10"><div class="cir1 cir10"><i class="fa-solid fa-lock"></i></div></div>
                    <b class="tech-names">Cyber Security</b>
                </div><br>
                <p class="tech-content">Cybersecurity protects computer systems, networks, and data from digital threats, ensuring confidentiality, integrity, and availability.</p>
                <div class="box">
                    <div class="box1 box10"><a class="year year10">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/cyber.html" class="read10">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec11"><div class="cir1 cir11"><i class="fa-solid fa-database"></i></div></div>
                    <b class="tech-names">Big Data</b>
                </div><br>
                <p class="tech-content">Big data refers to massive amounts of information, analyzed for insights, patterns, and decision-making in various fields.</p>
                <div class="box">
                    <div class="box1 box11"><a class="year year11">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/bigdata.html" class="read11">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec12"><div class="cir1 cir12"><i class="fa-solid fa-globe"></i></div></div>
                    <b class="tech-names">Internet Of Things</b>
                </div><br>
                <p class="tech-content">Internet of Things connects everyday objects to the internet, allowing them to send and receive data.</p>
                <div class="box">
                    <div class="box1 box12"><a class="year year12">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/iottech.html" class="read12">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec13"><div class="cir1 cir13"><i class="fa-solid fa-display"></i></div></div>
                    <b class="tech-names">Computer Aided-Design</b>
                </div>
                <p class="tech-content">Computer-aided design (CAD) uses software to create precise digital drawings and models for engineering and design purposes.</p>
                <div class="box">
                    <div class="box1 box13"><a class="year year13">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/cad.html" class="read13">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec14"><div class="cir1 cir14"><i class="fa-solid fa-infinity"></i></div></div>
                    <b class="tech-names">DevOps</b>
                </div><br>
                <p class="tech-content">DevOps is a collaborative approach merging development and operations, emphasizing automation and continuous delivery for efficiency.</p>
                <div class="box">
                    <div class="box1 box14"><a class="year year14">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/devOps.html" class="read14">Read More</a></b></div>
                </div>
            </div>
            <div class="subrec">
                <div class="con-main">
                    <div class="rec1 rec15"><div class="cir1 cir15"><i class="fa-brands fa-uikit"></i></div></div>
                    <b class="tech-names"><UI>
                    <X></X>UX</b>
                </div><br>
                <p class="tech-content">Digital twins are virtual replicas of physical objects, enabling real-time monitoring, analysis, and simulation for better understanding and optimization.</p>
                <div class="box">
                    <div class="box1 box15"><a class="year year15">2021</a></div>
                   <div class=""> <b class=""><a href="/public_html/categories/technology/ui.html" class="read15">Read More</a></b></div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>
<?php
    include("../../includes/footer.php")
?>