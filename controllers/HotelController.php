<?php

namespace app\controllers;

use app\models\StaticFunctions;

class HotelController extends GeneralController
{
    public function actionView()
    {
        $models = \app\models\Hotel::find()->where(['status'=>1,])->orderBy(['status'=>SORT_ASC])->all();
//        debug($models);
//        $image = StaticFunctions::getImage('hotel',$models->id,$models->images);
        return $this->render('view',compact('models'));
    }
}