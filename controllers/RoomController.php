<?php

namespace app\controllers;
use app\models\Hotel;

class RoomController extends GeneralController
{
    public function actionView()
    {
        $models = Hotel::find()->where(['status'=>1])->all();
//        var_dump($models);
        return $this->render('view', compact('models'));
    }
}