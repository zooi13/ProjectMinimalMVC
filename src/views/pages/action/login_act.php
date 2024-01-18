<?php
use App\Validation\Validation;
use App\DateBase\ServiceDB;

$_SESSION['validation'] = [];

$email = $_POST['InputEmail'];
$password = $_POST['InputPassword'];

Validation::ValidMail($email);
Validation::ValidPass2($password);
Validation::CheckSession('login');

$pdo = ServiceDB::getPDO();

$stmt = $pdo->prepare("SELECT * FROM users WHERE `email_user` = :email");
$stmt->execute(['email'=>$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $pdo->prepare("SELECT * FROM roles WHERE `id_roles` = :id_roles");
$stmt2->execute(['id_roles'=>$user['role_user']]);
$user2 = $stmt2->fetch(PDO::FETCH_ASSOC);

//Обработка ошибки, при введение неверных данных

if (md5($password) === $user['password_user']){
    $_SESSION['user_info']['login'] = $user['login_user'];
    $_SESSION['user_info']['email'] = $user['email_user'];
    $_SESSION['user_info']['avatar'] = $user['avatar_user'];
    $_SESSION['user_info']['balance'] = $user['balance_user'];
    $_SESSION['user_info']['role'] = $user2['role'];
    header('Location: /home');

}else{
    echo 'NOOO';
    //Обработать ошибку
}