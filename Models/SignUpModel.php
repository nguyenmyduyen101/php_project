<?php
class SignUpModel
{
    public function registerUser($user_name, $first_name, $last_name, $email, $phone, $password)
    {
        global $connection;
        $stmt = $connection->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->execute([$user_name]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            return false;
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $connection->prepare("INSERT INTO users (user_name, first_name, last_name, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$user_name, $first_name, $last_name, $email, $phone, $hashedPassword]);
        return true;
    }
}
