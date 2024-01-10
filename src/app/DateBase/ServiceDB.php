<?php
//Файл для работы с базой
namespace App\DateBase;
use PDO;

const DB_HOST = 'mysql';
const DB_NAME = 'shop_db';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'root';

class ServiceDB
{
    static function getPDO() : PDO{
        try {
            return new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME , DB_USERNAME, DB_PASSWORD);
        } catch (\PDOException $e){
            echo "Ошибка подключения к бд";
            echo "<pre>";
            var_dump($e);
        }
    }

}