<?php

namespace app\model;

use app\util\Database;

class User extends Database
{
    public function save(string $name, string $email, string $username, string $password)
    {
        $sql = "INSERT INTO users(Name, Email, Username, Password) VALUES(:name, :email, :username, :password)";
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute(["name" => $name, "email" => $email, "username" => $username, "password" => $password]);

        return $res;
    }

    public function findUser(string $username, string $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE Username = :username AND Password = :password");
        $stmt->execute(["username" => $username, "password" => $password]);
        $res = $stmt->fetch();

        return $res;
    }
}
