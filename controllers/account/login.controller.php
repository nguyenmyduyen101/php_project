<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once APP_ROOT .  '/database/database.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE user_name  = :user_name";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':user_name', $username, PDO::PARAM_STR);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $num = $stmt->rowCount();

    if ($num == 1) {
        $userId = $row['id'];
        echo $password;
        echo $row["password"];
        if ($password == $row['password']) {
            session_start();
            // $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userId'] = $userId;
            echo '<script language="javascript">';
            echo 'alert("đăng nhập thành công");';
            echo '</script>';
            if ($row["user_type"] == 1) {

                header("location: " . URL_ROOT . URL_SUBFOLDER . '/Admin/Category');
            } else {
                header("location: " . URL_ROOT . URL_SUBFOLDER . '/');
            }
            exit();
        } else {
            $_SESSION['error'] = "User or password incorrect";
            echo '<script language="javascript">';
            echo 'alert("Đăng nhập thất bại User or password incorrect");';
            echo 'window.location.href = "' . URL_ROOT . URL_SUBFOLDER . '/";';
            echo '</script>';
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Đăng nhập thất bại");';
        echo '</script>';
        header("location: " . URL_ROOT . URL_SUBFOLDER . '/');
    }
}
