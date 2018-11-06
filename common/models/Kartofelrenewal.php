<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.09.2018
 * Time: 1:09
 */

namespace common\models;


use yii\db\ActiveRecord;

class Kartofelrenewal extends ActiveRecord
{

    public static function tableName()
    {
        return '{{kartofelrenewal}}';
    }

    public function rules()
    {
        return[
            [['cert_kartofel_id', 'organ', 'fio', 'naosndoc', 'date',], 'required'],
        ];
    }

}