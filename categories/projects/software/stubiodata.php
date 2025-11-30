<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Biodata Management</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    .container1 {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 900px;
      box-sizing: border-box;
      margin-top:160px;
      margin-left:450px;
      line-height:24px;
      font-size:16px;
    }

    h1 {
      color: #343a40;
      text-align: center;
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

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #dee2e6;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: #ffffff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin-top: 10px;
      color: #007bff;
    }

    input {
      padding: 8px;
      margin: 8px 0;
      width: 100%;
      box-sizing: border-box;
    }

    form button {
      background-color: #28a745;
      color: #ffffff;
      margin-top: 15px;
    }

    form button.cancel {
      background-color: #dc3545;
    }

    #updateForm h2 {
      color: #28a745;
    }

    #updateForm button {
      background-color: #ffc107;
      color: #343a40;
    }

    /* Additional styles for content */
    p {
      color: #343a40;
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    h2 {
      color: #007bff;
    }

    hr {
      border: 1px solid #dee2e6;
      margin: 20px 0;
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

<div class="container1">
  <a href="sw1-page.php" class="close-link close-link2">×</a>
  <h1>Student Biodata Management</h1><br>
  <p>Welcome to the Student Biodata Management website! This platform provides a streamlined process for storing and managing student biodata, offering a centralized system for easy access and organization of student records.</p>
  <br><h2>Why Use This Website?</h2><br>
  <p>This website is designed to simplify the administrative tasks associated with managing student information. Here are some key features and benefits:</p>
  <ul>
    <li><strong>Efficient Data Management:</strong> Easily add, view, update, and delete student records from a centralized system.</li>
    <li><strong>User-Friendly Interface:</strong> The intuitive and user-friendly interface makes it convenient for administrators and authorized personnel to navigate and use the system.</li>
    <li><strong>Time-Saving:</strong> Streamline the process of managing student data, saving valuable time for educational institutions and administrators.</li>
    <li><strong>Organization:</strong> Keep student records organized in one place, reducing the chances of data duplication or errors.</li>
    <li><strong>No Advanced Features:</strong> The focus is on simplicity, making it accessible without the need for complex user authentication or advanced data analysis.</li>
  </ul>

  <hr>

  <button onclick="showAddForm()">Add New Student</button>

  <form id="addForm" onsubmit="addStudent(); return false;">
    <label for="name">Name:</label>
    <input type="text" id="name" required>

    <label for="age">Age:</label>
    <input type="number" id="age" required>

    <label for="grade">Grade:</label>
    <input type="text" id="grade" required>

    <button type="submit">Add Student</button>
  </form>

  <table id="studentTable">
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Grade</th>
      <th>Action</th>
    </tr>
    <!-- Student records will be dynamically added here -->
  </table>

  <form id="updateForm" onsubmit="updateStudent(); return false;">
    <h2>Update Student</h2>
    <input type="hidden" id="updateIndex">
    <label for="updateName">Name:</label>
    <input type="text" id="updateName" required>

    <label for="updateAge">Age:</label>
    <input type="number" id="updateAge" required>

    <label for="updateGrade">Grade:</label>
    <input type="text" id="updateGrade" required>

    <button type="submit">Update Student</button>
    <button type="button" class="cancel" onclick="cancelUpdate()">Cancel</button>
  </form>
</div>

<script>
  const studentData = [];

  function showAddForm() {
    document.getElementById('addForm').style.display = 'flex';
    document.getElementById('updateForm').style.display = 'none';
  }

  function addStudent() {
    const name = document.getElementById('name').value;
    const age = document.getElementById('age').value;
    const grade = document.getElementById('grade').value;

    studentData.push({ name, age, grade });
    displayStudents();
    document.getElementById('addForm').reset();
  }

  function displayStudents() {
    const table = document.getElementById('studentTable');
    table.innerHTML = "<tr><th>Name</th><th>Age</th><th>Grade</th><th>Action</th></tr>";

    studentData.forEach((student, index) => {
      const row = table.insertRow();
      const cell1 = row.insertCell(0);
      const cell2 = row.insertCell(1);
      const cell3 = row.insertCell(2);
      const cell4 = row.insertCell(3);

      cell1.innerHTML = student.name;
      cell2.innerHTML = student.age;
      cell3.innerHTML = student.grade;
      cell4.innerHTML = `<button onclick="showUpdateForm(${index})">Update</button>`;
    });
  }

  function showUpdateForm(index) {
    document.getElementById('updateForm').style.display = 'flex';
    document.getElementById('addForm').style.display = 'none';
    document.getElementById('updateIndex').value = index;
    document.getElementById('updateName').value = studentData[index].name;
    document.getElementById('updateAge').value = studentData[index].age;
    document.getElementById('updateGrade').value = studentData[index].grade;
  }

  function updateStudent() {
    const index = document.getElementById('updateIndex').value;
    studentData[index].name = document.getElementById('updateName').value;
    studentData[index].age = document.getElementById('updateAge').value;
    studentData[index].grade = document.getElementById('updateGrade').value;

    displayStudents();
    cancelUpdate();
  }

  function cancelUpdate() {
    document.getElementById('updateForm').style.display = 'none';
    document.getElementById('addForm').style.display = 'flex';
    document.getElementById('addForm').reset();
  }
</script>

</body>
</html>
