<?php
class OrderItemModel{
    public static function get_order_item_by_order_id($order_id)
    {
        global $connection;
        $sql = "SELECT * FROM order_items where order_id = :order_id limit 1";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ":order_id" => $order_id
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function update_order_item($entity)
    {
        global $connection;
    
        $sql = "UPDATE order_items SET 
        item_quantity = :amount,
        WHERE id = :order_item_id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':order_item_id'         => $entity["order_item_id"],
            ':amount'       => $entity["amount"],
        ]);
    }
    public static function add_order_item($entity)
    {
        global $connection;
    
        $sql = "INSERT INTO order_items
        (product_id, order_id, item_quantity) 
        VALUES ( :product_id, :order_id, :item_quantity)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':product_id' => $entity['product_id'],
            ':order_id' => $entity['order_id'],
            ':item_quantity' => $entity['item_quantity'],
        ]);
    }
}
