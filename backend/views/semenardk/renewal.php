<?php
/* @var $model common\models\Semenardkrenewal */

use yii\helpers\Url;

?>

<br>
<a href="<?php echo Url::to(['semenardk/new-renewal', 'id' => $id]) ?>" class="btn btn-success">Продлить сертификат</a>
<br>
<h3>Продления:</h3>
<table class="table">
<?php foreach ($model as $item): ?>

    <tr>
        <td>
            <?= $item['organ'] ?>
        </td>
        <td>
            <?= $item['fio'] ?>
        </td>
        <td>
            <?= $item['naosndoc'] ?>
        </td>
        <td>
            <?= $item['date'] ?>
        </td>
    </tr>



<?php endforeach;?>
</table>
