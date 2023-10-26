<?php
function validateForm() {
    $studentID = trim($_POST['studentID']);
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $phone = trim($_POST['phone']);
    
    $errors = [];

    // Validate Student ID
    if (!preg_match('/^s\d{7}$/', $studentID)) {
        $errors['studentID'] = 'Student ID must start with "s" followed by 7 digits.';
    }

    // Validate First Name
    if (!preg_match('/^[A-Z][a-zA-Z]*$/', $firstName)) {
        $errors['firstName'] = 'First name must start with an uppercase letter and contain only letters.';
    }

    // Validate Last Name
    if (!preg_match('/^[A-Z][a-zA-Z]*$/', $lastName)) {
        $errors['lastName'] = 'Last name must start with an uppercase letter and contain only letters.';
    }

    // Validate Phone
    if (!preg_match('/^04\d{8}$/', $phone)) {
        $errors['phone'] = 'Phone number must start with "04" followed by 8 digits.';
    }

    return [$studentID, $firstName, $lastName, $phone, $errors];
}
?>