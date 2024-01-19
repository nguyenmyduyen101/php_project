<?php

function addToCart($entity)
{
    global $connection;

    $sql = "INSERT INTO carts (user_id) VALUES ( :user_id)";
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

function addToCartItem($entity)
{
    global $connection;

    $sql = "INSERT INTO cart_items (cart_id, product_id, price, quantity) VALUES ( :cart_id, :product_id, :price, :quantity)";
    $stmt = $connection->prepare($sql);
    $iSuccess = $stmt->execute([
        ':cart_id' => $entity['cart_id'],
        ':product_id' => $entity['product_id'],
        ':price' => $entity['price'],
        ':quantity' => $entity['quantity']
    ]);
    return $iSuccess;
}

function get_cart($userId)
{
    global $connection;

    $sql = "SELECT * FROM carts where user_id  = :user_id LIMIT 1";
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        ':user_id' => $userId,
    ]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_cart_items($cartId)
{
    global $connection;

    $sql = "SELECT ci.*, p.product_name 
            FROM cart_items ci
            JOIN products p ON ci.product_id = p.id
            WHERE ci.cart_id = :cart_id";

    $stmt = $connection->prepare($sql);
    $stmt->execute([
        ':cart_id' => $cartId,
    ]);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function update_cart_item($entity)
{
    global $connection;

    $sql = "UPDATE cart_items SET 
    quantity = :quantity
    WHERE id = :id";

    $stmt = $connection->prepare($sql);
    $stmt->execute([
        ':quantity' => $entity["quantity"],
        ':id' => $entity['id']
    ]);
}
function remove_cart_item($id)
{
    global $connection;
    $sql = "DELETE FROM cart_items WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        ':id' => $id,
    ]);
}

function get_cart_by_user_id($user_id)
{
    global $connection;
    $sql = "SELECT * FROM cart where user_id = :user_id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        ":user_id" => $user_id
    ]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
