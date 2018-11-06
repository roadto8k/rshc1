<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SemenardkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semenardk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'filial') ?>

    <?= $form->field($model, 'regnom') ?>

    <?= $form->field($model, 'ncert') ?>

    <?= $form->field($model, 'nblank') ?>

    <?php // echo $form->field($model, 'datavidachi') ?>

    <?php // echo $form->field($model, 'datadeistviya') ?>

    <?php // echo $form->field($model, 'object') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'categoriya') ?>

    <?php // echo $form->field($model, 'npartiya') ?>

    <?php // echo $form->field($model, 'godurojaya') ?>

    <?php // echo $form->field($model, 'strana') ?>

    <?php // echo $form->field($model, 'edizmereniya') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'prochie') ?>

    <?php // echo $form->field($model, 'codeok005') ?>

    <?php // echo $form->field($model, 'codeobject') ?>

    <?php // echo $form->field($model, 'sootvetstvietrebovani') ?>

    <?php // echo $form->field($model, 'proizvoditel') ?>

    <?php // echo $form->field($model, 'komuvidani') ?>

    <?php // echo $form->field($model, 'fio') ?>

    <?php // echo $form->field($model, 'vidannaosnovanii') ?>

    <?php // echo $form->field($model, 'ispitaniyaprovedeni') ?>

    <?php // echo $form->field($model, 'sozdano') ?>

    <?php // echo $form->field($model, 'cert') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
