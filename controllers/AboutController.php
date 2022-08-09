<?php

namespace app\controllers;

use app\models\Contacts;

class AboutController extends GeneralController
{
    public function actionView()
    {
        $models = Contacts::find()->where(['status'=>1])->all();
        return $this->render('view', compact('models'));
    }
}