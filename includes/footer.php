<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Tech</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size:18px;
            color: #333;
        }

        .containerfooter {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        footer {
            background-color: whitesmoke; /* Violet color */
            color: black;
            padding: 30px 0;
            text-align: center;
        }

        .footer-links a {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #ffd700; /* Change color on hover, you can adjust this */
        }

        .footer-bottom {
            margin-top: 20px;
            padding: 10px 0;
            background-color: #535056; /* Same violet color as the footer */
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <footer>
        <div class="containerfooter">
            <!-- Your website content goes here -->
            <h1>Welcome to Computer Tech!</h1><br>
            <!-- <p>Explore our pages: <a href="home.php">Home</a> | <a href="about.php">About</a> | <a href="technology.php">Technology</a> | <a href="project1.php">Projects</a> | <a href="semester1.php">Semester</a> | <a href="alumini.php">Alumni</a></p> -->
            <p>Explore our pages: 
                <a href="/public_html/index.php">Home</a> | 
                <a href="/public_html/pages/about.php">About</a> | 
                <a href="/public_html/categories/technology/technology.php">Technology</a> | 
                <a href="/public_html/categories/projects/project1.php">Projects</a> | 
                <a href="/public_html/categories/semester/semester1.php">Semester</a> | 
                <a href="/public_html/pages/alumini.php">Alumni</a>
            </p>

        </div>
        <div class="containerfooter">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Computer Tech | All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
