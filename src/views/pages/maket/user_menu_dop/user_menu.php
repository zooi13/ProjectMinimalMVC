<div style="padding-right: 30px" >
    <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Мой аккаунт | <?= $_SESSION['user_info']['login'] ?>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profile">Профиль</a></li>
            <li><a class="dropdown-item" href="#">История покупок</a></li>
            <li><a class="dropdown-item" href="#">Корзина</a></li>
            <li class="dropdown-item">Баланс: <?=$_SESSION['user_info']['balance']?> ₽</li>
            <hr>
            <li><a class="dropdown-item" href="/action/out_act">Выйти</a></li>
        </ul>
    </div>
</div>