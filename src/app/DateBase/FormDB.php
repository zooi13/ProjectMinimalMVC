<?php

namespace App\DateBase;

use App\DateBase\ServiceDB;
use PDO;
class FormDB
{
    static function categoryV()
    {
        $pdo = ServiceDB::getPDO();

        $stmt = $pdo->prepare("SELECT * FROM categories ORDER BY `id_categories`");
        $stmt->execute();
        $test_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $test_arr;
    }
    static function sampleCateg($id, $name)
    {
        echo "
        <tr>
                <th style=\"width: 15px;\">$id</th>
                <td style=\"width: 400px; text-align: center\">$name</td>
                <td style=\"width: 285px; text-align: right\">
                    <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"inpu1\">Редактировать</button>
                    <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"inpu2\">Удалить</button>
                </td>
            </tr>
        ";
    }

    static function outCateg()
    {
        foreach (self::categoryV() as $index){
            self::sampleCateg($index['id_categories'], $index['category_name']);
        }
    }
}