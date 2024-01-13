<?php 
function get_cart_by_user_id($user_id){
    global $connection;
    $sql = "SELECT * FROM cart where user_id = :user_id";
    $stmt = $connection -> prepare($sql);
    $stmt -> execute([
        ":user_id" => $user_id
    ]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}