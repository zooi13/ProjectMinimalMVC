<?php
use App\DateBase\ServiceDB;
use App\DateBase\FileLoader;

echo "<pre>";
var_dump($_POST);

$NameProduct = $_POST['NameProduct'];
$CategProduct = $_POST['CategProduct'];
$PriceProduct = $_POST['PriceProduct'];
$AreaProduct = $_POST['AreaProduct'];

$ImageProduct = $_FILES['FileImage'] ?? null;
$FileProduct = $_FILES['ProductFile'] ?? null;


$uploadPath = dirname(__DIR__, 3) . '/uploads';
$path_product = FileLoader::ImageLoader($ImageProduct,$uploadPath,'product');

echo $path_product;