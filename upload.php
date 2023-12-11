<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="uploadcss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #080710;
            margin: 0;
            background-image: url('https://hindubabynames.info/wp-content/themes/hbn_download/download/education-companies/amrita-vishwa-vidyapeetham-logo.png');
            background-size: cover;

            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 12vh; /* 100% of the viewport height */
        }

        .background {
            width: 530px;
            height: 620px;
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
            height: 620px;
            width: 500px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 80px rgba(8, 4, 16, 0.6);
            padding: 50px 35px;
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
        }

        form * {
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
            font-weight: bold;
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
            color: black; /* Set placeholder color to black */
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color:#b3b3ff;
            color:black;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            color: #ffffff;
        }

        table, th, td {
            border: 1px solid #ffffff;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #23a2f6;
            color: #080710;
        }
        form label,
form input,
form select,
form button {
    display: block;
    margin: 8px auto; /* Adjust the margin as needed */
    width: 80%; /* Adjust the width of the form elements */
}
form label {
    display: block;
    margin: 10px auto; /* Adjust the margin as needed */
    width: 80%; /* Adjust the width of the form elements */
    color:#b3ffff; /* Set label text color to white */
}
select {
    background-color: grey; /* Set dropdown background color to grey */
    color: black; /* Set dropdown text color */
    height: 17px;
    width: 100%;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}

    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form action="" method="post" enctype="multipart/form-data">

    <h3 style="color: white;"><b>Books</b></h3>

        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" placeholder="Enter book name" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Enter author" required>

        <label for="publication">Publication:</label>
        <input type="text" id="publication" name="publication" placeholder="Enter publication" required>

        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" accept=".pdf" required>

        <label for="table_name">Select Batch:</label>
        <select id="table_name" name="table_name" required>
            <option value="bca">BCA</option>
            <option value="bca_ds">BCA_DS</option>
            <option value="mca">MCA</option>
        </select>

        <label for="semester">Select Semester:</label>
        <select id="semester" name="semester" required>
            <option value="S1">Semester 1</option>
            <option value="S2">Semester 2</option>
            <option value="S3">Semester 3</option>
            <option value="S4">Semester 4</option>
            <option value="S5">Semester 5</option>
            <option value="S6">Semester 6</option>
        </select>

        <label for="course_name">Select Course Name:</label>
        <select id="course_name" name="course_name" required>
            <option value="computer science">Computer Science</option>
            <option value="information technology">Information Technology</option>
            <option value="software engineering">Software Engineering</option>
            <option value="software engineering">Mathamatics</option>
            <!-- Add more course names as needed -->
        </select>

        <button type="submit">Add Book</button>

    </form>

    <?php
$servername = "localhost";
$username = "id21385275_root";
$password = "Minor@2023";
$dbname = "id21385275_studentdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            $fileContent = file_get_contents($targetFile);
            $base64Content = base64_encode($fileContent);

            $bookName = $_POST["book_name"];
            $author = $_POST["author"];
            $publication = $_POST["publication"];
            $selectedTable = $_POST["table_name"];
            $semester = $_POST["semester"];
            $courseName = str_replace("_", " ", $_POST["course_name"]);

$stmt = $conn->prepare("INSERT INTO $selectedTable (book_name, author, publication, pdf, semester, course_name) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $bookName, $author, $publication, $base64Content, $semester, $courseName);

if ($stmt->execute()) {
    echo "File uploaded successfully and book data inserted into the $selectedTable table.";
} else {
    echo "Error inserting record: " . $stmt->error;
}

$stmt->close();

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo '<p style="font-style: italic; color: white;">Upload a file to the corresponding batches.</p>';
    }
}

// Display time spent by each user
/*$sql = "SELECT user_id, SUM(TIMESTAMPDIFF(SECOND, start_time, end_time)) AS time_spent_seconds FROM user_activity GROUP BY user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Time Spent by Each User</h3>";
    echo "<table>";
    echo "<tr><th>User ID</th><th>Time Spent (seconds)</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["time_spent_seconds"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "<p>No records found</p>";
}
*/
$conn->close();
?>

</body>

</html>