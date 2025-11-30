<?php
    include("../includes/menu.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
}
.aimg1{
    margin-left: 50px;
    display: flex;
    flex-direction: row;
}
.sub1 img{
    height: 80px;
    width: 80px;
}
.sub2{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.sub2 h1{
    color: #a72cb2;
}
.sub2 h3{
color:#000;
}
.menudet{
    display: flex;
}
.home,.event,.about,.gallery,.contact{
    
    height: 80px;
    width: 75px;
    padding-left: 30px;
   display: flex;
   align-items: center;
   justify-content: center;
}

.homedet{
    width: 60%;
    border: 10px solid #dbe5f3;
    margin-left: 30%;
    margin-top: 160px;
    display: flex;
    background-color:#ecf1f5;
}
.hdimg{
    height: 350px;
    display: flex;
    margin-left: -40%;
    justify-content: center;
    align-items: center;
}
.hdimg img{
    height: 300px;
    width: 450px;
    margin-right: 20px;
   border-radius: 5px;
}
.hdmatter h1{
    margin-top: 10px;
    line-height: 50px;
}
.hdmatter p{
    font-size: 20px;
    font-weight: 200;
    line-height: 30px;
}


.respon{
    width: 100%;
    height: 400px;
    background-color: rgb(226, 226, 222);
    display: flex;
    flex-direction: column;
    margin-top: 50px;
} 
.rdet{
    display: flex;
width: 100%;
margin-top: 50px;
align-items: center;
justify-content: space-between;
}
.scholarship,.hcs,.hou,.boc{
    display: flex;
    flex-direction: column; 
    align-items: center; 
    width: 20%;
    height: 250px;
}
.scholarship img,.hcs img,.hou img,.boc img{
    height: 80px;
    width: 80px;
    border-radius: 100%;   
}
.scholarship h3,.hcs h3,.hou h3,.boc h3{
    margin-top: 5px;
    font-size: 25px;
}
.scholarship h6,.hcs h6,.hou h6,.boc h6{
    margin-top: 10px;
    font-size: 15px;
    width: 90%;
    color: rgb(104, 94, 94);
    line-height: 25px;
    text-align: center;
}
.ue {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
}

.centered-div {
    width: 1100px;
    height: 420px;
    background-color: lightblue;
    overflow: hidden;
}

.content-wrapper {
    display: flex;
    transition: transform 0.1s ease;
}

.content {
    display: flex;
    flex: 0 0 1100px;
    padding: 20px;
}
.cimg img{
    height: 300px;
    width: 450px;
}
.cmatter{
    display: flex;
    flex-direction: column;
    margin: 30px;
    padding-left:20px;
}
.cmatter p{
    margin-top: 30px;
    line-height: 25px;
    padding:10px;
}
.navigation {
 display: flex;
align-items: center;
justify-content: center;
justify-content: space-between;
}
.navigation button{
background-color: black;
padding:10px 15px;
border-radius:4px;
margin:10px;
color: white;
font-size: 15px;
font-weight: 500;

}

@keyframes slideRight {
    from { transform: translateX(1100px); }
    to { transform: translateX(0); }
}
@keyframes slideLeft {
    from { transform: translateX(-1100px); }
    to { transform: translateX(0); }
}


.aboutdet{
    background-color: rgb(231, 231, 231);
    flex-direction: column;
    display: flex;
    margin-top: 50px;
    font-size:17px;
    line-height:22px;
    color:black;
}

.ab1div{
    background-color: rgb(204, 204, 225);
    align-items: center;
    justify-content: center;
    margin: 50px;
    display: flex;
    height: 360px;
    width: 80%;
border: 2px solid rgb(128, 128, 128);
border-radius: 10px;
}
.ab1div:hover{
border: 5px solid rgb(128, 128, 128);
}
.ab2div{
    background-color: rgb(204, 204, 225);
    align-self: flex-end;
    align-items: center;
    justify-content: center;
    margin: 50px;
    display: flex;
    height: 360px;
    width: 80%;
border:2px solid rgb(128, 128, 128);
border-radius: 10px;
}
.ab2div:hover{
border: 5px solid rgb(128, 128, 128);
}
.ab2matter,.ab1matter{
    width: 75%;
    padding-left:20px;
    padding:30px;
}
.ab2matter {
     padding:30px;
     padding-top:50px;
     padding-bottom:20px;
}
.ab1matter {
     padding:30px;
     padding-top:50px;
     padding-bottom:20px;
}
.gallerydet {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
    padding: 20px;
    background-color: #f4f4f4;
}

.gallery-item {
    /*background:lightblue;*/
    width:400px;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.gallery-item:hover {
    transform: scale(1.05);
}

.gallery-image {
    width: 400px;
   height: 280px;
   padding:20px;
    display: block;
}

.gallery-caption {
    /*background-color: lightblue;*/
    color: white;
    width: 400px;
    font-size: 14px;
    padding: 10px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s;
}

/*.gallery-item:hover .gallery-caption {*/
/*    opacity: 1;*/
/*}*/
.ab1img img , .ab2img img{
    height:260px;
    width:300px;
    margin-left:30px;
    margin-right:30px;
}
    </style>
</head>

<body>
    <div class="homedet">
        <div class="hdimg">
            <img src="../assets/images/aluimg7.jpeg" alt="">
        </div>
        <div class="hdmatter"><br>
            <h1>OUR MISSION</h1>
            <p>Our alumni are the heart of Computer Tech Hub. We're dedicated to empowering them to excel in their careers and communities. Through networking, mentorship, and ongoing support, we foster a tight-knit community of leaders committed to making a positive impact. Together, we embody excellence, integrity, and innovation, driving positive change worldwide. With a shared passion for growth and collaboration, we continually strive to push the boundaries of what's possible, shaping the future of technology and society.
            </p>
        </div>
    </div>
<br><br>
<div class="abhead" style="margin-top: 40px;">
    <h1 style="text-align: center;">ABOUT</h1>
</div>
    <div class="aboutdet">
        
        <div class="ab1div">
            <div class="ab1img">
                <img src="../assets/images/aluimg4.jpeg" alt="">
            </div>
            <div class="ab1matter">
                <h1>Alumni Diversity and Achievement</h1><br>
                <p>At our recent alumni gathering, individuals from diverse academic backgrounds and professional fields converged, each bringing unique perspectives and valuable experiences. It was inspiring to witness alumni who had excelled in various industries, sharing insights and offering guidance gleaned from their successful careers. The event underscored the strength and breadth of our alumni network, highlighting the collective achievements of our graduates. The gathering served as a reminder of the enduring impact of our education and the lifelong connections forged through shared experiences, inspiring us to continue striving for excellence and supporting one another on our professional journeys.  We extend our gratitude to all who participated ,enriching the occasion with their presence and contributions.
                </p>
            </div>
        </div>
        <div class="ab2div">
            <div class="ab2matter">
                <h1>Alumni Entrepreneurship Lecture Recap</h1><br>
                <p>
                Our alumni member, [Name], recently delivered a riveting guest lecture on entrepreneurship, igniting a spark of inspiration within our community. Through personal anecdotes and insightful analysis, they delved into the essential aspects of entrepreneurial success, from cultivating the right mindset to seizing opportunities and navigating challenges with resilience. Emphasizing the importance of vision, adaptability, and building strong networks, [Name] imparted invaluable wisdom that resonated deeply with our aspiring entrepreneurs. Their lecture served as a beacon of guidance, equipping us with the knowledge and determination to chart our own paths in the dynamic world of entrepreneurship. We extend our sincere appreciation to [Name] for their enlightening contribution, exemplifying the spirit of innovation that defines our Computer Tech Hubs alumni network.
                </p>
            </div>
                <div class="ab2img">
                    <img src="../assets/images/aluimg2.jpeg" alt="">
                </div> 
        </div>
        <div class="ab1div">
            <div class="ab1img">
                <img src="../assets/images/aluimg9.jpeg" alt="">
            </div>
            <div class="ab1matter">
                <h1>Alumni Career Tech Insights</h1><br>
                <p>
                During a recent alumni visit, our class had the privilege of hearing from two distinguished professionals about their careers. One alum shared insights into life as a backend engineer at Google, detailing the intricacies of data management and system optimization. Meanwhile, another alumna delved into her role as an Android developer, highlighting her contributions to innovative mobile applications. Their presentations illuminated diverse career paths in tech, inspiring us for our future journeys and providing guidance on reaching our goals. Additionally, they emphasized the importance of staying abreast of evolving and emerging technologies, underscoring the dynamic nature of the industry. We extend our heartfelt gratitude to these alumni for generously sharing their experiences, enriching our understanding of the dynamic tech industry landscape.
                            </div>
        </div>
        </div>
<div class="eventshead" style="margin-top: 40px;">
    <h1 style="text-align: center;">EVENT</h1>
</div>
    <div class="ue">
        <div class="centered-div">
            <div class="content-wrapper">
                <div class="content">
                    <div class="cimg">
                        <img src="../assets/images/aluimg4.jpeg">
                    </div>
                    <div class="cmatter">
                        <h1>we are going to arrange a get together !</h1>
                        <p>Exciting news awaits! We're thrilled to announce a special get-together event. It's an opportunity to reconnect, reminisce, and forge new connections. Mark your calendars and confirm your attendance soon. See you there!
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="cimg">
                        <img src="../assets/images/aluimg1.jpeg">
                    </div>
                    <div class="cmatter">
                        <h1>Alumni Reunion Event Alert !</h1>
                        <p>Get ready for an unforgettable evening as we come together for an alumni get-together event! It's a chance to renew friendships, share stories, and make lasting connections. Don't forget to mark your calendars and let us know you'll be joining us. Looking forward to catching up with you soon!
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="cimg">
                        <img src="../assets/images/aluimg9.jpeg">
                    </div>
                    <div class="cmatter">
                        <h1>Alumni Get-Together Announcement!</h1>
                        <p>We are delighted to extend a warm invitation to a special get-together event! It's a fantastic opportunity to reconnect with old friends, reminisce about fond memories, and create new connections. Make sure to save the date and confirm your attendance soon. We can't wait to see you there!
                        </p>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <button onclick="slideLeft()">Previous</button>
                <button onclick="slideRight()">Next</button>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="galhead">
        <h1 style="text-align: center;">GALLERY</h1><br>
    </div>

    <div class="gallerydet">

            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg1.jpeg" alt="Image 1">
                <!--<div class="gallery-caption">Caption 1</div>-->
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg3.jpeg" alt="Image 2">
                <div class="gallery-caption">Caption 2</div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg5.jpeg" alt="Image 3">
                <div class="gallery-caption">Caption 3</div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg6.jpeg" alt="Image 1">
                <div class="gallery-caption">Caption 4</div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg7.jpeg" alt="Image 2">
                <div class="gallery-caption">Caption 5</div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg8.jpeg" alt="Image 1">
                <div class="gallery-caption">Caption 6</div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="../assets/images/aluimg9.jpeg" alt="Image 2">
                <div class="gallery-caption">Caption 7</div>
            </div>
            <!-- Add more gallery items as needed -->
    </div>
    </div> 
    <div class="respon"><br>
        <h1 style="text-align: center;font-size: 30px;">OUR RESPONSIBILITIES</h1>
        <div class="rdet">
            <div class="scholarship">
                <img src="../assets/images/scholarship.jpg">
                <h3>schloarship</h3>
                <h6>De create building thinking about your requirment and latest treand on our marketplace area

                </h6>
            </div>
            <div class="hcs">
                <img src="../assets/images/helpstudents.jpg">
                <h3>Help current students</h3>
                <h6>De create building thinking about your requirment and latest treand on our marketplace area
                </h6>
            </div>
            <div class="hou">
                <img src="../assets/images/helpuniversity.jpg">
                <h3>Help our university</h3>
                <h6>De create building thinking about your requirment and latest treand on our marketplace area
                </h6>
            </div>
            <div class="boc">
                <img src="../assets/images/buildcommunity.jpg">
                <h3>build our community</h3>
                <h6>De create building thinking about your requirment and latest treand on our marketplace area
                </h6>
            </div>
        </div>
    </div>
    <script>
                let currentIndex = 0;

        function slideLeft() {
            currentIndex = (currentIndex - 1 + 3) % 3; // 3 is the number of divs
            updateSlider('slide-left');
        }

        function slideRight() {
            currentIndex = (currentIndex + 1) % 3; // 3 is the number of divs
            updateSlider('slide-right');
        }

        function updateSlider(animationClass) {
            const contentWrapper = document.querySelector('.content-wrapper');
            contentWrapper.classList.add(animationClass);
            setTimeout(() => {
                contentWrapper.style.transform = `translateX(-${currentIndex * 1100}px)`;
                contentWrapper.classList.remove(animationClass);
            }, 500);
        }





    </script>
</body>

</html>
<?php
    include("../includes/footer.php")
?>