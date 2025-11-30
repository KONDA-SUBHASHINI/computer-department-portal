<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer and Study Certificate Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 160px;
            margin-left: 450px;
            max-width: 900px;
            padding: 30px;
            padding-bottom:100px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            line-height: 30px;
            font-size: 17px;
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        p {
            color: #555;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .confirmation {
            margin-top: 30px;
            text-align: center;
        }

        .additional-info {
            margin-top: 30px;
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
            left: 810px;
        }
        .close-link:hover {
            color: #f00; /* Change color on hover if desired */
        }
    </style>
</head>
<body>

    <div class="container">
    <a href="sw1-page.php" class="close-link close-link2">×</a>
        <h1>Transfer and Study Certificate Request</h1><br>
        <p> Welcome to our certificate request service. This website allows you to easily request Transfer Certificates or Study Certificates online. Simply fill out the form below, and we will process your request.</p>
        <form id="certificateForm" onsubmit="event.preventDefault(); submitForm();">
            <label for="studentName">Student Name:</label>
            <input type="text" id="studentName" name="studentName" required>

            <label for="rollNumber">Roll Number:</label>
            <input type="text" id="rollNumber" name="rollNumber" required>

            <label for="certificateType">Select Certificate Type:</label>
            <select id="certificateType" name="certificateType" required>
                <option value="transferCertificate">Transfer Certificate</option>
                <option value="studyCertificate">Study Certificate</option>
            </select>

            <label for="reason">Reason for Certificate Request:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>

            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" pattern="[0-9]{10}" required>
            
            <button type="submit">Submit Request</button>
        </form>

        <div class="confirmation" id="confirmationMessage" style="display:none;">
            <p>Your certificate request has been submitted successfully.</p>
            <p>We will process your request and notify you once it is ready for collection.</p>
        </div>
        <div class="additional-info"><br>
            <h2>Types of Certificates:</h2><br>
            <p><strong>Transfer Certificate:</strong> A Transfer Certificate is issued when a student is leaving the institution and transferring to another school or college.</p>
            <p><strong>Study Certificate:</strong> A Study Certificate is a document confirming that a student is studying in the institution. It is often required for various purposes, including scholarships and education loans.</p>
            <br><h2>Contact Information:</h2><br>
            <p>If you have any questions or concerns regarding the certificate request process, please feel free to contact our office at <strong>contact@example.com</strong> or call <strong>+123 456 7890</strong>.</p>
        </div>
    </div>

    <script>
        function submitForm() {
            // Assume some backend processing logic here
            // For simplicity, let's just show an alert message
            alert('Certificate request submitted successfully!');
            document.getElementById('certificateForm').style.display = 'none';
            document.getElementById('confirmationMessage').style.display = 'block';
        }
    </script>

</body>
</html>
