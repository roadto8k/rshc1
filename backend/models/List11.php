<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.09.2018
 * Time: 14:13
 */

namespace backend\models;


use yii\db\ActiveRecord;

class List11 extends ActiveRecord
{
    public static function tableName()
    {
        return '{{list11}}';
    }

    public function rules()
    {
        return[

            [['id', 'value', 'comment', '1sortovaya', '2chistota', '2vtomchisle', '3drcult', '3vtcviki', '4cormovie',
                '5drrasten', '6sornih', '6vtcnaibvred', '6karant', '6yadovit', '7energiya', '8vshojest', '8vtctvrd',
                'uslprorash', 'catsortchis', '9jiznesp', '9metod', '10vlajnost', '11massa', '12zarajenn', '12skleroc',
                '12golovnevie', '13zaselenvred', '14odnorast', '15stebel', '16viravnen', '17odnosem', '18sostav',
                '19drugie', '20sert', '21pasport',], 'safe'],
        ];
    }

}