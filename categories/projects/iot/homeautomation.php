<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Automation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }
        .homeautomate{
            height:auto;
            width:900px;
            background:white;
            font-size:16px;
            line-height:22px;
            margin-left:450px;
            margin-top:160px;
        }
        header, section {
            padding: 20px;
            background-color: #63a69f;
            color: white;
            text-align: center;
        }

        #appliances {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .appliance {
            background:red;
            height:280px;
            width:340px;
            margin: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        /* .appliance:hover {
            background-color: #f0f0f0;
        } */

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .appli-img {
            width: 160px;
            height: 160px;
            background:red;
        }

        section {
            margin: 20px;
            text-align: left;
            background-color: #ffffff;
            color:black;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .control-appl{
            background:white;
            text-align:center;
            color:black;
            padding:10px;
            font-size:20px;
        }
        /* Adjusted button style */
        button {
            padding: 10px;
            background-color: #63a69f;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4c7c75;
        }

        .controls-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .controls-container div {
            text-align: center;
        }
        .close-link {
            position: relative;
            font-size: 40px;
            color: #333;
            text-decoration: none;
        }
        .close-link5{
            padding:20px;
            position: relative;
            left: 840px;
            top:5px;
        }
        .close-link:hover {
            color: #f00; /* Change color on hover if desired */
        }
    </style>
</head>
<body>
<div class="homeautomate">
        <a href="iot1-page.php" class="close-link close-link5">×</a>
        <header>
        <h1>Smart Home Automation</h1>
        </header>
        <br><div class="control-appl"><h2>Control Your Appliances</h2></div>
    <section id="appliances">
        <div class="appliance" id="bulb">
            <h3>Bulb</h3>
            <img id="bulb-image" src="../../../assets/images/bulboff.png" class="appli-img" alt="Bulb Off">
            <button onclick="turnOnBulb()">Bulb On</button>
            <button onclick="turnOffBulb()">Bulb Off</button>
        </div>
        <div class="appliance" id="fan">
            <h3>Fan</h3>
            <img id="fan-image" src="../../../assets/images/fanoff.png" class="appli-img" alt="Fan Off">
            <button onclick="turnOnFan()">Fan On</button>
            <button onclick="turnOffFan()">Fan Off</button>
        </div>
        <!-- Add more appliances as needed -->
    </section>

    <section>
        <h2>Project Overview</h2><br>
        <p>
            Our Smart Home Automation project aims to simplify your daily life by providing centralized control over various home appliances. Whether you're at home or on the go, managing your lights, fans, and other devices has never been more convenient.
        </p>
        <p>
            The system utilizes Internet of Things (IoT) technology to establish seamless communication between your appliances and a central control unit. Through an intuitive interface, users can effortlessly toggle the states of their appliances, ensuring comfort and energy efficiency.
        </p>
        <p>
            Fans and bulbs in your home are not just manually controllable but also automated through intelligent sensors. The system can automatically turn them on or off based on environmental conditions or your preset preferences.
        </p>
        <p>
            Additionally, traditional switches are also integrated for manual control, providing a versatile and user-friendly experience.
        </p>
    </section>

    <section>
        <h2>Working Principle</h2><br>
        <p>
            The working principle of our Smart Home Automation system revolves around IoT-enabled devices. Each appliance is equipped with sensors and actuators that communicate with a central hub, typically a microcontroller or a single-board computer.
        </p>
        <p>
            When you click the "Bulb On" or "Bulb Off" button, it sends a command to the central hub, instructing it to change the state of the corresponding device. This real-time communication ensures prompt and reliable control over your home environment.
        </p>
    </section>
    <section>
        <h2>Voice Recognition</h2><br>
        <p>
            Click the button below to start voice recognition for controlling your appliances.
        </p><br>
        <button onclick="startVoiceRecognition()">Start Voice Recognition</button>
    </section>
</div>
    <script>
        function turnOnBulb() {
            const image = document.getElementById('bulb-image');
            image.src = '../../../assets/images/bulbon.png';
        }

        function turnOffBulb() {
            const image = document.getElementById('bulb-image');
            image.src = '../../../assets/images/bulboff.png';
        }
        
        function turnOnFan() {
            const image = document.getElementById('fan-image');
            image.src = '../../../assets/images/fanon.png';
        }

        function turnOffFan() {
            const image = document.getElementById('fan-image');
            image.src = '../../../assets/images/fanoff.png';
        }

        function startVoiceRecognition() {
            // Placeholder alert, replace with your voice recognition logic
            alert("Voice recognition started. Implement your logic here.");
        }
    </script>
</body>
</html>
