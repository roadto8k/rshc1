<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KartofelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Семена растений, деревьев и кустарников';
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->name = 'Главная страница';
?>
<div class="kartofel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать новый сертификат', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            [
                'attribute' => 'id',
                'label' => 'id',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        $data['id'], ['semenardk/draw-cert',  'id' => $data['id']],
                        [
                            'title' => 'Нарисовать сертификат',
                            'target' => '_blank'
                        ]
                    );
                }
            ],
            [
                //'attribute' => 'id',
                'label' => 'Клонировать',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        'Клонировать', ['semenardk/create',  'idForClone' => $data['id']],
                        [
                            'title' => 'Клонировать',
                            'target' => '_blank',
                            'class' => 'btn-sm btn-info'
                        ]
                    );
                }
            ],
            [
                //'attribute' => 'id',
                'label' => 'Статус',
                'format' => 'raw',
                'value' => function($data){if($data['status'] == 0){
                    return Html::a(
                        'Закрыть', ['semenardk/close',  'id' => $data['id']],
                        [
                            'title' => 'Закрыть ',
                            //'target' => '_blank',
                            'class' => 'btn-sm btn-danger'
                        ]
                    );}else{return 'Закрыт';}
                }
            ],
            [
                //'attribute' => 'id',
                'label' => 'Продления',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        'Продления', ['semenardk/renewal',  'id' => $data['id']],
                        [
                            'title' => 'Продления',
                            'target' => '_blank',
                            'class' => 'btn-sm btn-success'
                        ]
                    );
                }
            ],
            [
                //'attribute' => 'id',
                'label' => 'История копий',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        'Копии', ['semenardk/copy-index',  'id' => $data['id']],
                        [
                            'title' => 'Копии',
                            'target' => '_blank',
                            'class' => 'btn-sm btn-primary'
                        ]
                    );
                }
            ],
            'ncert:text:Номер сертификата',
            'nblank:text:Номер бланка',
            'filial:text:Филиал',
            //'regnom',

            //'nblank',
            'datavidachi:text:Дата выдачи',
            'datadeistviya:text:Дата действия',
            'qty:text:Объем',
            'sozdano:text:Создано',
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


        ],
    ]); ?>
</div>
