<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Slider extends Widget
{
    public function run()
    {
        return$this->render('slider');
    }
}