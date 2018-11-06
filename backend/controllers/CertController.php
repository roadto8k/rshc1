<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.08.2018
 * Time: 18:47
 */

namespace backend\controllers;

use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;

class CertController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['admin', 'employee', 'chief'],
                    ],
                ],
            ],

        ];
    }

    public function actionIndex()
    {

        return $this->render('index',[

        ]);

    }

    /* public function actionAddKartofel()
     {

         $kartofel = new Kartofel();


         if(Yii::$app->request->isPost)
         {
             $kartofel->attributes = Yii::$app->request->post();

             if($kartofel->validate() && $kartofel->save()){ //если данные загружены и провалидирвоаны, то сохраняем в БД и вызываем флеш сообщение
                 Yii::$app->session->setFlash('success', 'Сертификат добавлен');
                 return $this->refresh();
             }



         }

         if($kartofel->validate() ){ //если данные загружены и провалидирвоаны, то сохраняем в БД и вызываем флеш сообщение
             if($kartofel->save())
             {
                 Yii::$app->session->setFlash('success', 'Сертификат добавлен');
                 //return $this->refresh();
             }
         }

        return $this->render('add-kartofel',[
            'kartofel' => $kartofel,
        ]);

    }*/

    /*public function actionShowKartofel()
    {

        $kartofel = Kartofel::find()->All();

        return $this->render('show-kartofel',[
            'kartofel' => $kartofel,
        ]);
    }*/

}