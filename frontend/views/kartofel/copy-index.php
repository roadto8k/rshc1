<?php
/* @var $model common\models\Kartofelcopy */
/* @var $id айди сертификата */
/* @var $max Допустимое количество продукта для копии */

use yii\helpers\Url;

?>

<br>
<h4>Доступный объем: <?= $max ?></h4><br>
<h3>Копии:</h3>

<table class="table table-bordered">
    <tr>
        <th>Орган сертификации</th>
        <th>Рег номер</th>
        <th>ФИО ответственного лица</th>
        <th>Дата заверения</th>
        <th>Дата действия</th>
        <th>Объем партии</th>
        <th>Наименование лица, кому передается данная партия с указанием адреса</th>
    </tr>
    <?php foreach ($model as $item): ?>

        <tr>
            <td>
                <?= $item['organcert'] ?>
            </td>
            <td>
                <?= $item['regnomer'] ?>
            </td>
            <td>
                <?= $item['fio'] ?>
            </td>
            <td>
                <?= $item['datezaver'] ?>
            </td>
            <td>
                <?= $item['datedeist'] ?>
            </td>
            <td>
                <?= $item['volume'] ?>
            </td>
            <td>
                <?= $item['client_address'] ?>
            </td>
        </tr>



    <?php endforeach;?>
</table>