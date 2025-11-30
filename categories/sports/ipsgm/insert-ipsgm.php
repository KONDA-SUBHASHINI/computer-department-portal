<html>
<head>
    <style>
        .insert-spt-box {
            height: auto;
            width: 70%;
            max-width: 700px;
            background:#e6e6fa; /* Change background color to lavender */
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="number"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 10px;
            background: rgb(100, 143, 35);
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: green;
        }
    </style>
</head>
<body>
    
    <form action="insert-ipsgm-data.php" method="post">
        <div class="insert-spt-box">
            Name: <input type="text" name="name" placeholder="Enter your name"><br><br>
            PIN: <input type="text" name="pin" placeholder="Enter your branch"><br><br>
            Branch:
            <select name="branch">
                <option name="branch" value="Computer Engineering">Computer Engineering</option>
                <option name="branch" value="Electronic and Communications Engineering">Electronic and Communications Engineering</option>
                <option name="branch" value="Mechanical Engineering">Mechanical Engineering</option>
            </select><br><br>
            Year: <input type="number" min="2022" max="2050" maxlength="4" name="year"><br><br>
            Game Name:
            <select name="gamename">
                <option name="gamename" value="Cricket">Cricket</option>
                <option name="gamename" value="Badminton">Badminton</option>
                <option name="gamename" value="Volley Ball">Volley Ball</option>
                <option name="gamename" value="Kabaddi">Kabaddi</option>
                <option name="gamename" value="Kho Kho">Kho Kho</option>
            </select><br><br>
            Result: <input type="text" name="result"><br><br>
            <input type="submit" value="Insert">
        </div>
    </form>

</body>
</html>