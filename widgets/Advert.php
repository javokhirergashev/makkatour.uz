<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Advert extends Widget
{
    public function run()
    {
        return $this->render('advert');
    }
}