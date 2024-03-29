<?php
class CategoryModel
{
    public static function get_all_categories()
    {
        global $connection;
        $sql = "SELECT * FROM categories";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function add_Category($entity)
    {
        global $connection;
        $sql = "INSERT INTO categories 
        (categorie_name, create_at, update_at) 
         VALUES (:name,:create_at, :update_at)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':name'       => $entity["name"],
            ':create_at' => $entity["create_at"] ? $entity["create_at"]->format('Y-m-d H:i:s') : null,
            ':update_at' => $entity["update_at"] ? $entity["update_at"]->format('Y-m-d H:i:s') : null,
        ]);
    }
    public static function get_category($id)
    {
        global $connection;

        $sql = "SELECT * FROM categories where id  = :id LIMIT 1";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function update_category($entity)
    {
        global $connection;
        $sql = "UPDATE categories SET 
        categorie_name = :name,
        update_at = :update_at,
        create_at = :create_at
        WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':id'         => $entity["id"],
            ':name'       => $entity["name"],
            ':create_at' => $entity["create_at"] ? $entity["create_at"]->format('Y-m-d H:i:s') : null,
            ':update_at' => $entity["update_at"] ? $entity["update_at"]->format('Y-m-d H:i:s') : null,
        ]);
    }
    public static function remove_category($id)
    {
        global $connection;
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
    }
}
