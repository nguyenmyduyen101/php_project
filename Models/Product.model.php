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