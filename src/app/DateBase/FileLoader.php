<?php

namespace app\DateBase;

class FileLoader
{
    //функция загрузки изображения
    static function ImageLoader($file, $pathToDirectory, $prefix) : string
    {
        if (!is_dir($pathToDirectory)){
            echo 'Каталог для фото не найден';
        }else{
            $ext = (pathinfo($file['name'], PATHINFO_EXTENSION));
            $fileName = $prefix . '_' . time() . ".$ext";
            if(!move_uploaded_file($file['tmp_name'], "$pathToDirectory/$fileName")){
                die('Ошибка загрузки файла на сервер');
            }
            return "img/$fileName";
        }
        return 'ErrorLoader';
    }
    //функция загрузки файлов
    static function FileLoader($file, $pathToDirectory, $prefix) : string
    {
        if (!is_dir($pathToDirectory)){
            echo 'Каталог для файла не найден';
        }else{
            $ext = (pathinfo($file['name'], PATHINFO_EXTENSION));
            $fileName = $prefix . '_' . time() . ".$ext";
            if(!move_uploaded_file($file['tmp_name'], "$pathToDirectory/$fileName")){
                die('Ошибка загрузки файла на сервер');
            }
            return "prod/$fileName";
        }
        return 'ErrorLoader';
    }
}