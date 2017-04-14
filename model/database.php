<?php

require_once 'config/config.php';

class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', DBUSER, DBPASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}


?>
