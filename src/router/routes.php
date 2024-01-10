<?php
//Файл роутинга (регистрация страниц)
use App\Services\Router;

Router::page('/', 'home');
Router::page('/home', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');

Router::page('/register/newregister', 'action/register_act');
Router::page('/login/loginaction', 'action/login_act');
Router::page('/action/out_act', '/action/out_act');



Router::enable();