<?php

namespace backend\models;

use yii\db\ActiveRecord;


class Settings extends ActiveRecord
{

    public static function tableName()
    {
        return '{{settings}}';
    }

    public function rules()
    {
        return [
            [['currentyear'], 'safe']
        ];
    }


}