<?php
use App\DateBase\ServiceDB;
use App\DateBase\FileLoader;

$NameProduct = $_POST['NameProduct'];
$CategProduct = $_POST['CategProduct'];
$PriceProduct = $_POST['PriceProduct'];
$AreaProduct = $_POST['AreaProduct'];
$TimeProduct = time();

$ImageProduct = $_FILES['FileImage'] ?? null;
$FileProduct = $_FILES['ProductFile'] ?? null;


$uploadPathImage = dirname(__DIR__, 3) . '/uploads';
$uploadPathProduct = dirname(__DIR__, 3) . '/uploads/products';

$pathProductImage = FileLoader::ImageLoader($ImageProduct,$uploadPathImage,'product');
$pathProductFile = FileLoader::FileLoader($FileProduct,$uploadPathProduct,'product');


$pdo = ServiceDB::getPDO();


$query = "INSERT INTO products (name_product, categ_product, img_product, file_product, price_product, description_product, date_product) VALUES (:name_product, :categ_product, :img_product, :file_product, :price_product, :description_product, :date_product)";
$params = [

    'name_product' => $NameProduct,
    'categ_product' => $CategProduct,
    'img_product' => $pathProductImage,
    'file_product' => $pathProductFile,
    'price_product' => $PriceProduct,
    'description_product' => $AreaProduct,
    'date_product' => $TimeProduct
];
$stmt = $pdo->prepare($query);
try {
    $stmt->execute($params);
}catch (\PDOException $e){
    echo "Ошибка добавления товара";
    echo "<pre>";
    var_dump($e);
}

header('Location: /catalog');