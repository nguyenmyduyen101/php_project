<?php
class OrderModel{
    function get_order_by_user_id($user_id)
    {
        global $connection;
        $sql = "SELECT * FROM orders where user_id = :user_id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ":user_id" => $user_id
        ]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_all_orders()
    {
        global $connection;
        $sql = "SELECT * FROM orders";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_order($id)
    {
        global $connection;
        $sql = "SELECT * FROM orders where id =:id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ":id" => $id
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_last_order()
    {
        global $connection;
        $sql = "SELECT * FROM orders ORDER BY id DESC LIMIT 1;";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function update_order($entity)
    {
        global $connection;
    
        $sql = "UPDATE orders SET 
        user_id = :user_id,   
        address = :address,   
        zip_code = :zip_code,   
        phone_no = :phone_no,   
        amount = :amount,   
        payment_mode = :payment_mode,
        order_status = :order_status,
        create_at = :create_at,
        update_at = :update_at
        WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':id'         => $entity["id"],
            ':user_id'         => $entity["user_id"],
            ':address'         => $entity["address"],
            ':zip_code'         => $entity["zip_code"],
            ':phone_no'         => $entity["phone_no"],
            ':amount'       => $entity["amount"],
            ':payment_mode'       => $entity["payment_mode"],
            ':order_status'       => $entity["order_status"],
            ':create_at' => $entity["create_at"] ? $entity["create_at"]->format('Y-m-d H:i:s') : null,
            ':update_at' => $entity["update_at"] ? $entity["update_at"]->format('Y-m-d H:i:s') : null,
            // Add other columns as needed
        ]);
    }
    public static function remove_order($id)
    {
        global $connection;
        $sql = "DELETE FROM orders WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
    }
    
    public static function add_order($entity)
    {
        global $connection;
    
        $sql = "INSERT INTO orders 
            (user_id, address, amount) 
            VALUES ( :user_id, :address, :amount)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':user_id' => $entity['user_id'],
            ':address' => $entity['address'],
            ':amount' => $entity['amount'],
    
        ]);
    }
    
}
