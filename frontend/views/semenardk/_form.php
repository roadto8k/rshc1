<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Semenardk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semenardk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'filial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regnom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ncert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nblank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datavidachi')->textInput() ?>

    <?= $form->field($model, 'datadeistviya')->textInput() ?>

    <?= $form->field($model, 'object')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoriya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npartiya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'godurojaya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'strana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edizmereniya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prochie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codeok005')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codeobject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sootvetstvietrebovani')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proizvoditel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komuvidani')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vidannaosnovanii')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ispitaniyaprovedeni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sozdano')->textInput() ?>

    <?= $form->field($model, 'cert')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
