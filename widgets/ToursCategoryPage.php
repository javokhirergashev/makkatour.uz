<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class ToursCategoryPage extends Widget
{
    public function run()
    {
        $models = \app\models\ToursCategory::find()->where(['status'=>1])->all();
        return $this->render('section-categories', compact('models'));
    }
}