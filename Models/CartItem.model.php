<?php

function insertToCartItem($entity)
{
    global $connection;

    $sql = "INSERT INTO cart_items
    (user_id) 
    VALUES ( :user_id)";
    $stmt = $connection->prepare($sql);
    $iSuccess = $stmt->execute([
        ':user_id' => $entity['user_id']
        
    ]);
    if ($iSuccess) {
        $cartId = $connection->lastInsertId();
        return $cartId;
    } else {
        return false;
    }
}

