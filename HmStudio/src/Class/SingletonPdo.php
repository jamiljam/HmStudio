<?php

namespace HmStudio\Class;

use PDO;
use PDOException;

class SingletonPdo
{
    private static $instanceOfPdo = null;

    private function __construct()
    {
        
    }

    public static function getInstancePdo()
    {
        if (self::$instanceOfPdo === null) {
            try {
                self::$instanceOfPdo = new PDO('mysql:host=localhost;dbname=hmstudio;charset=UTF8', 'root','',[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ]);
            } catch (PDOException $error) {
                echo "un erreur est survenue lors de la connexion à la BDD" . $error->getMessage();
            }
        }
        return self::$instanceOfPdo;
    }
}
