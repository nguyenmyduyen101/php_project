<?php

class SignUp_model
{
    private $hostname = "localhost";
    private $database = "database_project_php";
    private $username = "root";
    private $password = "";
    private $connection;

    public function __construct()
    {
        $dsn = "mysql:host=$this->hostname;dbname=$this->database;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function registerUser($username, $firstName, $lastName, $email, $phone, $password)
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return false;
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->connection->prepare("INSERT INTO users (username, firstName, lastName, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$username, $firstName, $lastName, $email, $phone, $hashedPassword]);

        return true;
    }
}

?>