<?php
if (isset($_SESSION['user_info'])){
    header('Location: /home');
}
use App\Validation\Validation;
use App\DateBase\ConfigDB;
require_once "maket/head.php";
?>
    <div class="container-fluid" style="max-width: 700px; margin: 30px">
        <h3>Регистрация</h3><br>
        <form method="post" enctype="multipart/form-data" action="/register/newregister">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Введите email">
            </div>
            <?php Validation::ErrorMessage('email'); ?>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="InputLogin" name="InputLogin" placeholder="Введите login">
            </div>
            <?php Validation::ErrorMessage('login'); ?>
            <br>
            <label for="exampleInputPassword1">Аватар</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputFile" name="InputAvatar">
                <label class="input-group-text" for="inputFile">Загрузка</label>
            </div>
            <?php Validation::ErrorMessage('avatar'); ?>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="InputPassword1" name="InputPassword1" placeholder="Введите пароль">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Повторите пароль</label>
                <input type="password" class="form-control" id="InputPassword2" name="InputPassword2" placeholder="Повторите пароль">
            </div>
            <?php Validation::ErrorMessage('password'); ?>
            <br>


            <br>
            <button type="submit" class="btn btn-primary">Регистрация</button>
        </form>
        <br>
        <a href="login" style="color: black">У меня есть аккаунт</a>
    </div>
<?php
require_once "maket/footer.php";