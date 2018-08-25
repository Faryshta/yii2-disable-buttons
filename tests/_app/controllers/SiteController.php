<?php

namespace app\controllers;

use app\models\NameForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new NameForm();
        $model->load(Yii::$app->request->post()) && $model->validate();

        return $this->render('index', ['model' => $model]);
    }
}
