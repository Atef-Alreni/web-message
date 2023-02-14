<?php

namespace app;

use PDO;

class Database
{

    protected PDO $pdo;
    protected string $dsn;
    protected string $user;
    protected string $password;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;

        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function getUser($username, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE Username = :username AND Password = :password");
        $stmt->execute(["username" => $username, "password" => $password]);
        $res = $stmt->fetch();

        return $res;
    }

    public function registerUser($name, $email, $username, $password)
    {
        $sql = "INSERT INTO users(Name, Email, Username, Password) VALUES(:name, :email, :username, :password)";
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute(["name" => $name, "email" => $email, "username" => $username, "password" => $password]);

        return $res;
    }
}
