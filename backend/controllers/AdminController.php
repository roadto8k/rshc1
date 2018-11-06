<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.09.2018
 * Time: 0:18
 */

namespace backend\controllers;


use backend\models\Settings;
use backend\models\User;
use backend\models\List1;
use yii\web\Controller;
use Yii;
use backend\models\SignupForm;
use yii\filters\AccessControl;


class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['user-index', 'user-create', 'user-delete', 'settings'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }


    public function actionUserIndex()
    {

        $model = User::find()
            ->with('list1')
            ->orderBy('region_id')
            ->all();

        unset($model[0]); //строка с гл. админом убирается из списка


        return $this->render('user-index', [
            'model' => $model,
        ]);

    }

    public function actionUserCreate()
    {

        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            $role = $model->role;//получено из форм
            if ($user = $model->signup()) {
                $userRole = Yii::$app->authManager->getRole($role);//поиск роли по её названию
                Yii::$app->authManager->assign($userRole, $user->getId());//создание новой зависимости роль/пользователь
                return $this->redirect(['admin/user-index']);
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);



    }

    public function actionUserUpdate()
    {


    }

    public function actionUserDelete($id)
    {

        $user = User::findOne($id);
        //ТУТ НУЖНО УДАЛИТЬ СТРОКУ С РОЛЬЮ в AUTH_ASSIGNMENT
        if($user->delete())
        {
            Yii::$app->session->setFlash('success', 'Пользователь удален.');
            return $this->redirect(['admin/user-index']);
        }

    }

    public function actionSettings()
    {
        $settings = Settings::find()->one();
        $list1 = List1::find()->all();

         //print_r(Yii::$app->request->Post());
        if(Yii::$app->request->Post('year'))
        {
            foreach ($list1 as $item)
            {

                $item->counter = 1;
                $item->save();
            }

            $settings->currentyear = Yii::$app->request->Post('year');
            if($settings->save())
            {
                Yii::$app->session->setFlash('success', 'Год изменен, счетчики сброшены');
                return $this->refresh();
            }
        }

        if(Yii::$app->request->Post('oldPassword'))
        {

            $user = \common\models\User::findByUsername('admin');
            if ($user->validatePassword(Yii::$app->request->Post('oldPassword')))
            {

                if(Yii::$app->request->Post('newPassword') == Yii::$app->request->Post('repeatNewPassword') )
                {

                    $user->setPassword(Yii::$app->request->Post('newPassword'));
                    $user->generateAuthKey();
                    if($user->save())
                    {

                        Yii::$app->user->logout();
                        Yii::$app->session->setFlash('success', 'Пароль администратора изменен');
                        return $this->goHome();
                    }
                }
            }

        }


        return $this->render('settings', [
            'settings' => $settings,
        ]);

    }

}