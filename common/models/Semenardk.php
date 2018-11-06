<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "semenardk".
 *
 * @property int $id
 * @property string $filial
 * @property string $regnom
 * @property string $ncert
 * @property string $nblank
 * @property string $datavidachi
 * @property string $datadeistviya
 * @property string $object
 * @property string $sort
 * @property string $categoriya
 * @property string $npartiya
 * @property string $godurojaya
 * @property string $strana
 * @property string $edizmereniya
 * @property string $qty
 * @property string $prochie
 * @property string $codeok005
 * @property string $codeobject
 * @property string $sootvetstvietrebovani
 * @property string $proizvoditel
 * @property string $komuvidani
 * @property string $fio
 * @property string $vidannaosnovanii
 * @property string $ispitaniyaprovedeni
 * @property string $sozdano
 * @property string $cert
 */
class Semenardk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semenardk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datavidachi', 'datadeistviya', 'sozdano'], 'safe'],
            [['filial', 'regnom', 'ncert', 'nblank', 'object', 'sort', 'categoriya', 'npartiya', 'godurojaya', 'strana', 'edizmereniya', 'qty', 'prochie', 'codeok005', 'codeobject', 'sootvetstvietrebovani', 'proizvoditel', 'komuvidani', 'fio', 'vidannaosnovanii', 'ispitaniyaprovedeni', 'cert'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'filial' => Yii::t('app', 'Филиал'),
            'regnom' => Yii::t('app', 'Регном'),
            'ncert' => Yii::t('app', 'Номер сертификата'),
            'nblank' => Yii::t('app', 'Номер бланка'),
            'datavidachi' => Yii::t('app', 'Дата выдачи'),
            'datadeistviya' => Yii::t('app', 'Дата действия'),
            'object' => Yii::t('app', 'Объект'),
            'sort' => Yii::t('app', 'Сорт'),
            'categoriya' => Yii::t('app', 'Категория'),
            'npartiya' => Yii::t('app', 'Номер партии'),
            'godurojaya' => Yii::t('app', 'Год уражая'),
            'strana' => Yii::t('app', 'Страна'),
            'edizmereniya' => Yii::t('app', 'Ед. измерения'),
            'qty' => Yii::t('app', 'Количество, объем'),
            'prochie' => Yii::t('app', 'Прочие'),
            'codeok005' => Yii::t('app', 'Код ОК 005'),
            'codeobject' => Yii::t('app', 'Код сорта'),
            'sootvetstvietrebovani' => Yii::t('app', 'Соотвествует требованиям'),
            'proizvoditel' => Yii::t('app', 'Производитель'),
            'komuvidani' => Yii::t('app', 'Кому выдано'),
            'fio' => Yii::t('app', 'ФИО'),
            'vidannaosnovanii' => Yii::t('app', 'Выдан на основании'),
            'ispitaniyaprovedeni' => Yii::t('app', 'Испытания проведены'),
            'sozdano' => Yii::t('app', 'Создано'),
            'cert' => Yii::t('app', 'Сертификат'),
        ];
    }

    public static function cloneNull()
    {
        $cloneData = [
            'qty' => null,
            //'edizmereniya' => null,
            'npartiya' => null,
            'godurojaya' => null,
            'strana' => null,
            'proizvoditel' => null,
            'komuvidani' => null,
            'fio' => null,
            'vidannaosnovanii' => null,
            'ispitaniyaprovedeni' => null,
            'sootvetstvietrebovani' => null,
        ];
        return $cloneData;
    }

    public static function getDataForClone($idForClone)
    {
        $cloneData = Semenardk::findOne($idForClone);
        $cloneData = [
            'qty' => $cloneData['qty'],
            //'edizmereniya' => $cloneData['edizmereniya'],
            'npartiya' => $cloneData['npartiya'],
            'godurojaya' => $cloneData['godurojaya'],
            'strana' => $cloneData['strana'],
            'proizvoditel' => $cloneData['proizvoditel'],
            'komuvidani' => $cloneData['komuvidani'],
            'fio' => $cloneData['fio'],
            'vidannaosnovanii' => $cloneData['vidannaosnovanii'],
            'ispitaniyaprovedeni' => $cloneData['ispitaniyaprovedeni'],
            'sootvetstvietrebovani' => $cloneData['sootvetstvietrebovani'],

        ];
        return $cloneData;
    }
}
