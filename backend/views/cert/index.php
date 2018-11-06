<?php

    use yii\helpers\Url;
$this->title = 'Сертификаты';
Yii::$app->name = 'Главная страница';

?>
<div class="row">
<div class="col-lg-1">
</div>


    <div class="col-lg-10">


        <table class="table table-striped">
            <tr>
                <td>
                    1. Семена растений, деревьев и кустарников
                </td>
                <td>
                    <a href="<?= Url::to(['semenardk/index']) ?>" class="btn btn-xs  btn-default">Просмотр</a>
                    <a href="<?= Url::to(['semenardk/create']) ?>" class="btn btn-xs btn-success">Добавить новый</a>
                    <a href="<?= Url::to(['semenardk/manage']) ?>" class="btn btn-xs btn-primary">Управление</a>
                </td>
            </tr>
            <tr>
                <td>
                    2. Картофель семенной
                </td>
                <td>
                    <a href="<?= Url::to(['kartofel/index']) ?>" class="btn btn-xs  btn-default">Просмотр</a>
                    <a href="<?= Url::to(['kartofel/create']) ?>" class="btn btn-xs btn-success">Добавить новый</a>
                    <a href="<?= Url::to(['kartofel/manage']) ?>" class="btn btn-xs btn-primary">Управление</a>
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



<!--        <ol>
            <a href="<?/*= Url::to(['add-kartofel']) */?>"><li>Семена растений, деревьев и кустарников</li></a>
            <a href="<?/*= Url::to(['add-kartofel']) */?>"><li>Картофель семенной</li></a>
            <a href="#" class="btn btn-xs  btn-default">Просмотр</a>
            <a href="<?/*= Url::to(['add-kartofel']) */?>" class="btn btn-xs btn-success">Добавить новый</a>
            <a href="#" class="btn btn-xs btn-primary">Управление</a>
            <a href="#"><li>Плодово-ягодные культуры</li></a>
            <a href="#"><li>Угодья Е6</li></a>
            <a href="#"><li>Склады Е8</li></a>
            <a href="#"><li>Лук-севок(выборок)</li></a>
            <a href="#"><li>Виноград</li></a>
            <a href="#"><li>Элитхозы</li></a>
            <a href="#"><li>Плодоовощная продукция</li></a>
        </ol>-->
    </div>


</div>