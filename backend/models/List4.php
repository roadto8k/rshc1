<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.09.2018
 * Time: 14:13
 */

namespace backend\models;


use yii\db\ActiveRecord;

class List4 extends ActiveRecord
{
    public static function tableName()
    {
        return '{{list4}}';
    }

    public function rules()
    {
        return[

            [['id', 'value', 'comment', 'proba', 'chistota', 'botanichsort', 'bolezn', 'jelezist', 'mehanich', 'vredit',
                'razmer', 'primes', 'scritoi', 'probissled', 'fitopatog', 'xbk', 'uvk', 'bakter', 'drugie'], 'safe'],
        ];
    }

}