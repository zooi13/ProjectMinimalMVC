<?php
require_once __DIR__ . "/vendor/autoload.php";

\App\Services\Router::test();
echo "<br>";
var_dump($_GET);
