<?php

namespace core;

use app\Exceptions\NoConnectionWithDB;
use PDO;

final class DataBase
{
    private static $DB_HOST = "localhost";
    private static $DB_NAME = "mvc.loc";
    private static $DB_USER = "mvc.loc";
    private static $DB_PASSWORD = "1111";

    public static function getConnection()
    {
        $dsn = "mysql:host=" . self::$DB_HOST . ";dbname=" . self::$DB_NAME . ";charset=utf8";
        try{
            $connection = new PDO($dsn, self::$DB_USER, self::$DB_PASSWORD);
            echo "THERE IS A CONNECTION!";
        }catch (\Exception $e){
            throw new NoConnectionWithDB("Sorry! No connection with DataBase! Try again!");
        }

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }

    private function __construct()
    {
    }

    private function __clone()
    {

    }
}