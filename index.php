<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3 Index Page</title>
    <link rel="stylesheet" href="static/css/a3.css">
</head>

<body>

    <?php
    $url = "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.courses/";
    $response = file_get_contents($url);
    $courses = json_decode($response, true);
    ?>

    <div id="courses">
        <h2>Courses</h2>
        <table>
            <tr>
                <th>Course ID</th>
                <th>Title</th>
                <th>Credit Points</th>
                <th>Career</th>
                <th>Coordinator</th>
                <th>View Enrolled Students</th>
            </tr>
            <?php foreach ($courses as $course): ?>
            <tr>
                <td><?php echo htmlspecialchars($course['courseID']); ?></td>
                <td><?php echo htmlspecialchars($course['title']); ?></td>
                <td><?php echo htmlspecialchars($course['creditPoints']); ?></td>
                <td><?php echo htmlspecialchars($course['career']); ?></td>
                <td><?php echo htmlspecialchars($course['coordinator']); ?></td>
                <td><a href="details.php?courseID=<?php echo htmlspecialchars($course['courseID']); ?>">View Enrolled
                        Students</a></td>
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