<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KartofelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kartofels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kartofel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kartofel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'filial',
            'regnom',
            'ncert',
            'nblank',
            //'datavidachi',
            //'datadeistviya',
            //'object',
            //'sort',
            //'categoriya',
            //'npartiya',
            //'godurojaya',
            //'strana',
            //'edizmereniya',
            //'qty',
            //'prochie',
            //'codeok005',
            //'codeobject',
            //'sootvetstvietrebovani',
            //'proizvoditel',
            //'komuvidani',
            //'fio',
            //'vidannaosnovanii',
            //'ispitaniyaprovedeni',
            //'sozdano',
            //'cert',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
