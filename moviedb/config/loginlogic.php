<?php
require "connect.php";

class Login extends DatabaseConnection
{
    public function getUser($username, $password)
    {
        $stmt = $this->conn->prepare("SELECT id, password FROM users WHERE username = ? AND password = ?");
        $stmt->execute([$username, $password]);
        return $stmt->fetch();
    }

    public function setSession()
    {
        // TODO 
    }
}
