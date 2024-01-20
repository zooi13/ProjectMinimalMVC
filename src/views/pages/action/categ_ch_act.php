<?php
use App\DateBase\FormDB;

if(array_key_exists('edit', $_POST)){
    $_SESSION['id_edit'] = $_POST['edit'];
    header("Location: /edit_categ");
};

if(array_key_exists('del', $_POST)){
    FormDB::delCateg($_POST['del']);
    header('Location: /add_categ');
};