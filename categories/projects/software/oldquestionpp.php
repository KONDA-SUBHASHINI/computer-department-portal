<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous Question Papers Repository</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 24px;
            background:whitesmoke;
        }
        .questionpp{
          margin-top:160px;
          font-size:15px;
          margin-left:450px;
          height: 900px;
          width: 900px;
          background: white;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          padding: 40px;
        }
        h1, h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .paper-list {
            list-style-type: none;
            padding: 0;
        }

        .paper-list-item {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .subject-image {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
        }
        .close-link {
            position: relative;
            left: 720px;
            font-size: 40px;
            color: #333;
            text-decoration: none;
        }
        .close-link2{
            position: relative;
            left: 800px;
        }
        .close-link:hover {
            color: #f00; /* Change color on hover if desired */
        }
    </style>
</head>
<body>
  <div class="questionpp">
    <a href="sw1-page.php" class="close-link close-link2">×</a>
    <h1>Welcome to the Previous Question Papers Repository</h1><br>
    <p>Our repository provides access to a collection of previous question papers solved by our senior students. This valuable resource is designed to assist current students in their exam preparation by offering insights into the structure and types of questions asked in past semesters.</p>
    <br><h2>Uses of the Repository:</h2><br>
    <ul>
        <li>Study Material: Access a variety of question papers to enhance your understanding of different subjects.</li>
        <li>Exam Preparation: Use these papers as practice tests to simulate exam conditions and improve time management skills.</li>
        <li>Revision Aid: Identify key concepts and topics that are frequently covered in exams for efficient revision.</li>
        <li>Exam Pattern Familiarization: Understand the format and pattern of questions typically asked in each subject.</li>
    </ul><br><br>
    <h2>How to Use:</h2><br>
    <p>Navigate through the list of subjects and semesters below to find the relevant question papers. Click on the links to view or download the papers for your reference.</p>
    <ul class="paper-list">
        <!-- Replace the placeholders with actual information -->
        <li class="paper-list-item"><br>
            <img src="../../../assets/images/aboutrobotics.png" alt="Subject 1 Image" class="subject-image">
            <a href="#">Introduction to Computer Science (CS101) - Fall 2020</a>
        </li>
        <li class="paper-list-item"><br>
            <img src="../../../assets/images/chemistry.png" alt="Subject 2 Image" class="subject-image">
            <a href="#">Chemistry for Engineers (CHEM200) - Spring 2021</a>
        </li>
        <li class="paper-list-item">
            <img src="../../../assets/images/maths.png" alt="Subject 3 Image" class="subject-image">
            <a href="#">Linear Algebra and Differential Equations (MATH205) - Fall 2019</a>
        </li>
        <!-- Add more items as needed -->
    </ul>

    <p>
        We hope you find this repository beneficial for your academic journey. Best of luck with your exams!
    </p>

  </div>
</body>
</html>
