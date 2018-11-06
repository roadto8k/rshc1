<?php

/* @var $model backend\models\ListCommon */
/* @var $table название таблицы */
/* @var $options У некоторых списков есть дополнительные функции */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$this->title = 'Управление справочником';
Yii::$app->name = 'Главная страница';
?>

<a href="<?= Url::to(['list/index']) ?>" class="btn btn-info">Вернуться к списку справочников</a><br><br>


<div class="col-lg-<?= $options['numCol']?>">

    <br><h1 class="text-center">Значения справочника</h1><br>


    <form method="post" action="<?= Url::to(['list/add-list', 'table' => $table]) ?>" class="form-inline">
        <div class="form-group">
            <input name="value"type="text" class="form-control"  placeholder="Значение">
            <!--</div>
            <div class="form-group">-->
            <div class="input-group">

                <input name="comment" type="text" class="form-control"  placeholder="Комментарий">
                <?php
                    if($options['table'] == 'list2')
                    {
                        echo '<input name="region_id" value="'.$options['region_id'].'" type="hidden" class="form-control"  placeholder="Комментарий">';
                    }
                ?>
            </div>
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>

    </form><hr>

    <h3 class="text-center">Существующие значения в справочнике</h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Значение</th>
            <th>Комментарий</th>
            <th>Управление</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($model as $item): ?>

            <tr>
                <form method="post" id="<?= $item['id']; ?>" action="<?= Url::to(['list/update-list', 'id' => $item['id'], 'table' => $table]); ?>" class="form-inline">
                    <td><input type="text" class="form-control" name="value" value="<?php echo $item['value'];?>" placeholder="Значение"></td>
                    <td> <input type="text" class="form-control" name="comment" value="<?php echo $item['comment'];?>" placeholder="Комментарий"></td>
                </form>



                <td>
                    <div class="btn-group">
                        <button type="submit" form="<?= $item['id']; ?>" class="btn btn-default">Изменить</button>
                        <a href="<?= Url::to(['list/delete-list', 'table' => $table, 'id' => $item['id']]) ?>" class="btn btn-danger">Удалить</a>
                    </div>

                    <?php if(isset($options['exist'])){ ?>
                    <a href="<?= Url::to([$options['actionName'],'table' => $options['table'], 'optionsMain' => $options['table'], 'id' => $item['id']]) ?>" class="btn btn-primary"><?= $options['buttonName']?></a>
                    <?php }else{ ?>
                </td>

            </tr>
        <?php } endforeach;?>
        </tbody>
    </table>
</div>
