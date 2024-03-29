<?php
//Файл роутинга (регистрация страниц)
use App\Services\Router;

Router::page('/', 'home');
Router::page('/home', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');
Router::page('/catalog', 'catalog');
Router::page('/add_categ', 'manage/add_categ');
Router::page('/edit_categ', 'manage/edit_categ');
Router::page('/add_product', 'manage/add_product');


Router::page('/register/newregister', 'action/register_act');
Router::page('/login/loginaction', 'action/login_act');
Router::page('/action/out_act', 'action/out_act');
Router::page('/categ/add_categ', 'action/add_categ_act');
Router::page('/action/categ_ch', 'action/categ_ch_act');
Router::page('/categ/categ_ed_act', 'action/categ_ed_act');
Router::page('/product/add_product', 'action/add_product_act');




Router::enable();