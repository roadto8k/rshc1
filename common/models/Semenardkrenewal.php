<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.09.2018
 * Time: 9:22
 */

namespace common\models;

use yii\db\ActiveRecord;

class Semenardkrenewal extends ActiveRecord
{

    public static function tableName()
    {
        return '{{semenardkrenewal}}';
    }

    public function rules()
    {
        return[
            [['cert_kartofel_id', 'organ', 'fio', 'naosndoc', 'date',], 'required'],
        ];
    }

}
{

}