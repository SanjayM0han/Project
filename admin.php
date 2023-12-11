<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style media="screen">
        *, *:before, *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
            font-family: 'Poppins', sans-serif;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        input[type="submit"] {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        #error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Connect to the database (replace these values with your actual database credentials)
        $conn = new mysqli("localhost","id21385275_root","Minor@2023","id21385275_studentdb");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to check if the email and password are correct
        $sql = "SELECT * FROM faculty WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        // Check if a matching record is found
        if ($result->num_rows > 0) {
            // Redirect to upload.php
            header("Location: upload.php");
            exit();
        } else {
            echo "<p ><center style='color: red;'><br><br>Invalid email or password.</center> </p>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>

    <!-- The login form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h3>Faculty Login</h3>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="john@gmail.com" required><br>
<br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password"required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

