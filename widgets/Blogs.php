<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Blogs extends Widget
{
    public function run()
    {
        return $this->render('blog');    }
}