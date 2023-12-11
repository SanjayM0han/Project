<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        /* Styles go here */
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
    background-image: url('https://pbs.twimg.com/profile_images/959577940584415232/_jBMt9Xv_400x400.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}


        body {
            background-color: #080710;
            margin: 0;
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
            background: linear-gradient(
                #1845ad,
                #23a2f6
            );
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(
                to right,
                #ff512f,
                #f09819
            );
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

        .book-request-placeholder {
    /* Remove fixed height and width */
    /* height: 520px;
    width: 300px; */
    
    background-color: rgba(255, 255, 255, 0.13);
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: calc(50% - 500px);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    padding: 50px 35px;
    display: none;
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

        input,
        select {
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

        button {
            margin-top: 50px;
            width: 100%;
            background-color: blue;
            color: black;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }

        form label,
        form input,
        form select,
        form button {
            display: block;
            margin: 7px auto;
            /* Adjust the margin as needed */
            width: 80%;
            /* Adjust the width of the form elements */
        }

        .sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    border-radius: 0;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    /* Set border-radius to 0 for rectangular shape */
    border-radius: 0;
}


        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .open-btn {
            position: fixed;
            left: 20px;
            top: 20px;
            background-color: #111;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        /* Add styles for the close button */
.close-btn {
    position: absolute;
    top: 0px;
    right:0px;
    font-size: 24px;
    color: #fff;
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
}

.close-btn:hover {
    color: #ccc;
}

    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" onclick="showBookRequestForm()">Book Request</a>
        <a href="#">Faculty</a>
    </div>

    <!-- Open sidebar button -->
    <button class="open-btn" onclick="openNav()">
        <i class="fas fa-bars"></i>
    </button>

    <form action="#" method="post">
        <h3>register</h3>

        <label for="account_type">Select Account Type:</label>
        <select id="account_type" name="account_type" onchange="toggleUserIdField()" required>
            <option style="color: black;" value="user">-select-</option>
            <option style="color: black;" value="user">User</option>
            <option style="color: black;" value="faculty">Faculty</option>
        </select>

        <label for="username">Email</label>
        <input type="text" id="username" name="username" placeholder="Eg: Jone@gmail.com" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <div id="user_id_field" style="display: none;">
            <label for="user_id">User ID</label>
            <input type="text" id="user_id" name="user_id" placeholder="User ID">
        </div>

        <input type="submit" value="create">
    </form>


    <!-- Book Request Placeholder -->

    <div class="book-request-placeholder">
    <button class="close-btn" onclick="closeBookRequestForm()">close</button>
    <h3>Book Request Form</h3>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "id21385275_root";
    $password = "Minor@2023";
    $dbname = "id21385275_studentdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select data from the table
    $sql = "SELECT * FROM book_requests";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>ID: " . $row["id"] . "</p>";
            echo "<p>Student Name: " . $row["student_name"] . "</p>";
            echo "<p>Roll No: " . $row["roll_no"] . "</p>";
            echo "<p>Semester: " . $row["semester"] . "</p>";
            echo "<p>Book Name: " . $row["book_name"] . "</p>";
            echo "<p>Faculty Name: " . $row["faculty_name"] . "</p>";
            echo "<p>Additional Info: " . $row["additional_info"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No book requests available.</p>";
    }

    // Close the connection
    $conn->close();
    ?>

    <!-- Additional content in the book request form -->
    <p>This is a book request from students.</p>
    <!-- Add your book request form HTML here -->
</div>




    <script>
        function toggleUserIdField() {
            var accountType = document.getElementById("account_type").value;
            var userIdField = document.getElementById("user_id_field");

            if (accountType === "user") {
                userIdField.style.display = "block";
            } else {
                userIdField.style.display = "none";
            }
        }

        function openNav() {
            document.querySelector('.sidebar').style.width = '250px';
        }

        function closeNav() {
            document.querySelector('.sidebar').style.width = '0';
        }

        // Function to show the book request form
        function showBookRequestForm() {
            var bookRequestForm = document.querySelector('.book-request-placeholder');
            bookRequestForm.style.display = 'block';
        }
        function closeBookRequestForm() {
            var bookRequestForm = document.querySelector('.book-request-placeholder');
            bookRequestForm.style.display = 'none';
        }
        
    </script>
</body>

</html>
