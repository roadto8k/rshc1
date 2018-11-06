<?php

namespace backend\controllers;


use backend\models\List1;
use backend\models\User;
use Yii;
use common\models\Kartofel;
use common\models\KartofelSearch;
use common\models\Kartofelrenewal;
use common\models\Kartofelcopy;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\ListCommon;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use backend\models\Settings;

/**
 * KartofelController implements the CRUD actions for Kartofel model.
 */
class KartofelController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'manage', 'delete', 'draw-cert', 'view', 'update', 'create', 'renewal', 'new-renewal', 'copy-index',
                            'new-copy', 'copy-delete', 'close'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['index', 'delete', 'draw-cert', 'view', 'create', 'manage', 'renewal', 'new-renewal', 'copy-index', 'update',
                            'new-copy', 'copy-delete'],
                        'allow' => true,
                        'roles' => ['employee', 'chief'],
                    ],
                    [
                        'actions' => ['delete', 'close'],
                        'allow' => true,
                        'roles' => ['chief'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

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

    public function actionManage()
    {

        $searchModel = new KartofelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('manage', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single Kartofel model.
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

    /**
     * Creates a new Kartofel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idForClone = null)
    {

        if($idForClone)
        {
            $cloneData = Kartofel::getDataForClone($idForClone);
        }
        else
        {
            $cloneData = Kartofel::cloneNull();
        }


        $kartofel = new Kartofel();
        $settings = Settings::find()->one();


        $user = User::find()->with('list1')->where(['id' => Yii::$app->user->id])->one();//получение пользователя вместе с связной таблицей с регионами
        $List1 = List1::findOne($user->region_id);//получение обьекта региона, к которому принадлежит пользователь по region_id
        $List1 = ArrayHelper::toArray($List1, []);//преобразование объекта в массив
        $List1 = array($List1);//оборачивается в ещё один массив, чтобы админ мог все регионы открыть, чтобы foreach работал в виде


        if(!Yii::$app->user->can('admin'))
        {
            $List2 = ListCommon::getList2($List1[0]['id']);
        }

        if(Yii::$app->user->can('admin'))
        {
            $List1 = ListCommon::getList('list1');
            $List2 = ListCommon::getList('list2');
        }

        $List3 = ListCommon::getList('list3');
        $List4 = ListCommon::getList('list4');
        $List5 = ListCommon::getList('list5');
        $List6 = ListCommon::getList('list6');
        $List7 = ListCommon::getList('list7');


        if(Yii::$app->request->isPost)
        {
            $kartofel->attributes = Yii::$app->request->post();
            $region = Yii::$app->request->Post('value_region');

            $region_id = ListCommon::getRegionId($region);

            $kartofel->region_id = $region_id;
            $kartofel->user_id = Yii::$app->user->id;
            if($kartofel->validate() && $kartofel->save() && ListCommon::Counter($region)){ //если данные загружены и провалидирвоаны, то сохраняем в БД и вызываем флеш сообщение
                Yii::$app->session->setFlash('success', 'Сертификат добавлен');
                return $this->refresh();
            }
        }
/*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }*/

        return $this->render('create', [
            'kartofel' => $kartofel,
            'List1' => $List1,
            'List2' => $List2,
            'List3' => $List3,
            'List4' => $List4,
            'List5' => $List5,
            'List6' => $List6,
            'List7' => $List7,
            'settings' => $settings,
            'cloneData' => $cloneData
        ]);
    }

    public function actionDrawCert($id = null){



        if(Yii::$app->request->isPost)
        {
            print_r(Yii::$app->request->post());

        }
        $kartofel = Kartofel::findOne($id);
        $renewal = Kartofelrenewal::find()->where(['cert_kartofel_id' => $id])->orderBy('date')->limit(4)->all();
        foreach ($renewal as $item)
        {
            $item['date'] = list($year, $month, $day) = explode("-", $item['date']);
            $item['date'] = "$day-$month-$year";
        }

        $kartofel['datavidachi'] = list($year, $month, $day) = explode("-", $kartofel['datavidachi']);
        $kartofel['datavidachi'] = "$day-$month-$year";
        $kartofel['datadeistviya'] = list($year, $month, $day) = explode("-", $kartofel['datadeistviya']);
        $kartofel['datadeistviya'] = "$day-$month-$year";

        $this->layout = false;
        return $this->render('draw-cert', [
            'kartofel' => $kartofel,
            'renewal' => $renewal,
        ]);

    }

    /**
     * Updates an existing Kartofel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        /*Yii::$app->session->setFlash('danger', 'Редактирование невозможно. В случае ошибки: удаление старого и создание нового сертификата.');
        return $this->redirect(['manage']);*/

        $model = Kartofel::findOne($id);
        $user = User::findOne(Yii::$app->user->id);

        if ($model->user_id == Yii::$app->user->id && $model->status == 0)
        {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
        elseif (Yii::$app->user->can('admin'))
        {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
        elseif ($model->region_id == $user->region_id && $model->status == 0)
        {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
        else
            Yii::$app->session->setFlash('danger', 'Нет прав редактировать этот сертификат или редактирование закрыто.');
        return $this->redirect(['manage']);


    }

    /**
     * Deletes an existing Kartofel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $item = Kartofel::findOne($id);
        $user = User::findOne(Yii::$app->user->id);

        if ($item->region_id == $user->region_id && Yii::$app->user->can('chief'))
        {
            $this->findModel($id)->delete();
            Yii::$app->session->setFlash('success', 'Сертификат удален.');
            return $this->redirect(['manage']);
        }
        elseif (Yii::$app->user->can('admin'))
        {
            $this->findModel($id)->delete();
            Yii::$app->session->setFlash('success', 'Сертификат удален.');
            return $this->redirect(['manage']);
        }
        else
            Yii::$app->session->setFlash('danger', 'Нет прав удалять этот сертификат.');
            return $this->redirect(['manage']);
    }

    public function actionClose($id)
    {
        $item = Kartofel::findOne($id);
        $user = User::findOne(Yii::$app->user->id);

        if ($item->region_id == $user->region_id && Yii::$app->user->can('chief'))
        {
            if($item->status = true && $item->save())

                Yii::$app->session->setFlash('success', 'Редактирование сертификата закрыто.');
            return $this->redirect(['manage']);
        }elseif (Yii::$app->user->can('admin'))
        {
            $item->status = true;
            if($item->save())
                Yii::$app->session->setFlash('success', 'Редактирование сертификата закрыто.');
            return $this->redirect(['manage']);
        }
        else
            Yii::$app->session->setFlash('danger', 'Нет прав закрывать редактирование этого сертификата.');
        return $this->redirect(['manage']);

    }
    /**
     * Finds the Kartofel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kartofel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
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

        foreach ($model as $item)
        {
            $item['date'] = list($year, $month, $day) = explode("-", $item['date']);
            $item['date'] = "$day-$month-$year";
        }

        return $this->render('renewal', [
            'model' => $model,
            'id' => $id
        ]);

    }

    public function actionNewRenewal($id)
    {

        $model = new Kartofelrenewal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Сертификат продлен');
            return $this->redirect(['renewal', 'id' => $id]);
        }

        return $this->render('new-renewal', [
            'model' => $model,
            'id' => $id,
        ]);

    }

    public function actionCopyIndex($id)
    {
        $max = Kartofel::findOne($id);
        //$max = $max['qty'];
        $max = str_replace(',', '.', $max['qty']);//заменяем , на . в дробных числах
        $max = doubleval($max);

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

    public function actionNewCopy($id, $max)
    {
        $model = new Kartofelcopy($max);

        $model->user_id = Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Копия создана');
            return $this->redirect(['copy-index', 'id' => $id]);
        }

        return $this->render('new-copy', [
            'model' => $model,
            'id' => $id,
            'max' => $max,
        ]);
    }

    public function actionCopyDelete($id)
    {

        $item = Kartofelcopy::findOne($id);

        if ($item->user_id == Yii::$app->user->id)
        {
            $item->delete();
            Yii::$app->session->setFlash('success', 'Копия удалена.');
            return $this->redirect(['manage']);
        }
        elseif (Yii::$app->user->can('admin'))
        {
            $item->delete();
            Yii::$app->session->setFlash('success', 'Копия удалена.');
            return $this->redirect(['manage']);
        }
        else
            Yii::$app->session->setFlash('danger', 'Нет прав удалять эту копию.');
        return $this->redirect(['manage']);

    }

}
