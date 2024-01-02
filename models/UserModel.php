<?php 
class UserModel extends database{

    protected $table = 'users';
    public function createUser($username, $firstName, $lastName, $email, $phone, $password){
        if (!$this->connect) {
            return [];
        }
        $sql = "INSERT INTO users (username, firstName, lastName, email, phone, userType, password, joinDate)
        VALUES (?, ?, ?, ?, ?, '0', ?, NOW())";


$stmt = $this->connect->prepare($sql);
$stmt->bindParam(1, $username);
$stmt->bindParam(2, $firstName);
$stmt->bindParam(3, $lastName);
$stmt->bindParam(4, $email);
$stmt->bindParam(5, $phone);
$stmt->bindParam(6, $password);


try {
    $stmt->execute();
} catch (PDOException $e) {
    return $e->getMessage();

}


$stmt->closeCursor();

}
    }



?>