<?php
require_once "maket/head.php";
echo __DIR__;
echo "<br>";
$i = dirname(__DIR__, 2) . '/uploads/avatar_1704799850.jpg';
echo $i;
?>
<div class="container-fluid" style="max-width: 700px; margin: 30px">
    <h3>Ваш профиль:</h3><br>
    <img src="uploads/avatar_1704799850.jpg" alt="">
</div>
<?=$i?>
<?php
require_once "maket/footer.php";