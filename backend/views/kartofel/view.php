<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kartofel */

$this->title = $model->ncert;
$this->params['breadcrumbs'][] = ['label' => 'Картофель семенной', 'url' => ['manage']];
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->name = 'Главная страница';
?>
<div class="kartofel-view">

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

    <?= Html::a('Посмотреть сертификат', ['kartofel/draw-cert',  'id' => $model['id']], ['class' => 'btn btn-info', 'target' => '_blank']) ?>
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

            'proba:text:Объединенная проба',
            'chistota:text:Сортовая чистота посадок картофеля,%:',
            'botanichsort:text:Наличие клубней других ботанических сортов,%:',
            'bolezn:text:Наличие клубней пораженных болезнями, всего,%:',
            'jelezist:text:Наличие клубней с железистой пятнистостью и потемнением мякоти,%:',
            'mehanich:text:Наличие клубней с механическими повреждениями,%:',
            'vredit:text:Наличие клубней с повреждениями с/х вредителями:',
            'razmer:text:Наличие клубней, не отвечающих требованиям по размеру, %:',
            'primes:text:Наличие земли и посторонних примесей,%:',
            'scritoi:text:Результаты по определению скрытой зараженности:',
            'probissled:text:Поступило проб для исследования, шт:',
            'fitopatog:text:Наличие растений или клубней в образце <br>с положительной реакцией на фитопатогенные вирусы, % по счету:',
            'xbk:text:в том числе: ХВК, SBK, MBK:',
            'uvk:text:УВК, ВСЛК:',
            'bakter:text:Наличие растений или клубней в образце <br>с положительной реакцией на бактериальную инфекцию  , % по счету:',
            'drugie:text:Другие определения:',
        ],
    ]) ?>

</div>
