<?php

namespace frontend\controllers;

use Yii;
use common\models\Kartofel;
use common\models\KartofelSearch;
use common\models\Kartofelcopy;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\Kartofelrenewal;



/**
 * KartofelController implements the CRUD actions for Kartofel model.
 */
class KartofelController extends Controller
{

    /**
     * Lists all Kartofel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KartofelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }



    public function actionDrawCert($id = null){


        if(Yii::$app->request->isPost)
        {
            print_r(Yii::$app->request->post());

        }
        $kartofel = Kartofel::findOne($id);

        $this->layout = false;
        return $this->render('draw-cert', [
            'kartofel' => $kartofel,
        ]);

    }


    protected function findModel($id)
    {
        if (($model = Kartofel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionRenewal($id)
    {

        $model = Kartofelrenewal::find()->where(['cert_kartofel_id' => $id])->all();

        return $this->render('renewal', [
            'model' => $model,

        ]);

    }

    public function actionCopyIndex($id)
    {

        $max = Kartofel::findOne($id);
        $max = $max['qty'];
        $max = intval($max);

        $sum = Kartofelcopy::find()
            ->where(['cert_kartofel_id' => $id])
            ->sum('volume');

        !$sum ? $sum = 0 :
            $max = $max - $sum;


        $model = Kartofelcopy::find()->where(['cert_kartofel_id' => $id])->all();


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
