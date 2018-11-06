<?php
/* @var $model common\models\Semenardkrenewal */
/* @var $id айди сертификата */

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<a href="<?php echo Url::to(['semenardk/renewal', 'id' => $id]) ?>" class="btn btn-info">Вернуться к списку</a>
<br><br>


<div class="row">
    <div class="col-md-8">
        <?php $form = ActiveForm::begin(); ?>

        <small></small>
        <?= $form->field($model, 'organ')->label('Наименование органа по сертификации'); ?>

        <?= $form->field($model, 'fio')->label('Ф.И.О. ответственного лица'); ?>

        <?= $form->field($model, 'naosndoc')->label('На основании документа'); ?>

        <?= $form->field($model, 'date')->label('Новый срок действия сертификата')->input('date'); ?>

        <?= $form->field($model, 'cert_kartofel_id')->hiddenInput(['value' => $id])->label(' '); ?>

        <?= Html::submitButton('Продлить', ['class' => 'btn-lg btn-success']);?>


        <?php ActiveForm::end(); ?>
    </div>
</div>