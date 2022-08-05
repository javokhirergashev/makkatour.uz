<?php

namespace app\widgets;

use app\models\Tours;
use yii\bootstrap5\Widget;

class SectionMessage extends Widget
{
    public function run()

    {
        $models = Tours::find()->where(['status'=>1,])->orderBy(['id'=>SORT_ASC])->all();
        return $this->render('message',compact('models'));
    }
}