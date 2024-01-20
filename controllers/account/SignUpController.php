<?php
require_once APP_ROOT . "/Models/SignUpModel.php";
class SignUpController
{
    public static function signup()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $signupModel = new SignUpModel();
            $result = $signupModel->registerUser($username, $firstName, $lastName, $email, $phone, $password);
            if ($result) {
                header("location: " . URL_ROOT . URL_SUBFOLDER . '/Home');
                exit();
            } else {
                echo "Registration failed. Please try again.";
            }
        }
    }
}
