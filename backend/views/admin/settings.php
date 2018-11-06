<?php

use yii\helpers\Url;

?>


<ul class="nav nav-tabs">
    <li role="presentation" ><a href="<?= Url::to(['admin/user-index'])?>">Пользователи</a></li>
    <li role="presentation" class="active"><a href="">Настройки</a></li>
    <li role="presentation"><a href="#">Статистика</a></li>
</ul>

<br>

<div class="row">
    <div class="col-lg-12">
        <h4>Сброс счетчиков сертификатов у каждого региона</h4>
        <br>
        <form action="<?= Url::to(['admin/settings'])?>" id="currentYear" method="post">
                <label>
                Выбрать год
                <input type="text" class="form-control" name="year" value="<?= $settings->currentyear?>" ></label>
            <br><br>
            <h4><mark class="text-danger">Сбрасывать счетчик нужно только каждый новый год 1 января, если это не произошло автоматически</mark></h4><br>
            <button form="currentYear" class="btn btn-primary" type="submit">Сбросить</button>
        </form>
        <hr><br><br>
        <h4>Поменять пароль администратора</h4>
        <br>
        <form action="<?= Url::to(['admin/settings'])?>" id="adminPassword" name="adminPassword" method="post">
            <label>
                Старый пароль
                <input type="password" class="form-control" name="oldPassword"  >
            </label><br>
            <label>
                Новый пароль
                <input type="password" class="form-control" name="newPassword"  >
            </label><br>
            <label>
                Повтор нового пароля
                <input type="password" class="form-control" name="repeatNewPassword"  >
            </label>
                <br><br>
            <button form="adminPassword" class="btn btn-primary" type="submit">Изменить</button>
        </form>
        <hr><br><br>
    </div>

</div>




</div>