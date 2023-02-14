<?php

namespace app\model;

use app\Database;

class User
{
    protected Database $db;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=webmessage";
        $user = "root";
        $password = "";

        $this->db = new Database($dsn, $user, $password);
    }

    public function save($name, $email, $username, $password)
    {
        return $this->db->registerUser($name, $email, $username, $password);
    }

    public function findUser($username, $password)
    {
        return $this->db->getUser($username, $password);
    }
}
