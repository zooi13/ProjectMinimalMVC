<?php
use App\DateBase\FormDB;



FormDB::editCateg($_POST['InputCateg'], $_SESSION['id_edit']);

unset($_SESSION['id_edit']);
unset($_POST['InputCateg']);
header('Location: /add_categ');