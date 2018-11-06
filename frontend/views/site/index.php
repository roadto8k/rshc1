<?php

use yii\helpers\Url;
$this->title = 'Сертификаты';
Yii::$app->name = 'Сертификаты';

?>
<div class="row">
    <div class="col-lg-1">
    </div>


    <div class="col-lg-10">


<!--        <table class="table table-striped">
            <tr>
                <td>
                    1. Семена растений, деревьев и кустарников
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    2. Картофель семенной
                </td>
                <td>
                    <a href="<?/*= Url::to(['kartofel/index']) */?>" class="btn btn-xs  btn-default">Просмотр</a>
                    <a href="<?/*= Url::to(['kartofel/create']) */?>" class="btn btn-xs btn-success">Добавить новый</a>
                    <a href="<?/*= Url::to(['kartofel/manage']) */?>" class="btn btn-xs btn-primary">Управление</a>
                </td>
            </tr>

            <tr>
                <td>
                    3. Плодово-ягодные культуры
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    4. Угодья Е6
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    5. Склады Е8
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    6. Лук-севок(выборок)
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    7. Виноград
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    8. Элитхозы
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    9. Плодоовощная продукция
                </td>
                <td>

                </td>
            </tr>
        </table>
-->     <br><br>
        <h4>Панель управления: <a href="https://rshc-cert.000webhostapp.com/admin/" class="btn btn-primary">Вход в программу</a> </h4>
        <h4>login: admin password: 123456</h4>
        <br>
        <h4>Начальник 16 региона login: admin16 password: 123456</h4>
        <h4>Сотрудник 16 региона login: user16 password: 123456</h4>
        <h4>В этих ссылках таблицы, которые будут транслироваться на основной сайт для всех пользователей</h4>
        <br>
             <ol>
            <a href="<?= Url::to(['semenardk/index']) ?>"><li>Семена растений, деревьев и кустарников</li></a>
            <a href="<?= Url::to(['kartofel/index']) ?>"><li>Картофель семенной</li></a>
            <a href="#"><li>Плодово-ягодные культуры</li></a>
            <a href="#"><li>Угодья Е6</li></a>
            <a href="#"><li>Склады Е8</li></a>
            <a href="#"><li>Лук-севок(выборок)</li></a>
            <a href="#"><li>Виноград</li></a>
            <a href="#"><li>Элитхозы</li></a>
            <a href="#"><li>Плодоовощная продукция</li></a>
        </ol>
    </div>


</div>