<?php
 include("includes/menu.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUTER ENGINNERING</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="../js/script.js"></script> -->
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        font-family: sans-serif;
        font-size: 18px;
    }
    /*  for the slideshow */
    .mySlides {
        display: none;
    }
    .mySlides img{
        height: 738px;
        width: 1536px;
    }
    /* Style for navigation arrows */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
    </style>
</head>
<body class="body">
<div class="slideshow-container">
        <!-- Slides -->
        <div class="mySlides">
            <img src="assets/images/homepage1.jpg" alt="Image 1">
        </div>
        <div class="mySlides">
            <img src="assets/images/homeimg1.jpg" alt="Image 2">
        </div>
        <div class="mySlides">
            <img src="assets/images/aboutimg1.jpg" alt="Image 3">
        </div>
        <div class="mySlides">
            <img src="assets/images/college-image.jpeg" alt="Image 2">
        </div>
        <div class="mySlides">
            <img src="assets/images/homepage2.jpg" alt="Image 2">
        </div>
    
        <!-- Navigation arrows -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
        <!-- Navigation dots -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    <script>
        let slideIndex = 1;
    
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
    
            if (n > slides.length) {
                slideIndex = 1;
            }
    
            if (n < 1) {
                slideIndex = slides.length;
            }
    
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
    
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
    
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
    
        showSlides(slideIndex);
    
        setInterval(function () {
            plusSlides(1);
        }, 3000); // Change slide every 2 seconds
    </script>
</body>
</html>