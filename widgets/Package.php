<?php

namespace app\widgets;

use app\models\Tours;
use yii\bootstrap4\Widget;

class Package extends Widget
{
    public function run()
    {
        $models = Tours::find()->where(["status"=>1])->orderBy(['id'=>SORT_DESC])->limit(6)->all();
        return $this->render("package", compact('models'));
    }
}