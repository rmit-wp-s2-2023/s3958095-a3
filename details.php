<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link rel="stylesheet" href="static/css/a3.css">
</head>

<body>

    <?php
    $courseID = htmlspecialchars($_GET['courseID']);
    $url = "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.courses/?id=$courseID";
    $response = @file_get_contents($url);
    $courseDetails = json_decode($response, true);
    ?>
    <div id="course-details">
        <h2>Course <?php echo $courseID; ?></h2>
        <table>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile Phone</th>
            </tr>
            <?php foreach ($courseDetails['enrolledStudents'] as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['studentID']); ?></td>
                <td><?php echo htmlspecialchars($student['firstName']); ?></td>
                <td><?php echo htmlspecialchars($student['lastName']); ?></td>
                <td><?php echo htmlspecialchars($student['mobilePhone']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <footer>
        <div id="sitemap">
            <!-- Sitemap will be injected here by JavaScript -->
        </div>
    </footer>

    <script src="static/script/sitemap.js"></script>
</body>

</html>