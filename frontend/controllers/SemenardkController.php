<?php

namespace frontend\controllers;

use common\models\Semenardkcopy;
use common\models\Semenardkrenewal;
use Yii;
use common\models\Semenardk;
use common\models\SemenardkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * SemenardkController implements the CRUD actions for Semenardk model.
 */
class SemenardkController extends Controller
{


    /**
     * Lists all Semenardk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SemenardkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Semenardk model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }



    public function actionDrawCert($id = null){

        if(Yii::$app->request->isPost)
        {
            print_r(Yii::$app->request->post());

        }
        $model = Semenardk::findOne($id);

        $this->layout = false;
        return $this->render('draw-cert', [
            'model' => $model,
        ]);
    }





    /**
     * Finds the Semenardk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Semenardk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Semenardk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionRenewal($id)
    {

        $model = Semenardkrenewal::find()->where(['cert_kartofel_id' => $id])->all();

        return $this->render('renewal', [
            'model' => $model,

        ]);

    }

    public function actionCopyIndex($id)
    {

        $max = Semenardk::findOne($id);
        $max = $max['qty'];
        $max = intval($max);

        $sum = Semenardkcopy::find()
            ->where(['cert_semenardk_id' => $id])
            ->sum('volume');

        !$sum ? $sum = 0 :
            $max = $max - $sum;


        $model = Semenardkcopy::find()->where(['cert_semenardk_id' => $id])->all();


        foreach ($model as $item)
        {
            $item['datezaver'] = list($year, $month, $day) = explode("-", $item['datezaver']);
            $item['datezaver'] = "$day-$month-$year";
            $item['datedeist'] = list($year, $month, $day) = explode("-", $item['datedeist']);
            $item['datedeist'] = "$day-$month-$year";
        }

        return $this->render('copy-index', [
            'model' => $model,
            'id' => $id,
            'max' => $max,
        ]);

    }
}
