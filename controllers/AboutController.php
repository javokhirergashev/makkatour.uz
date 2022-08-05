<?php

namespace app\controllers;

use app\models\Contacts;

class AboutController extends GeneralController
{
    public function actionView()
    {
        $models = Contacts::find()->all();
        return $this->render('view', compact('models'));
    }
}