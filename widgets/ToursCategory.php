<?php

namespace app\widgets;

use app\models\Faq;
use yii\bootstrap5\Widget;

class ToursCategory extends Widget
{
    public function run()
    {
        $models = Faq::find()->where(['status'=>1,])->orderBy(['status'=>SORT_ASC])->all();
        return $this->render('tours-category',compact('models'));
    }
}