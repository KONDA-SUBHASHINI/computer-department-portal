<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }
        .doorlock{
            margin-left:450px;
            margin-top:160px;
            font-size:16px;
            line-height:26px;
           width: 900px;
           background-color: white;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            margin: 20px;
            max-width: 860px;
            background-color: whitesmoke;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        h1{
            color: white;
        }
        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        section ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #666;
        }

        img {
            max-width: 200px;
            margin-left:300px;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        #contact-form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        #submit-btn {
            width: auto;
            cursor: pointer;
        }
        .close-link {
            position: relative;
            left: 720px;
            font-size: 40px;
            color: #333;
            text-decoration: none;
        }
        .close-link3{
            position: relative;
            left: 850px;
            top:5px;
            bottom:20px;
        }
        .close-link:hover {
            color: #f00; /* Change color on hover if desired */
        }
    </style>
    <title>Digital Door Lock System</title>
</head>

<body>
  <div class="doorlock">
   <a href="hw-page1.php" class="close-link close-link3">×</a>
    <header id="headerdoorlock">
        <h1>Digital Door Lock System</h1>
    </header>

    <section id="description">
        <p>Welcome to our state-of-the-art Digital Door Lock System. Experience the future of home security with our
            advanced locking technology.</p>
    </section>

    <section id="features">
        <h2>Key Features</h2>
        <ul>
            <li>Biometric authentication for enhanced security.</li>
            <li>Remote access and control through a mobile app.</li>
            <li>Real-time notifications on door status.</li>
            <li>Multi-user access with customizable permissions.</li>
            <li>Integration with smart home systems.</li>
        </ul>
    </section>

    <section id="how-it-works">
        <h2>How It Works</h2>
        <p>Our Digital Door Lock System utilizes cutting-edge technology to provide a secure and convenient access
            solution:</p>
        <ul>
            <li>Biometric sensors scan fingerprints for user identification.</li>
            <li>Authorized users receive a unique PIN for additional access.</li>
            <li>Mobile app allows remote access and control.</li>
            <li>Real-time status updates and notifications ensure security.</li>
        </ul>
    </section>

    <section id="security-measures">
        <h2>Security Measures</h2>
        <p>Your security is our top priority. Our Digital Door Lock System incorporates robust security measures:</p>
        <ul>
            <li>Advanced encryption for data transmission.</li>
            <li>Tamper detection and automatic lockdown in case of suspicious activity.</li>
            <li>Built-in alarm system for unauthorized access attempts.</li>
            <li>Secure firmware updates to address potential vulnerabilities.</li>
        </ul>
    </section>

    <section id="image">
        <img src="../../../assets/images/doorlock2.png" alt="Digital Door Lock System">
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>If you have any inquiries or need assistance, feel free to contact us. Your satisfaction is our priority.</p>
        <div id="contact-form">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button id="submit-btn" onclick="submitForm()">Submit</button>
        </div>
    </section>

   </div>
    <script>
        function submitForm() {
            alert("Thank you for reaching out! We will get back to you shortly.");
        }
    </script>
</body>

</html>
