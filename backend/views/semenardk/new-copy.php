<?php
/* @var $model common\models\Kartofelrenewal */
/* @var $id айди сертификата */
/* @var $max Допустимое количество продукта для копии */

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<a href="<?php echo Url::to(['kartofel/copy-index', 'id' => $id]) ?>" class="btn btn-info">Вернуться к списку</a>
<br><br>


<div class="row">
    <div class="col-md-8">
        <?php $form = ActiveForm::begin(); ?>

        <small></small>
        <?= $form->field($model, 'organcert')->label('Наименование органа по сертификации'); ?>

        <?= $form->field($model, 'regnomer')->label('Рег номер'); ?>

        <?= $form->field($model, 'fio')->label('Ф.И.О. ответственного лица'); ?>

        <?= $form->field($model, 'datezaver')->label('Дата заверения')->input('date'); ?>

        <?= $form->field($model, 'datedeist')->label('Дата действия')->input('date'); ?>

        <small>Максимум <?= $max ?><mark class="text-danger">Дробное число разделяется точкой</mark></small>
        <?= $form->field($model, 'volume')->label('Объем партии'); ?>

        <?= $form->field($model, 'client_address')->label('Наименование лица, кому передается данная партия с указанием адреса'); ?>

        <?= $form->field($model, 'cert_semenardk_id')->hiddenInput(['value' => $id])->label(' '); ?>

        <?= Html::submitButton('Создать копию', ['class' => 'btn-lg btn-success']);?>


        <?php ActiveForm::end(); ?>
    </div>
</div>