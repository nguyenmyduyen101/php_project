<?php
class UserModel{
    public static function get_user($id)
    {
        global $connection;
        $sql = "SELECT * FROM users where id  = :id LIMIT 1";
        $stmt = $connection -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
