<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.08.2018
 * Time: 20:41
 */
class Kartofel extends ActiveRecord
{

    public static function tableName()
    {
        return '{{kartofel}}';
    }

    public function rules()
    {
        return[
            [['ncert', 'cert', 'object', 'filial', 'regnom', 'nblank', 'datavidachi', 'datadeistviya', 'sort',
                'categoriya', 'npartiya', 'godurojaya', 'strana', 'qty', 'codeok005', 'codeobject',
                'sootvetstvietrebovani', 'proizvoditel', 'fio', 'komuvidani', 'vidannaosnovanii',
                'ispitaniyaprovedeni'], 'required'],
            [['prochie', 'user_id', 'proba', 'chistota', 'botanichsort', 'bolezn', 'jelezist', 'mehanich', 'vredit',
                'razmer', 'primes', 'scritoi', 'probissled', 'fitopatog', 'xbk', 'uvk', 'bakter', 'drugie', 'region_id', 'status'], 'safe']
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
        $cloneData = Kartofel::findOne($idForClone);
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