<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif; /* Change font for better compatibility */
    font-size: 20px; /* Increase base font size for better readability */
}

.main {
    position: relative;
}

.submain2 {
    top: 0;
    position: fixed;
    width: 100%;
    height: 80px; /* Reduced height for a sleeker design */
    z-index: 10;
    background-color: #333; /* Darker background color */
    display: flex;
    background:black;
    justify-content: space-evenly;
    align-items: center;
    font-size:20px;
    padding: 0 20px; /* Increased padding for better spacing */
}

.logo-img {
    height: 50px; /* Reduced logo size for a more compact header */
    width: 50px;
    border-radius: 50%;
}

.dropdownmenu {
    display:flex;
    width:1200px;
    font-size:22px;
}

.dropdownmenu ul {
    list-style: none;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.dropdownmenu li {
    position: relative;
}

.dropdownmenu a {
    font-size: 24px; /* Adjusted font size for better consistency */
    color: white;
    display: block;
    padding: 10px 20px; /* Increased padding for better clickability */
    border-radius: 2px;
    text-align: center;
    text-decoration: none;
    transition: background 0.25s ease, color 0.25s ease;
}

.dropdownmenu li:hover a {
    background: #fff; /* Darker background on hover */
    color: black; /* Lighter text on hover */
}
.menu-icon {
    color: white;
    font-size: 24px;
    cursor: pointer;
    order: -1;
    margin-left: 10px;
}
    </style>
</head>
<body>
    <div class="main">
        <div class="submain2">
            <div class="logo">
                <img class="logo-img" src="/public_html/assets/images/clglogo.jpg" alt="">
            </div>
            <nav class="dropdownmenu">
                <ul>
                    <!-- <li><a href="index.php">Home</a></li>
                    <li><a href="pages/about.php">About</a></li>
                    <li><a href="categories/technology/technology.php">Technology</a></li>
                    <li><a href="categories/projects/software/sw1-page.php">Projects</a></li>
                    <li><a href="categories/semester/semester1.php">Semester</a></li>
                    <li><a href="categories/sports/games1.php">Sports</a></li>
                    <li><a href="pages/alumini.php">Alumini</a></li> -->
                    <<li><a href="/public_html/index.php">Home</a></li>
                    <li><a href="/public_html/pages/about.php">About</a></li>
                    <li><a href="/public_html/categories/technology/technology.php">Technology</a></li>
                    <li><a href="/public_html/categories/projects/software/sw1-page.php">Projects</a></li>
                    <li><a href="/public_html/categories/semester/semester1.php">Semester</a></li>
                    <li><a href="/public_html/categories/sports/games1.php">Sports</a></li>
                    <li><a href="/public_html/pages/alumini.php">Alumini</a></li>


                </ul>
            </nav>
            <div class="logo">
                <img class="logo-img" src="/public_html/assets/images/clglogo2.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>
