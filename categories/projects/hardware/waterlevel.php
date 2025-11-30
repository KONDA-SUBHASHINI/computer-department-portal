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
            background-color: #f2f2f2;
        }
        body a{
            text-decoration:none;
        }
        .waterlevel{
            margin-left:450px;
            margin-top:160px;
            font-size:16px;
            line-height:26px;
            width: 900px;
            background-color: white;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            margin: 20px;
            max-width: 820px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        h1,
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
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        #control-action {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #response-message {
            margin-top: 20px;
            font-size: 16px;
            color: #007BFF;
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
            background-color: #007BFF;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        #submit-btn:hover {
            background-color: #0056b3;
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
    <title>Water Level Detector and Controller</title>
</head>

<body>
    <div class="waterlevel">
   <a href="hw-page1.php" class="close-link close-link3">×</a>
        <header>
            <h1>Water Level Detector and Controller</h1>
        </header>
    
        <section id="description">
            <p>Construct a water level detector and controller using sensors to monitor water levels in a tank. The hardware
                includes microcontrollers and relay switches to control pumps or valves, ensuring optimal water levels are
                maintained.</p>
        </section>
    
        <section id="features">
            <h2>Key Features</h2>
            <ul>
                <li>Accurate water level monitoring with sensors.</li>
                <li>Automated control of pumps or valves based on water levels.</li>
                <li>Microcontrollers for precise system management.</li>
                <li>Real-time status updates and notifications.</li>
            </ul>
        </section>
    
        <section id="how-it-works">
            <h2>How It Works</h2>
            <p>The Water Level Detector and Controller system functions in the following way:</p>
            <ol>
                <li>Sensors continuously monitor water levels in the tank.</li>
                <li>Microcontrollers process sensor data and determine the current water level status.</li>
                <li>If water levels are below the optimal threshold, relay switches control pumps or valves to add water.</li>
                <li>Real-time updates are provided, and notifications are sent for critical events.</li>
            </ol>
        </section>
    
        <section id="image">
            <img src="images/khokhoad.jpg" alt="Water Level Detector and Controller">
        </section>
    
        <section id="control-action">
            <h2>Control Water Level</h2>
            <p>Simulate controlling the water level with the click of a button:</p>
            <button id="control-btn" onclick="simulateControl()">Control Water Level</button>
            <p id="response-message"></p>
        </section>
    
        <script>
            function simulateControl() {
                var responseMessage = document.getElementById("response-message");
                responseMessage.textContent = "Water level control initiated. Pumps or valves activated!";
                responseMessage.style.color = "#007BFF";
            }
        </script>
    
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
            var responseMessage = document.getElementById("response-message");
            responseMessage.textContent = "Thank you for reaching out! We will get back to you shortly.";
            responseMessage.style.color = "#007BFF";
        }
    </script>
</body>

</html>
