<?php
class DatabaseConnection
{
    public $conn;

    function __construct()
    {
        $host = getenv(name: 'DB_HOST');
        $port = getenv(name: 'DB_PORT');
        $dbname = getenv(name: 'DB_NAME');
        $username = getenv(name: 'DB_USER');
        $password = getenv(name: 'DB_PASS');

        try {
            $this->conn = new PDO(
                dsn: "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
                username: $username,
                password: $password,
                options: [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error handling
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch results as an associative array
                ]
            );
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
?>