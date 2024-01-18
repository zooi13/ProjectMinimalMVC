<?php
use App\DateBase\ServiceDB;

$categ_name = $_POST['InputCateg'] ?? null;

$pdo = ServiceDB::getPDO();

$query = "INSERT INTO categories (category_name) VALUES (:categ_name)";
$params = [
    'categ_name' => $categ_name
];

$stmt = $pdo->prepare($query);
try {
    $stmt->execute($params);
}catch (\PDOException $e){
    echo "Ошибка добавления категории";
    echo "<pre>";
    var_dump($e);
}

header('Location: /add_categ');