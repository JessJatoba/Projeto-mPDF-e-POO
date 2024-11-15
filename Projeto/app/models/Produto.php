<?php
namespace App\Models;

use PDO;

class Produto
{
    public static function getAll()
    {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
