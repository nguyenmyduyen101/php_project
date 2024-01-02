<?php
class database
{
    protected $table;
    protected $connect;

    function __construct()
    {
        $hostname = "localhost";
        $database = "database_project_php";
        $username = "root";
        $password = "";

        try {
            $this->connect = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $e->getMessage();
            $this->connect = null;
        }
    }
    public function closeConnection()
    {
        if ($this->connect) {
            $this->connect = null;
        }
    }
}
