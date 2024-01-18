<?php
require_once "maket/head.php";
?>
<div class="container-fluid" style="max-width: 700px; margin: 30px">
    <h3>Профиль:</h3>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <img src="<?=$_SESSION['user_info']['avatar']?>" alt="" style="max-width: 170px;">
        </div>
        <div class="p-2 bd-highlight">
            <p><?=$_SESSION['user_info']['login']?></p>
            <p><?=$_SESSION['user_info']['email']?></p>
            <p>Баланс: <?=$_SESSION['user_info']['balance']?> р.</p>
            <p>Роль: <?=$_SESSION['user_info']['role']?></p>
        </div>
    </div>
</div>




<?php
require_once "maket/footer.php";