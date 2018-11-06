<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kartofel */

$this->title = 'Редактировать: ' . $model->ncert;
$this->params['breadcrumbs'][] = ['label' => 'Картофель семенной', 'url' => ['manage']];
$this->params['breadcrumbs'][] = ['label' => $model->ncert, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
Yii::$app->name = 'Главная страница';
?>
<div class="kartofel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
