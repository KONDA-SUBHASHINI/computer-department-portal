<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:whitesmoke;
        }

        .container2 {
            max-width: 800px;
            margin: 50px auto;
            margin-top:160px;
            margin-right:260px;
            padding:30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background:white;
            line-height: 26px;
            font-size:16px;
            position: relative; /* Added to make positioning of close-link relative to container */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .voting-options {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .option {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
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

        #result {
            margin-top: 30px;
        }

        p {
            margin: 10px 0;
        }

        .project-info {
            margin-top: 30px;
        }

        .project-info h2 {
            color: #333;
        }

        .project-info p {
            margin-bottom: 10px;
        }
        .close-link {
            position: relative;
            left: 720px;
            font-size: 40px;
            color: #333;
            text-decoration: none;
        }

        .close-link:hover {
            color: #f00; /* Change color on hover if desired */
        }
    </style>
</head>
<body>
    <div class="container2">
    <a href="sw1-page.php" class="close-link">×</a>
        <h1>Voting System</h1>
        
        <div class="voting-options">
            <div class="option">
                <h2>Option 1</h2><br>
                <button onclick="vote('option1')">Vote</button>
            </div>
            <div class="option">
                <h2>Option 2</h2><br>
                <button onclick="vote('option2')">Vote</button>
            </div>
            <!-- Add more options as needed -->
        </div>

        <div id="result"><br>
            <h2>Vote Results:</h2>
            <p id="option1Votes">Option 1: 0 votes</p>
            <p id="option2Votes">Option 2: 0 votes</p>
            <!-- Add more result sections as needed -->
        </div>

        <div class="project-info">
            <h2>Project Details</h2>
            <p>
                Welcome to the Voting System demo. This simple webpage allows users to vote for different options.
                The voting results are updated in real-time. Feel free to explore the code and use it as a starting point
                for your projects.
            </p><br>
            <h2>How to Use:</h2>
            <ol>
                <li>Click the "Vote" button next to each option to simulate votes.</li>
                <li>The voting results will be displayed below.</li>
                <li>Explore the HTML, CSS, and JavaScript code to understand the implementation.</li>
            </ol><br>
            <h2>Customization:</h2>
            <p>
                You can customize this voting system by adding more options, enhancing the styling, or integrating
                it with a backend server for real data storage.
            </p>
        </div>
    </div>

    <script>
        // Simulate vote counting (you'll replace this with actual backend logic)
        let votes = {
            option1: 0,
            option2: 0
            // Add more options as needed
        };

        function vote(option) {
            votes[option]++;
            updateResults();
        }

        function updateResults() {
            document.getElementById('option1Votes').innerText = `Option 1: ${votes.option1} votes`;
            document.getElementById('option2Votes').innerText = `Option 2: ${votes.option2} votes`;
            // Update more result sections as needed
        }
    </script>

</body>
</html>
