<?php

require_once('SignUp_model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $signupModel = new SignUp_model();
    $result = $signupModel->registerUser($username, $firstName, $lastName, $email, $phone, $password);

    if ($result) {
        header("Location: login.html");
        exit();
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>