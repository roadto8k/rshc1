<?php

use yii\helpers\Url;

$this->title = 'Список справочников';
Yii::$app->name = 'Главная страница';
?>



<h4>Общие</h4>
<ul>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list1'])?>" >Код органа сертификации</a>
    <li>Код испытательной лаборатории
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list3'])?>" >Код объекта сертификации</a>
</ul>
<h4>1. Семена растений, деревьев и кустарников</h4>
<ul>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list8'])?>" >Объект</a>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list9'])?>" >Сорт</a>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list10'])?>" >Категория</a>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list11'])?>" >Соответствуют требованиям</a>
</ul>
<h4>2. Картофель семенной</h4>
<ul>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list5'])?>" >Объект</a>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list6'])?>" >Сорт</a>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list7'])?>" >Категория</a>
    <li><a href="<?= Url::to(['list/edit', 'table' => 'list4'])?>" >Соответствуют требованиям</a>
</ul>
<h4>3. Плодово-ягодные культуры</h4>
<h4>4. Угодья Е6</h4>
<h4>5. Склады Е8</h4>
<h4>6. Лук-севок(выборок)</h4>
<h4>7. Виноград</h4>
<h4>8. Элитхозы</h4>
<h4>9. Плодоовощная продукция</h4>










