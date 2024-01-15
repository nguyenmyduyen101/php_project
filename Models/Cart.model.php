<?php

function get_product_by_category_id($category_id){
    global $connection;
    $sql = "SELECT * FROM products where product_categorie_id = :category_id";
    $stmt = $connection -> prepare($sql);
    $stmt -> execute([
        ":category_id" => $category_id,
    ]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


function get_all_products()
{
    global $connection;
    $sql = "SELECT * FROM products";
    $stmt = $connection -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addToCart($entity)
{
    global $connection;

    $sql = "INSERT INTO carts (user_id, product_id) VALUES ( :user_id)";
    $stmt = $connection->prepare($sql);
    $iSuccess = $stmt->execute([
        ':user_id' => $entity['user_id'],
        ':product_id' => $entity['product_id']
        
    ]);
    if ($iSuccess) {
        $cartId = $connection->lastInsertId();
        return $cartId;
    } else {
        return false;
    }
}

    function get_product($id)
    {
        global $connection;

        $sql = "SELECT * FROM products where id  = :id LIMIT 1";
        $stmt = $connection -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        return $result;
    }
     function update_product($entity)
    {
    global $connection;

    $sql = "UPDATE products SET 
    product_name = :product_name,
    product_price = :product_price,
    product_categorie_id = :product_categorie_id
    WHERE id = :id";

    $stmt = $connection->prepare($sql);
    $stmt->execute([
    ':product_name' => $entity["product_name"],
    ':product_price' => $entity['product_price'],
    ':product_categorie_id' => $entity['product_categorie_id'],
    ':id' => $entity['id'] // Assuming 'id' is part of your entity array
    // Add other columns as needed
    ]);
    }
    function remove_product($id)
    {
        global $connection;
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $connection -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
    }

    function update_Cart($entity)
    {
    global $connection;

    $sql = "UPDATE carts SET 
    quantity = :quantity,
    WHERE product_id = :product_id";

    $stmt = $connection->prepare($sql);
    $stmt->execute([
    ':quantity' => $entity["quantity"],
    ':product_id' => $entity['product_id'] // Assuming 'id' is part of your entity array
    // Add other columns as needed
    ]);
    }
    function remove_Cart($id)
    {
        global $connection;
        $sql = "DELETE FROM carts WHERE product_id = :product_id";
        $stmt = $connection -> prepare($sql);
        $stmt -> execute([
            ':product_id' => $id,
        ]);
    }
