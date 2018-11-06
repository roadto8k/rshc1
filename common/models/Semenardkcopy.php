<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.09.2018
 * Time: 12:47
 */

namespace common\models;

use yii\db\ActiveRecord;

class Semenardkcopy extends ActiveRecord
{

    public $max;

    public function __construct($max = null, array $config = [])
    {
        parent::__construct($config);
        return $this->max = $max;
    }



    public static function tableName()
    {
        return '{{semenardkcopy}}';
    }

    public function rules()
    {
        return[
            [['cert_semenardk_id', 'organcert', 'regnomer', 'fio', 'datezaver', 'datedeist', 'volume', 'client_address',  ], 'required'],
            [['volume'], 'number', 'max' => $this->max]
        ];
    }



}