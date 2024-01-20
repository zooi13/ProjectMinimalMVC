<?php

namespace App\DateBase;

use App\DateBase\ServiceDB;
use PDO;
class FormDB
{
    //Получение массива категорий
    static function categoryV()
    {
        $pdo = ServiceDB::getPDO();

        $stmt = $pdo->prepare("SELECT * FROM categories ORDER BY `id_categories`");
        $stmt->execute();
        $test_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $test_arr;
    }
    //Шаблон вывода категории
    static function sampleCateg($id, $name)
    {
        echo "
        <tr>
                <th style=\"width: 15px;\">$id</th>
                <td style=\"width: 400px; text-align: center\">$name</td>
                <td style=\"width: 285px; text-align: right\">
                    <button type=\"submit\" class=\"btn btn-outline-secondary\" name=\"edit\" value=\"$id\">Редактировать</button>
                    <button type=\"submit\" class=\"btn btn-outline-secondary\" name=\"del\" value=\"$id\">Удалить</button>
                </td>
            </tr>
        ";
    }

    static function editCateg($name, $id)
    {
        $pdo = ServiceDB::getPDO();

        $stmt = $pdo->prepare("UPDATE `categories` SET `category_name`='$name' WHERE `id_categories` = {$id}");
        $stmt->execute();
    }

    static function delCateg($id)
    {
        $pdo = ServiceDB::getPDO();

        $stmt = $pdo->prepare("DELETE FROM `categories` WHERE `id_categories` = $id");
        $stmt->execute();
    }

    static function outCateg()
    {
        foreach (self::categoryV() as $index){
            self::sampleCateg($index['id_categories'], $index['category_name']);
        }
    }
}