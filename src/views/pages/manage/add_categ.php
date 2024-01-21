<?php
use App\DateBase\FormDB;

if (!isset($_SESSION['user_info']) || $_SESSION['user_info']['role'] !== 'admin'){
    header('Location: /home');
}

require_once dirname(__DIR__, 1) . '/maket/head.php';
?>

    <div class="container-fluid" style="max-width: 700px; margin: 30px">
        <h3>Добавить категорию</h3><br>
        <form method="post" action="/categ/add_categ">
            <div class="form-group">
                <label for="exampleInputCateg">Название категории</label>
                <input type="text" class="form-control" id="InputCateg" name="InputCateg" placeholder="Введите название категории">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Добавить категорию</button>
        </form>
    </div>
    <form method="post" action="/action/categ_ch">
        <div class="container-fluid" style="width: 700px; margin: 30px">
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 50px;" scope="col">id</th>
                    <th style="width: 300px; text-align: center" scope="col">Название</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?= FormDB::outCateg(); ?>
                </tbody>
            </table>
        </div>
    </form>
<?php
require_once dirname(__DIR__, 1) . '/maket/footer.php';