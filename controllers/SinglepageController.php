<?php

namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Tours;

class SinglepageController extends GeneralController
{
    public function actionView()
    {
        $models = Tours::find()->all();
//        debug($models);
        if (empty($models)) {
            return $this->goHome();
        } else
            $image = StaticFunctions::getImage('tours',$models->id,$models->images);
            return $this->render('view', compact('models', 'image'));
    }
}