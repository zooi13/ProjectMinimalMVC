<?php
use App\Validation\Validation;
use App\DateBase\ServiceDB;
use App\DateBase\FileLoader;

$_SESSION['validation'] = [];

$mail = $_POST['InputEmail'] ?? null;
$login = $_POST['InputLogin'] ?? null;
$password = null;
$avatar_use = $_FILES['InputAvatar'] ?? null;
$path_avatar = null;
$balance_user = 0;
$role_user = 2;

$password = Validation::ValidPass($_POST['InputPassword1'], $_POST['InputPassword2']);
Validation::ValidMail($mail);
Validation::ValidLogin($login);
Validation::ValidAvatar($avatar_use);
Validation::CheckSession('register');

$uploadPath = dirname(__DIR__, 3) . '/uploads';
$path_avatar = FileLoader::ImageLoader($avatar_use,$uploadPath,'avatar');
//var_dump($path_avatar);
//Выводит поддерживаемые PDO драйверы
//var_dump(PDO::getAvailableDrivers());

$pdo = ServiceDB::getPDO();

$query = "INSERT INTO users (login_user, email_user, password_user, avatar_user, balance_user, role_user) VALUES (:login_user, :email_user, :password_user, :avatar_user, :balance_user, :role_user)";
$params = [
    'login_user' => $login,
    'email_user' => $mail,
    'password_user' => $password,
    'avatar_user' => $path_avatar,
    'balance_user' => $balance_user,
    'role_user' => $role_user
];
$stmt = $pdo->prepare($query);
try {
    $stmt->execute($params);
}catch (\PDOException $e){
    echo "Ошибка регистрации";
    echo "<pre>";
    var_dump($e);
}
header('Location: /login');