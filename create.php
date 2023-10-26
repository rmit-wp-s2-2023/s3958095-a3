<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="static/css/a3.css">
</head>

<body>

    <?php
    require_once 'functions.php';
    
    $studentID = $firstName = $lastName = $phone = '';
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        list($studentID, $firstName, $lastName, $phone, $errors) = validateForm();
        if (empty($errors)) {
            header('Location: index.php');
            exit();
        }
    }
    ?>

    <div id="form-container">
        <form method="POST">
            <label for="studentID">Student ID:</label>
            <input type="text" id="studentID" name="studentID" value="<?php echo htmlspecialchars($studentID); ?>">
            <span class="error"><?php echo $errors['studentID'] ?? ''; ?></span>

            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>">
            <span class="error"><?php echo $errors['firstName'] ?? ''; ?></span>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>">
            <span class="error"><?php echo $errors['lastName'] ?? ''; ?></span>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            <span class="error"><?php echo $errors['phone'] ?? ''; ?></span>

            <input type="submit" value="Create Student">
        </form>
    </div>

    <footer>
        <div id="sitemap">
            <!-- Sitemap will be injected here by JavaScript -->
        </div>
    </footer>

    <script src="static/script/sitemap.js"></script>
</body>

</html>