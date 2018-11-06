<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Semenardk */

$this->title = $model->ncert;
$this->params['breadcrumbs'][] = ['label' => 'Семена растений, деревьев и кустарников', 'url' => ['manage']];
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->name = 'Главная страница';
?>
<div class="semenardk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Удалить сертификат?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= Html::a('Посмотреть сертификат', ['semenardk/draw-cert',  'id' => $model['id']], ['class' => 'btn btn-info', 'target' => '_blank']) ?>
    <br><br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
        ],
    ]) ?>

</div>
