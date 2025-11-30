<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Database Management</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      font-size:16px;
    }

    .container12 {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 900px;
      box-sizing: border-box;
      margin-left:450px;
      margin-top:160px;
    }

    h1, h2 {
      color: #343a40;
      text-align: center;
    }

    p {
      color: #6c757d;
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #007bff;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      margin-bottom: 20px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    .login-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .login-form label {
      margin-top: 10px;
      color: #007bff;
    }

    .login-form input {
      padding: 8px;
      margin: 8px 0;
      width: 100%;
      box-sizing: border-box;
    }

    .login-form button {
      background-color: #28a745;
      color: #ffffff;
      margin-top: 15px;
    }

    .content {
      display: none;
    }

    .welcome-message {
      text-align: center;
      margin-bottom: 20px;
    }

    .logout-button {
      background-color: #dc3545;
      color: #fff;
      margin-top: 15px;
    }

    /* Styles for student and faculty pages */
    .student-page, .faculty-page {
      display: none;
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

<div class="container12">
<a href="sw1-page.php" class="close-link close-link2">×</a>
  <h1>Student Database Management</h1>
  <p>
    The Student Database Management application is designed to streamline academic processes and enhance communication within educational institutions.
    It offers distinct functionalities for students and faculty members, allowing them to access relevant information and perform essential tasks efficiently.
  </p>

  <h2>For Students</h2>
  <div class="login-form">
    <label for="studentUsername">Username:</label>
    <input type="text" id="studentUsername" placeholder="Enter your username" required>

    <label for="studentPassword">Password:</label>
    <input type="password" id="studentPassword" placeholder="Enter your password" required>

    <button onclick="studentLogin()">Login</button>
  </div>

  <h2>For Faculty Members</h2>
  <div class="login-form">
    <label for="facultyUsername">Username:</label>
    <input type="text" id="facultyUsername" placeholder="Enter your username" required>

    <label for="facultyPassword">Password:</label>
    <input type="password" id="facultyPassword" placeholder="Enter your password" required>

    <button onclick="facultyLogin()">Login</button>
  </div>

  <!-- Student Page Content -->
  <div class="content student-page">
    <div class="welcome-message">
      <h2>Welcome, Student!</h2>
      <p>You can view your personal profile, academic results, attendance records, timetable, and receive important notifications from the college.</p>
    </div>
    <button class="logout-button" onclick="logout()">Logout</button>
  </div>

  <!-- Faculty Page Content -->
  <div class="content faculty-page">
    <div class="welcome-message">
      <h2>Welcome, Faculty Member!</h2>
      <p>You can manage student information, including adding new student details, editing existing details, and access student academic results, attendance records, and class schedules.</p>
    </div>
    <button class="logout-button" onclick="logout()">Logout</button>
  </div>
</div>

<script>
  function studentLogin() {
    // Simulating a successful login for the student
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.student-page').style.display = 'block';
  }

  function facultyLogin() {
    // Simulating a successful login for the faculty member
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.faculty-page').style.display = 'block';
  }

  function logout() {
    document.querySelector('.login-form').style.display = 'flex';
    document.querySelector('.content').style.display = 'none';
    document.getElementById('studentUsername').value = '';
    document.getElementById('studentPassword').value = '';
    document.getElementById('facultyUsername').value = '';
    document.getElementById('facultyPassword').value = '';
  }
</script>

</body>
</html>
