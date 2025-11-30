
<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Traffic Control Management</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
        }
        header{
            background:#2980b9;
            border-radius:5px;
            color:white;
        }
        #content-container {
            width: 900px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            margin-left:450px;
            margin-top:160px;
            font-size:16px;
            line-height:22px;

        }

        button {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .traffic-light {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 200px;
        }

        .light {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 0 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .red { background-color: #e74c3c; }
        .yellow { background-color: #f39c12; }
        .green { background-color: #2ecc71; }

        section {
            margin-bottom: 20px;
        }
         h1{
            font-size: 32px;
            color:black;
        }
        h2 {
            color: #3498db;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }
        #trafficdemo{
            background-color: white;
            border:2px solid whitesmoke;
            height: 400px;
            width: 880px;
        }
        #trafficdemo:hover{
            background-color: whitesmoke;
            border: 1px solid rgb(177, 173, 173);
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
            left: 420px;
            top:5px;
            bottom:20px;
        }
        .close-link:hover {
            color: #f00; /* Change color on hover if desired */
        }
    </style>
</head>
<body>

    <div id="content-container">
        <a href="iot1-page.php" class="close-link close-link3">×</a><br>
        <header><br>
            <h1>Modern Traffic Control Management</h1><br>
        </header>
        <br>
        <section>
            <h2>Automatic Traffic Light Control</h2><br>
            <p>
                In the current scenario, traditional traffic lights are often inefficient, causing unnecessary waiting times.
                Our innovative solution incorporates vehicle sensing technology to optimize traffic flow dynamically.
                The lights adjust based on real-time traffic conditions.
            </p>
            <p>
                The system intelligently detects the presence of vehicles and adjusts signal timings accordingly, reducing congestion and enhancing efficiency.
            </p>
        </section>
        <br>
        <section>
            <h2>Real-Time Traffic Monitoring</h2><br>
            <p>
                Stay informed with our real-time traffic monitoring system. Explore live updates, traffic statistics, and historical data to make informed decisions.
            </p>
            <!-- Add real-time traffic monitoring components as needed -->
        </section>
        <section id="trafficdemo"><br>
            <h1>Demo</h1>  
          <div class="traffic-light">
              <div class="light red" id="redLight"></div>
              <div class="light yellow" id="yellowLight"></div>
              <div class="light green" id="greenLight"></div>
          </div>
          <button onclick="toggleTrafficLights()">Toggle Lights</button>
          </section><br>
        <section>
            <h2>Vehicle Sensing Technology</h2><br>
            <p>
                Our system employs advanced vehicle sensing technology using cameras, sensors, and machine learning algorithms.
                This allows for precise detection of vehicles at intersections, enabling efficient traffic light control.
            </p>
            <p>
                The system adapts to varying traffic volumes, prioritizing smooth traffic flow and minimizing wait times for drivers.
            </p>
        </section>
        <br>
        <section>
            <h2>Benefits</h2><br>
            <ul>
                <li>Reduced Waiting Times</li>
                <li>Optimized Traffic Flow</li>
                <li>Energy Efficiency</li>
                <li>Improved Safety</li>
                <!-- Add more benefits as needed -->
            </ul>
        </section><br><br>

        <!-- <section>
            <h2>Additional Content Section</h2>
            <p>
                Here, you can add more content as per your project's scope. This could include information about system maintenance, future enhancements, or any other relevant details.
            </p>
        </section> -->
    </div>

    <script>
        let isLightsOn = false;

        function toggleTrafficLights() {
            isLightsOn = !isLightsOn;
            updateTrafficLights();
        }

        function updateTrafficLights() {
            const redLight = document.getElementById('redLight');
            const yellowLight = document.getElementById('yellowLight');
            const greenLight = document.getElementById('greenLight');

            if (isLightsOn) {
                redLight.style.backgroundColor = '#e74c3c';
                yellowLight.style.backgroundColor = '#f39c12';
                greenLight.style.backgroundColor = '#2ecc71';
            } else {
                redLight.style.backgroundColor = 'transparent';
                yellowLight.style.backgroundColor = 'transparent';
                greenLight.style.backgroundColor = 'transparent';
            }
        }
    </script>
</body>
</html>
