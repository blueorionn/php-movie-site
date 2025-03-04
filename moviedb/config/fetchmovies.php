<?php
require 'connect.php';

class Movies extends DatabaseConnection
{
    public function getAllMovies()
    {
        $stmt = $this->conn->prepare("SELECT * FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
