<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Destinations extends Widget
{
    public function run()
    {
        $models = \app\models\ToursCategory::find()->where(['status'=>1,])->orderBy(['status'=>SORT_ASC])->all();
        return $this->render('destination',compact('models'));
    }
}