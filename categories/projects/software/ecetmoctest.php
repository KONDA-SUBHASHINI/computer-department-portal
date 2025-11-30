<?php
include("../project1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECET Mock Test Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            border-radius:10px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        section {
            padding: 40px;
            max-width: 900px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 160px;
            margin-left:450px;
            line-height:25px;
            font-size:16px;
        }

        h1, h3 {
            color: #3498db;
        }
        h1{
            color: white;
        }
        p {
            line-height: 1.5;
        }

        .mock-test-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .question-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }

        .option:hover {
            background-color: #2980b9;
        }

        #timer {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }

        .testimonial img {
            border-radius: 50%;
            max-width: 80px;
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

    <section>
    <a href="sw1-page.php" class="close-link close-link2">×</a>
    <header><h1>ECET Mock Test Website</h1></header>
        <div class="mock-test-card">
            <h2>Welcome to our platform!</h2>
            <p>
                Our ECET Mock Test Website offers a comprehensive and efficient platform for aspiring engineering students
                to prepare for the ECET (Engineering Common Entrance Test) with confidence and precision. The website
                provides a seamless user experience, delivering a range of mock tests specifically designed to replicate
                the format, difficulty level, and subject matter of the actual ECET exam.
            </p>

            <h3>Key Features</h3>
            <div class="feature">
                <div>
                    <h4>Comprehensive Mock Tests</h4>
                    <p>Practice with our carefully crafted mock tests covering the entire ECET syllabus.</p>
                </div>
                <div>
                    <h4>Detailed Solutions</h4>
                    <p>Get in-depth explanations and solutions for every question to enhance your understanding.</p>
                </div>
            </div>

            <div class="feature">
                <div>
                    <h4>User-Friendly Interface</h4>
                    <p>Navigate effortlessly through various engineering disciplines and select mock tests aligned with
                        your field of study.</p>
                </div>
                <div>
                    <h4>Performance Analytics</h4>
                    <p>Receive insights into your strengths and weaknesses to focus on areas that require improvement.</p>
                </div>
            </div>

            <h3>Start Your Mock Test Now!</h3>
            <p>Choose your mock test and begin your journey towards success in the ECET.</p>
            <ul>
                <li><a href="#" class="button start-test" data-test-id="1">Mock Test 1</a></li><br><br>
                <li><a href="#" class="button start-test" data-test-id="2">Mock Test 2</a></li>
                <!-- Add more mock tests as needed -->
            </ul>
        </div>

        <div id="question-container" style="display: none;">
            <div class="question-card" id="question-card">
                <!-- Question and options will be dynamically inserted here -->
            </div>

            <div id="timer"></div>

            <div id="result" style="display: none;">
                <h3>Your Performance</h3>
                <p id="correct-answers"></p>
                <p id="incorrect-answers"></p>
            </div>
        </div>

        <div class="testimonials">
            <h3>What Our Users Say</h3>
            <div class="testimonial">
                <img src="../../../assets/images/user1.png" alt="User 1">
                <p>"This platform has been instrumental in my ECET preparation. The mock tests are challenging, and the
                    detailed solutions have significantly improved my problem-solving skills."</p>
                <p><span class="highlight">John Doe</span>, Mechanical Engineering</p>
            </div>

            <div class="testimonial">
                <img src="../../../assets/images/user2.png" alt="User 2">
                <p>"I appreciate the user-friendly interface and the variety of mock tests available. The performance analytics
                    helped me identify my weak points, allowing me to focus on improvement."</p>
                <p><span class="highlight">Jane Smith</span>, Electrical Engineering</p>
            </div>
        </div>
    </section>
    <script>
        const mockTests = {
            1: [
                {
                    question: "What is the capital of France?",
                    options: ["Berlin", "Madrid", "Paris", "Rome"],
                    correctAnswer: "Paris",
                },
                // Add more questions for Mock Test 1
            ],
            2: [
                {
                    question: "Which planet is known as the Red Planet?",
                    options: ["Mars", "Venus", "Jupiter", "Saturn"],
                    correctAnswer: "Mars",
                },
                // Add more questions for Mock Test 2
            ],
            // Add more mock tests as needed
        };

        let currentTestId;
        let currentQuestionIndex = 0;
        let correctAnswers = 0;
        let incorrectAnswers = 0;
        let timer;

        document.querySelectorAll('.start-test').forEach(button => {
            button.addEventListener('click', startTest);
        });

        function startTest(event) {
            currentTestId = event.target.getAttribute('data-test-id');
            currentQuestionIndex = 0;
            correctAnswers = 0;
            incorrectAnswers = 0;

            displayQuestion();
            startTimer();

            document.getElementById('question-container').style.display = 'block';
            document.querySelector('.mock-test-card').style.display = 'none';
        }

        function displayQuestion() {
            const questionContainer = document.getElementById('question-card');
            const currentQuestion = mockTests[currentTestId][currentQuestionIndex];

            if (currentQuestion) {
                const optionsHTML = currentQuestion.options.map((option, index) =>
                    `<div class="option" onclick="checkAnswer(${index})">${option}</div>`
                ).join('');

                questionContainer.innerHTML = `
                    <h3>Question ${currentQuestionIndex + 1}:</h3>
                    <p>${currentQuestion.question}</p>
                    <div class="options">
                        ${optionsHTML}
                    </div>
                `;
            } else {
                // No more questions, show the result
                showResult();
            }
        }

        function checkAnswer(selectedIndex) {
            const currentQuestion = mockTests[currentTestId][currentQuestionIndex];

            if (currentQuestion.correctAnswer === currentQuestion.options[selectedIndex]) {
                correctAnswers++;
            } else {
                incorrectAnswers++;
            }

            currentQuestionIndex++;
            displayQuestion();
        }

        function startTimer() {
            let timeLimit = 60; // Set time limit for each question in seconds

            timer = setInterval(function () {
                document.getElementById('timer').textContent = `Time Remaining: ${timeLimit} seconds`;

                if (timeLimit <= 0) {
                    clearInterval(timer);
                    checkAnswer(-1); // Automatically consider it incorrect when time runs out
                }

                timeLimit--;
            }, 1000);
        }

        function showResult() {
            clearInterval(timer);

            document.getElementById('timer').style.display = 'none';
            document.getElementById('result').style.display = 'block';
            document.getElementById('correct-answers').textContent = `Correct Answers: ${correctAnswers}`;
            document.getElementById('incorrect-answers').textContent = `Incorrect Answers: ${incorrectAnswers}`;
        }
    </script>
</body>

</html>
