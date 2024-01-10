<?php
//Файл для валидации данных
namespace App\Validation;

class Validation
{
    // $pas1 = первый пароль
    // $pas2 = второй пароль
    // возварщает шифрованный пароль
    static function ValidPass($pas1, $pas2){
        if($pas1 === $pas2){
            if(empty($pas1) || empty($pas2)){
                $_SESSION['validation']['password'] = 'error password';
            }else{
                return md5($pas1);
            }
        }
        else{
            $_SESSION['validation']['password'] = 'error password';
        }
    }
    static function ValidPass2($pas){
        if(empty($pas)){
            $_SESSION['validation']['password'] = 'error password';
        }
    }
    //Проверяет маил
    static function ValidMail($mail){
        if(empty($mail)){
            $_SESSION['validation']['email'] = 'error email';
        }
    }
    //Проверяет логин
    static function ValidLogin($login){
        if(empty($login)){
            $_SESSION['validation']['login'] = 'error login';
        }
    }
    //Проверяет аватар
    static function ValidAvatar($avatar){
        if(empty($avatar)){
            $_SESSION['validation']['avatar'] = 'error avatar1';
        }else{
            $types = ['image/jpeg', 'image/png'];
            if (!in_array($avatar['type'], $types)){
                $_SESSION['validation']['avatar'] = 'error avatar2';
            }
        }
        if ($avatar['size'] / 1000000 >= 1){
            $_SESSION['validation']['avatar'] = 'error avatar3';
        };
    }
    //В случае ошибки возвращает на страницу
    static function CheckSession($page){
        if(!empty($_SESSION['validation'])){
            header("Location: /$page");
        }
    }
    //Выводит ошибку на страницу
    static function ErrorMessage($input){
        if(!empty($_SESSION['validation']["$input"])){
            echo '<br>';
            echo "<h6 style='color: red'>Проверьте $input</h6>";
        }
    }

}