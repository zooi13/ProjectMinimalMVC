<?php
if (isset($_SESSION['user_info'])){
    header('Location: /home');
}
use App\Validation\Validation;
use App\DateBase\ConfigDB;

require_once "maket/head.php";
?>
<div class="container-fluid" style="max-width: 700px; margin: 30px">
    <h3>Авторизация</h3><br>
    <form method="post" action="/login/loginaction">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="InputEmail" placeholder="Введите email">
        </div>
        <?php Validation::ErrorMessage('email'); ?>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1"  name="InputPassword" placeholder="Введите пароль">
        </div>
        <?php Validation::ErrorMessage('password'); ?>
        <br>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
    <br>
    <a href="register" style="color: black">У меня нет аккаунта</a>
</div>
<?php
require_once "maket/footer.php";