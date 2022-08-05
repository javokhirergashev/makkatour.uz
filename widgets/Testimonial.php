<?php

namespace app\widgets;

use app\models\Testimonials;
use yii\base\Widget;

class Testimonial extends Widget
{
    public function run()
    {
        $models = Testimonials::find()->where(['status'=>1,])->orderBy(['id'=>SORT_ASC])->all();
        return $this->render('testimonial',compact('models'));
    }
}