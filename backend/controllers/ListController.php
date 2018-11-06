<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31.08.2018
 * Time: 15:08
 */

namespace backend\controllers;


use backend\models\ListCommon;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use backend\models\List1;
use backend\models\List4;
use backend\models\List11;

class ListController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'edit', 'add-list', 'update-list', 'delete-list', 'list4-edit', 'list11-edit'],
                        'allow' => true,
                        'roles' => ['admin', 'listManager'],
                    ],
                ],
            ],

        ];
    }

    public function actionIndex()
    {

        return $this->render('index', [
            //'model' => $model,
        ]);

    }

    public function actionEdit($table = null, $optionsMain = null, $id = null)
    {

        $options['numCol'] = '7';

        $model = ListCommon::getList($table);
        $options['exist'] = false;
        $options['table'] = 1;
        $options['actionName'] = '#';
        $options['buttonName'] = false;
        $options['region_id'] = false;

        if($optionsMain == 'list2')
        {
            $model = ListCommon::getList2($id);
            $options['table'] = 'list2';
            $options['region_id'] = $id;
            //print_r($model);
        }
        if($table == 'list1')
        {
            $options['exist'] = true;
            $options['actionName'] = 'list/edit';
            $options['table'] = 'list2';
            $options['numCol'] = '9';
            $options['buttonName'] = 'Испытательные лаборатории';
        }
        if($table == 'list4')
        {
            $options['exist'] = true;
            $options['actionName'] = 'list/list4-edit';
            $options['numCol'] = '9';
            $options['buttonName'] = 'Результаты испытаний';
        }
        if($table == 'list11')
        {
            $options['exist'] = true;
            $options['actionName'] = 'list/list11-edit';
            $options['numCol'] = '9';
            $options['buttonName'] = 'Результаты испытаний';
        }

        return $this->render('edit', [
            'model' => $model,
            'table' => $table,
            'options' => $options
        ]);

    }

    public function actionUpdateList($table, $id)
    {

        //sql запрос UPDATE * FROM $table WHERE id = $id VALUES (post post)
        if(Yii::$app->request->isPost)
        {
            if(ListCommon::update($table, $id, Yii::$app->request->post('value'), Yii::$app->request->post('comment')))
            {
                Yii::$app->session->setFlash('success', 'Справочник обновлен');
                $this->redirect(['edit', 'table' => $table]);

            }
        }
    }

    public function actionAddList($table)
    {

        $region_id = Yii::$app->request->post('region_id');
        if(isset($region_id))
        {
            if(ListCommon::addList2($table, Yii::$app->request->post('value'), Yii::$app->request->post('comment'), Yii::$app->request->post('region_id')))
            {
                Yii::$app->session->setFlash('success', 'Справочник обновлен');
                return $this->redirect(['edit', 'table' => 'list2', 'optionsMain' => 'list2', 'id' => $region_id]);
            }
        }

        if(Yii::$app->request->isPost)
        {
            if(ListCommon::add($table, Yii::$app->request->post('value'), Yii::$app->request->post('comment')))
            {
                Yii::$app->session->setFlash('success', 'Справочник обновлен');
                $this->redirect(['edit', 'table' => $table]);
            }
        }
    }

    public function actionDeleteList($table, $id)
    {
        if(ListCommon::delete($table, $id))
        {
            Yii::$app->session->setFlash('success', 'Справочник обновлен');
            $this->redirect(['edit', 'table' => $table]);
        }
    }


    public function actionList4Edit($optionsMain = null, $id)
    {

        $model = List4::findOne($id);

        if($model->load(Yii::$app->request->post()) && $model->save()){ //если данные загружены и провалидирвоаны, то сохраняем в БД и вызываем флеш сообщение
            Yii::$app->session->setFlash('success', 'Результаты испытаний изменены');
            return $this->refresh();
        }
        return $this->render('list4-edit', [
            'model' => $model,
            //'id' => $id,
        ]);

    }

    public function actionList11Edit($optionsMain = null, $id)
    {

        $model = List11::findOne($id);

        if($model->load(Yii::$app->request->post()) && $model->save()){ //если данные загружены и провалидирвоаны, то сохраняем в БД и вызываем флеш сообщение
            Yii::$app->session->setFlash('success', 'Результаты испытаний изменены');
            return $this->refresh();
        }
        return $this->render('list11-edit', [
            'model' => $model,
            //'id' => $id,
        ]);

    }
}