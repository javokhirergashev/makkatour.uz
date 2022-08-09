<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\StaticFunctions;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ToursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tur paketlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Bosh sahifa/</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Yangi tur paket qo'shish</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<div class="tours-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangi tur yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title_uz',
            'price',
            'period',
//            'description',
            [
                    'attribute' => 'category_id',
                    'value' => function($data){
                        return \app\models\ToursCategory::findOne($data->category_id)->name_uz;
                    }
            ],
//            'body:ntext',
            'created_date',
            //'updated_date',
            //'seen_count',
            [
                'attribute' => 'images',
                'value' => function($data){
                    $image = StaticFunctions::getImage('tours',$data->id, $data->images);
                    return "<img src='$image' style='max-width: 100px'>";
                },
                'format' => 'html'
            ],
            'status',

            [
                'class' => ActionColumn::className(),
                'header' => 'Amallar',
                'headerOptions' => ['style' => 'text-align:center'],
                'template' => '{buttons}',
                'contentOptions' => ['style' => 'min-width:150px;max-width:150px;width:150px', 'class' => 'v-align-middle'],
                'buttons' => [
                    'buttons' => function ($url, $model) {
                        $controller = Yii::$app->controller->id;
                        $code = <<<BUTTONS
                                <div class="btn-group flex-center">
                                    <a href="/admin/{$controller}/update?id={$model->id}" class="btn btn-light"><i class="far fa-edit"></i></a>
                                    <a href="/admin/{$controller}/delete?id={$model->id}" id="{$controller}{$model->id}" data-postID="{$model->id}" data-postType="{$controller}" class="btn btn-danger postRemove"><i class="far fa-trash-alt"></i></a>
                                </div>
BUTTONS;
                        return $code;
                    }

                ],
            ],
        ],
    ]); ?>


</div>
