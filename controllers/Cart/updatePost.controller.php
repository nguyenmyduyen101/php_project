<?php
require_once APP_ROOT . "/Models/Cart.model.php";

if (isset($_POST['updateCart'])) {
    $entity = [
        "id" => $_POST["id"],
        "cart_id" => $_POST["cart_id"],
        "product_id" => $_POST["product_id"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"],
    ];
    update_Cart($entity);
    header("Location: /" . URL_SUBFOLDER . "/Admin/Cart");
}
?>
