<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kartofel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kartofel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'filial')->textInput(['maxlength' => true])->label('Филиал') ?>

    <?= $form->field($model, 'regnom')->textInput(['maxlength' => true])->label('Регном') ?>

    <?= $form->field($model, 'datavidachi')->textInput()->label('Дата выдачи') ?>

    <?= $form->field($model, 'datadeistviya')->textInput()->label('Дата действия') ?>

    <?= $form->field($model, 'object')->textInput(['maxlength' => true])->label('Объект') ?>

    <?= $form->field($model, 'sort')->textInput(['maxlength' => true])->label('Сорт') ?>

    <?= $form->field($model, 'categoriya')->textInput(['maxlength' => true])->label('Категория') ?>

    <?= $form->field($model, 'npartiya')->textInput(['maxlength' => true])->label('Номер партии') ?>

    <?= $form->field($model, 'godurojaya')->textInput(['maxlength' => true])->label('Год урожая') ?>

    <?= $form->field($model, 'strana')->textInput(['maxlength' => true])->label('Страна') ?>

    <?= $form->field($model, 'qty')->textInput(['maxlength' => true])->label('Количество, объем') ?>

    <?= $form->field($model, 'prochie')->textInput(['maxlength' => true])->label('Прочие') ?>

    <?= $form->field($model, 'codeok005')->textInput(['maxlength' => true])->label('Код ОК 005') ?>

    <?= $form->field($model, 'codeobject')->textInput(['maxlength' => true])->label('Код сорта') ?>

    <?= $form->field($model, 'sootvetstvietrebovani')->textInput(['maxlength' => true])->label('Соотвествует требованиям') ?>

    <?= $form->field($model, 'proizvoditel')->textInput(['maxlength' => true])->label('Производитель') ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true])->label('ФИО') ?>

    <?= $form->field($model, 'vidannaosnovanii')->textInput(['maxlength' => true])->label('Выдан на основании') ?>

    <?= $form->field($model, 'ispitaniyaprovedeni')->textInput(['maxlength' => true])->label('Испытания проведены') ?>

    <?= $form->field($model, 'komuvidani')->textInput(['maxlength' => true])->label('Кому выдано') ?>

    <?= $form->field($model, 'cert')->textInput(['maxlength' => true])->label('Сертификат') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
