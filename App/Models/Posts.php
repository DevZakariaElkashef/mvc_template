<?php

namespace App\Models;

use Core\Model;
use Exception;
use PDO;
use PDOException;

class Posts extends Model
{
    public static function getAll()
    {
        try {
            //$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $db = static::getDB();

            $stmt = $db->query('SELECT id, title, content FROM posts');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
            
        } catch (Exception $e) {
            throw new \Exception($e);
        }
    }
}