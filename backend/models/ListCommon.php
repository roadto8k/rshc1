<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31.08.2018
 * Time: 16:14
 */

namespace backend\models;


use yii\base\Model;
use Yii;

class ListCommon extends Model
{

    /**
     * @param $table
     * @return mixed
     */
    public static function getList($table)
    {
        $sql = 'SELECT * FROM '.$table.' ';
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        return $result;

    }

    public static function update($table, $id, $value, $comment = null)
    {
        if(Yii::$app->db->createCommand()->update($table, ['value' => $value, 'comment' => $comment], 'id = '.$id)->execute())
            return true;
    }

    public static function add($table, $value, $comment = null)
    {

        if(Yii::$app->db->createCommand()->insert($table, ['value' => $value, 'comment' => $comment])->execute())
            return true;
    }

    public static function addList2($table, $value, $comment = null, $region_id)
    {

        if(Yii::$app->db->createCommand()->insert($table, ['value' => $value, 'comment' => $comment, 'region_id' => $region_id])->execute())
            return true;
    }

    public static function delete($table, $id)
    {

        if(Yii::$app->db->createCommand()->delete($table, 'id ='.$id)->execute())
            return true;
    }

    public static function getList2($id)
    {
        $id = intval($id);
        $sql = 'SELECT * FROM list2 WHERE region_id = '.$id.' ';
        $list2 = Yii::$app->db->createCommand($sql)->queryAll();
        return $list2;
    }

    public static function counter($region)
    {
        $region = intval($region);
        $sql = 'SELECT counter FROM list1 WHERE value = '.$region.' ';
        $counter = Yii::$app->db->createCommand($sql)->queryOne();
        $counter['counter']++;
        if(Yii::$app->db->createCommand()->update('list1', ['counter' => $counter['counter']], 'value = '.$region)->execute())
            return true;
    }

    public static function getRegionId($region)
    {
        $region = intval($region);
        $sql = 'SELECT id FROM list1 WHERE value = '.$region.' ';
        $region_id = Yii::$app->db->createCommand($sql)->queryOne();
        return $region_id['id'];
    }




}