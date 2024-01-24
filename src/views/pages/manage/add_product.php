<?php
use App\DateBase\FormDB;

if (!isset($_SESSION['user_info']) || $_SESSION['user_info']['role'] !== 'admin'){
    header('Location: /home');
}

require_once dirname(__DIR__, 1) . '/maket/head.php';
?>

    <div class="container-fluid" style="max-width: 700px; margin: 30px">
        <h3>Добавить товар</h3><br>
        <form method="post" enctype="multipart/form-data" action="/product/add_product">
            <div class="form-group">
                <label for="exampleInputCateg">Название товара</label>
                <input type="text" class="form-control" id="NameProduct" name="NameProduct" placeholder="Введите название товара">
            </div>
            <br>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Категория</label>
                <select class="form-select" id="CategProduct" name="CategProduct">
                    <option selected>Выберете категорию товара</option>
                    <?= FormDB::outCateg2() ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputCateg">Изображение товара</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="FileImage" name="FileImage">
                    <label class="input-group-text" for="inputFile">Загрузка</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputCateg">Файл товара</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="ProductFile" name="ProductFile">
                    <label class="input-group-text" for="inputFile">Загрузка</label>
                </div>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" id="PriceProduct" name="PriceProduct" placeholder="Цена товара">
                <span class="input-group-text">₽</span>
                <span class="input-group-text">0.00</span>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-text">Описание</span>
                <textarea class="form-control"  id="AreaProduct" name="AreaProduct"  aria-label="With textarea"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Добавить товар</button>
        </form>
    </div>
<?php

require_once dirname(__DIR__, 1) . '/maket/footer.php';