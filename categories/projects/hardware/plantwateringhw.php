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
            background-color: #f0f0f0;
        }
        .planthw{
            height: auto;
            width:900px;
            background-color: white;
            margin-left:450px;
            margin-top:160px;
            line-height:24px;
            font-size:17px;
            padding:34px;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            width: 830px;
        }

        section {
            margin: 20px;
            max-width: 900px;
            width: 100%;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

       section  ul,
        section ol {
            margin-bottom: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #image-container {
            display: none;
            text-align: center;
        }

        #displayed-image {
            max-width: 100%;
            height: auto;
        }
        .close-link {
            position: relative;
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
        .gallerycls{
            height:200px;
            width:400px;
        }
    </style>
    <title>Smart Plant Watering System</title>
</head>

<body>
    <div class="planthw">
        <a href="hw-page1.php" class="close-link close-link2">×</a>
        <section id="intro">
            <header><h1>Smart Plant Watering System</h1></header><br>
            <p>Welcome to our automated plant watering system. Keep your plants healthy with our smart solution!</p>
        </section>
        <section id="materials"><br>
            <h2>Materials Required</h2><br>
            <ul>
                <li>Soil Moisture Sensors (e.g., Capacitive Soil Moisture Sensor)</li>
                <li>Microcontroller (e.g., Arduino Uno)</li>
                <li>Water Pump</li>
                <li>Tubing and Connectors</li>
                <li>Power Source (e.g., 9V Battery or DC Power Supply)</li>
                <li>Jumper Wires</li>
                <li>Breadboard</li>
                <li>Enclosure for Electronics</li>
                <li>Optional: Mobile App for Monitoring (Smartphone with Bluetooth capabilities)</li>
            </ul>
        </section>
        <section id="how-it-works"><br>
            <h2>How It Works</h2><br>
            <p>Our system monitors soil moisture levels and waters the plants when needed. Here's how:</p>
            <ol>
                <li>Sensors constantly measure soil moisture.</li>
                <li>When moisture levels drop below a set threshold, the system activates the water pump.</li>
                <li>Water is released into the soil until optimal moisture levels are reached.</li>
            </ol>
        </section>
    
        <section id="features"><br>
            <h2>Features</h2><br>
            <ul>
                <li>Automatic watering based on soil moisture levels.</li>
                <li>Customizable settings for different plant types.</li>
                <li>Real-time monitoring through a mobile app.</li>
                <li>Watering history and analytics.</li>
            </ul>
        </section>
        <section id="gallery"><br>
            <h2>Gallery</h2>
            <img src="../../../assets/images/plantwatering2.png" class="gallerycls" alt="">
            <!-- Add images or videos of the plant watering system in action -->
        </section>
    
        <section id="contact">
            <h2>Contact Us</h2><br>
            <p>Have questions or want to get our smart plant watering system? Contact us at <a
                    href="mailto:info@example.com">info@example.com</a>.</p>
        </section>
    
        <section id="interactive"><br>
            <h2>Interactive Demo</h2><br>
            <p>Click the button below to simulate starting the watering process:</p>
            <button onclick="startWatering()">Start Watering</button><br>
    
            <div id="image-container">
                <img id="displayed-image" src="images/plantwatering3.png" alt="Watering in progress">
                <p>Watering in progress...</p>
            </div>
        </section>
    </div>
    <script>
        // Basic JavaScript functionality (for representation purposes)
        function startWatering() {
            // Display the image and content
            document.getElementById('image-container').style.display = 'block';
        }
    </script>
</body>

</html>
