<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KartofelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Картофель семенной';
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->name = 'Картофель семенной';
?>
<div class="kartofel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?/*= Html::a('Create Kartofel', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'label' => 'Показать',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        $data['id'], ['kartofel/draw-cert',  'id' => $data['id']],
                        [
                            'title' => 'Нарисовать сертификат',
                            'target' => '_blank'
                        ]
                    );
                }
            ],
            [
                //'attribute' => 'id',
                'label' => 'Продления',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        'Продления', ['kartofel/renewal',  'id' => $data['id']],
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
                        'Копии', ['kartofel/copy-index',  'id' => $data['id']],
                        [
                            'title' => 'Копии',
                            'target' => '_blank',
                            'class' => 'btn-sm btn-primary'
                        ]
                    );
                }
            ],
            'filial:text:Филиал',
            'regnom:text:регном',
            'ncert:text:Номер сертификата',
            'nblank:text:Номер бланка',
            'datavidachi:text:Дата выдачи',
            'datadeistviya:text:Дата действия',
            'object:text:Объект',
            'sort:text:Сорт',
            'categoriya:text:Категория',
            'npartiya:text:Номер партии',
            'godurojaya:text:Год урожая',
            'strana:text:Страна поставщик',
            'edizmereniya:text:Ед. изм.',
            'qty:text:Количество',
            'prochie:text:Прочие',
            'codeok005:text:Код ОК 005',
            'codeobject:text:Код объекта',
            'sootvetstvietrebovani:text:Соответствует требованиям',
            'proizvoditel:text:Производитель(продавец)',
            'komuvidani:text:Кому выдано',
            'fio:text:ФИО',
            'vidannaosnovanii:text:Выдан на основании',
            'ispitaniyaprovedeni:text:Испытания проведены',
            'sozdano:text:Создано',
            'cert:text:Сертификат',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
