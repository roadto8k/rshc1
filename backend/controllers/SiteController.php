<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;


/**
 * Site controller
 */
class SiteController extends Controller
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
                        'actions' => ['login', 'error', 'role'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['admin', 'listManager', 'employee', 'chief'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login() ) {

            if (!Yii::$app->user->can('canLoginAdmin') && Yii::$app->user->logout())
            {
                return $this->render('login', [
                    'model' => $model,
                ]);
            }

            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionRole()
    {

        /*$admin = Yii::$app->authManager->createRole('admin');
        $admin->description = 'Администратор';
        Yii::$app->authManager->add($admin);

        $employee = Yii::$app->authManager->createRole('employee');
        $employee->description = 'Работник';
        Yii::$app->authManager->add($employee);

        $listManager = Yii::$app->authManager->createRole('listManager');
        $listManager->description = 'Управляющий заказами';
        Yii::$app->authManager->add($listManager);*/

        /*$chief = Yii::$app->authManager->createRole('chief');
        $chief->description = 'Начальник';
        Yii::$app->authManager->add($chief);*/

        /*$permit = Yii::$app->authManager->createPermission('canLoginAdmin');
        $permit->description = 'Право входить в админку';
        Yii::$app->authManager->add($permit);*/

        /*$role_c = Yii::$app->authManager->getRole('chief');
        $permit = Yii::$app->authManager->getPermission('canLoginAdmin');
        Yii::$app->authManager->addChild($role_c, $permit);*/

        /*$role_a = Yii::$app->authManager->getRole('admin');
        $role_e = Yii::$app->authManager->getRole('employee');
        $role_l = Yii::$app->authManager->getRole('listManager');
        $permit = Yii::$app->authManager->getPermission('canLoginAdmin');
        Yii::$app->authManager->addChild($role_a, $permit);
        Yii::$app->authManager->addChild($role_e, $permit);
        Yii::$app->authManager->addChild($role_l, $permit);*/
        return 'success';
    }
}
