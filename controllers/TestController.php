<?php

namespace app\controllers;

class TestController extends GeneralController
{
    public function actionView(){
        $models = \app\models\Hotel::find()->where(['status'=>1,])->orderBy(['status'=>SORT_ASC])->all();
//        debug($models);
        return $this->render('view',compact('models'));
    }
}