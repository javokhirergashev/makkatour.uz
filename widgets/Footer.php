<?php

namespace app\widgets;

use app\models\Menu;
use yii\bootstrap4\Widget;

class Footer extends Widget
{
    public function run()
    {
        $models = Menu::find()->where(['status'=>1,])->orderBy(['order_by'=>SORT_ASC])->all();
        return $this->render('footer',compact('models'));
    }
}