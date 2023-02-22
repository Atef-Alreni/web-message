<?php

namespace app\util;

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
}
