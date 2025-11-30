Certainly! I've added a yellow background color for menu items when the menu button is clicked. Here's the modified code:

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUTER ENGINEERING</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        .main {
            margin-top: 100px; /* Adjust as needed */
        }

        .submain2 {
            top: 0;
            position: fixed;
            width: 100%;
            height: 100px;
            z-index: 10;
            background-color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            margin-right: auto;
        }

        .logo-img {
            height: 70%;
            width: 70px;
            border-radius: 50%;
        }

        .menu-toggle {
            cursor: pointer;
            order: 2;
        }

        .menu-toggle img {
            height: 50px;
            width: 50px;
        }

        .dropdownmenu {
            display: flex;
            flex-direction: row;
            align-items: center;
            order: 3;
        }

        .dropdownmenu a {
            font-size: 18px;
            color: white;
            display: block;
            padding: 10px;
            border-radius: 2px;
            text-align: center;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .dropdownmenu li {
            margin: 0 15px;
        }

        .dropdownmenu a:hover,
        .dropdownmenu a.active {
            background-color: yellow;
            color: black;
        }

        .mySlides img {
            max-width: 100%;
            height: auto;
        }

        .prev,
        .next {
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

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @media only screen and (max-width: 768px) {
            .submain2 {
                flex-direction: column;
                align-items: flex-start;
            }

            .dropdownmenu {
                width: 100%;
                text-align: left;
                padding: 10px;
                display: none;
                position: relative;
                order: 1;
            }

            .dropdownmenu a {
                padding: 10px 0;
                font-size: 18px;
            }

            .dropdownmenu li {
                margin: 10px 0;
            }

            .menu-toggle {
                display: block;
                order: 0;
            }

            .dropdownmenu.show {
                display: flex;
            }
        }
    </style>
</head>

<body class="body">
    <div class="main">
        <div class="submain2">
            <div class="logo-container">
                <div class="logo">
                    <img class="logo-img" src="./images/clglogo.jpg" alt="">
                </div>
                <div class="logo">
                    <img class="logo-img" src="./images/clglogo2.jpg" alt="">
                </div>
            </div>
            <div class="menu-toggle" onclick="toggleNav()">
                <img src="menu-icon.png" alt="Menu">
            </div>
            <nav class="dropdownmenu">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="technology.php">Technology</a></li>
                <li><a href="project1.php">Projects</a></li>
                <li>
                    <a href="">Semester</a>
                    <ul id="submenu">
                        <li><a href="year.php">Sem1</a></li>
                        <li><a href="">Sem2</a></li>
                        <li><a href="">Sem3</a></li>
                        <li><a href="">Sem4</a></li>
                    </ul>
                </li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="alumini.php">Alumni</a></li>
            </nav>
        </div>
    </div>

    <div class="slideshow-container">
        <!-- Slides -->
        <div class="mySlides">
            <img src="./images/homepage1.jpg" alt="Image 1">
        </div>
        <div class="mySlides">
            <img src="./images/ai2.jpg" alt="Image 2">
        </div>
        <div class="mySlides">
            <img src="./images/aboutimg1.jpg" alt="Image 3">
        </div>
        <div class="mySlides">
            <img src="./images/college-image.jpeg" alt="Image 2">
        </div>
        <div class="mySlides">
            <img src="./images/homepage2.jpg" alt="Image 2">
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
        function toggleNav() {
            var nav = document.querySelector('.dropdownmenu');
            nav.classList.toggle('show');
        }

        let slideIndex = 1;

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");

            if (n > slides.length) {
                slideIndex = 1;
            }

            if (n < 1)

 {
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
        }, 3000); // Change slide every 3 seconds
    </script>
</body>

</html>