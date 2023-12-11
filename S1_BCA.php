<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1 BCA</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 20px;
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: #ecf0f1;
        }

        h1 {
            color: #ecf0f1;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: linear-gradient(to right, #2c3e50, #34495e);
            margin: 5px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        li:hover {
            transform: scale(1.03);
        }

        a {
            text-decoration: none;
            color: #ecf0f1;
            font-weight: bold;
        }

        a:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Contents</h1>
    <ul>
    <?php
            // Connect to the database
            $c = mysqli_connect("localhost","id21385275_root","Minor@2023","id21385275_studentdb");

            // Fetch all distinct course names for S1 BCA
            $q_courses = "SELECT DISTINCT course_name FROM bca WHERE semester = 'S1'";
            $p_courses = mysqli_query($c, $q_courses);

            // Loop through each course
            while ($course_row = mysqli_fetch_assoc($p_courses)) {
                $courseName = $course_row['course_name'];

                // Fetch PDFs for the current course and semester
                $q_pdfs = "SELECT * FROM bca WHERE course_name = '$courseName' AND semester = 'S1'";
                $p_pdfs = mysqli_query($c, $q_pdfs);

                // Check if there are PDFs for the course and semester
                if (mysqli_num_rows($p_pdfs) > 0) {
                    // Display the course name
                    echo '<li>' . $courseName . '<ul>';

                    // Loop through each PDF for the current course and semester
                    while ($pdf_row = mysqli_fetch_assoc($p_pdfs)) {
                        // Display PDF links
                        echo '<li><a href="data:application/pdf;base64,' . $pdf_row['pdf'] . '" target="_blank">' . $pdf_row['book_name'] . '</a></li>';
                    }

                    // Close the nested ul for the current course
                    echo '</ul></li>';
                }
            }

            // Close the database connection
            mysqli_close($c);
        ?>
    </ul>
   
</body>
</html>