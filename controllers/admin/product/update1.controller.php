<?php
require_once APP_ROOT ."/Models/Product.model.php";
if(isset($_POST['update'])){
    
$entity =
[   "id"=> $_POST["id"],
    "product_name"=> $_POST["name"],    
    "product_price"=> $_POST["price"],
    "product_categorie_id"=> $_POST["category_id"],
];
update_product($entity);
header("Location: /".URL_SUBFOLDER ."/Admin/Product");
}
?>