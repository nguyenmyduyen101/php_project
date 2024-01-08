<?php 
function get_order_by_user_id($user_id){
    global $connection;
    $sql = "SELECT * FROM orders where user_id = :user_id";
    $stmt = $connection -> prepare($sql);
    $stmt -> execute([
        ":user_id" => $user_id
    ]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function update_order($entity)
{
global $connection;

    $sql = "UPDATE orders SET 
    amount = :amount,
    update_at = :update_at,
    WHERE id = :id";
    $stmt = $connection-> prepare($sql);
    $stmt -> execute([
        ':id'         => $entity["id"],
        ':amount'       => $entity["amount"],
        ':update_at' => $entity["update_at"] ? $entity["update_at"] -> format('Y-m-d H:i:s') : null,
        // Add other columns as needed
    ]);
}
function remove_order($id)
    {
        global $connection;
        $sql = "DELETE FROM orders WHERE id = :id";
        $stmt = $connection -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
    }