<?php

namespace app\util;

class Sanitization
{
    public static function sanitizeLogin(string $username, string $password)
    {
        return [htmlspecialchars($username), htmlspecialchars($password)];
    }

    public static function sanitizeRegister(string $name, string $email, string $username, string $password)
    {
        return [htmlspecialchars($name), htmlspecialchars($email), htmlspecialchars($username), htmlspecialchars($password)];
    }

    public static function sanitizeMessage(string $message)
    {
        return htmlspecialchars($message);
    }
}
