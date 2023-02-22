<?php

namespace app\model;

use app\util\Database;

class Message extends Database
{
    public function saveMessage(int $id, string $message)
    {
        $sql = "INSERT INTO messages(Author, Message) VALUES(:author, :message)";
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute(["author" => $id, "message" => $message]);

        return $res;
    }

    public function getAllMessages()
    {
        $stmt = $this->pdo->prepare("SELECT messages.Message,  messages.CreatedAt, users.Name as AuthorName FROM messages INNER JOIN users ON messages.Author = users.id");
        $stmt->execute();
        $res = $stmt->fetchAll();

        return $res;
    }
}
