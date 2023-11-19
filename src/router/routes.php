<?php

use App\Services\Router;

Router::page('/', 'home');
Router::page('/home', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');

Router::enable();