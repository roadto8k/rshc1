<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\List1;

$this->title = 'Добавление нового пользователя';

?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->label('Логин')->textInput(['autofocus' => true]) ?>


            <?= $form->field($model, 'password')->label('Пароль')->passwordInput() ?>

            <?= $form->field($model, 'role')->dropDownList(
                ['chief' => 'Начальник', 'employee' => 'Сотрудник', 'listManager' => 'Справочники' ]
            )->label('Роль') ?>

            <?= $form->field($model, 'region_id')->dropDownList(
                ArrayHelper::map(List1::find()->all(), 'id', 'value')
            )->label('Регион') ?>

            <div class="form-group">
                <?= Html::submitButton('Создать пользователя', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
