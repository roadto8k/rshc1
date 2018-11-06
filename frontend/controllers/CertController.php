<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01.09.2018
 * Time: 21:29
 */

namespace frontend\controllers;


use yii\web\Controller;

class CertController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index');

    }



}