<section class="bg-light-gray">
    <div class="container">
        <div class="row margin-6-rem-bottom md-margin-5-rem-bottom align-items-center">
            <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray text-uppercase margin-5px-bottom letter-spacing-minus-1px"><?=Yii::t('app', 'category')?></h5>
                <p class="m-0 d-block"><?=Yii::t('app', 'sub_category')?></p>
            </div>
            <div class="col-12 col-lg-6 col-md-5 text-center text-md-end wow animate__fadeIn" data-wow-delay="0.2s">

            </div>
        </div>
        <?php if (!empty($models)): ?>
            <div class="row text-center row-cols-1 row-cols-lg-4 row-cols-sm-2">

                <!-- start interactive banner item -->
                <?php foreach ($models as $model): ?>
                <?php
                    $image = \app\models\StaticFunctions::getImage('tours_category',$model->id,$model->images);
                    if (is_file($image)){
                        $image = "images/no_photo.png";
                    }

                    ?>

                    <div class="col interactive-banners-style-01 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                        <img src="<?=$image?>" class="scale" alt="" />
                        <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                            <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                    <a href="#" class="rounded-icon bg-neon-orange interactive-banners-icon"><i class="feather icon-feather-arrow-right text-white"></i></a>
                                    <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title"><?=$model['name_'.Yii::$app->language];?></div>
                                    <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="<?=\yii\helpers\Url::to(['category/view','id'=>$model->id])?>" class="text-white text-medium text-decoration-line-bottom"><?=Yii::t('app','more')?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
                <!-- end interactive banner item -->

            </div>
        <?php endif; ?>

    </div>
</section>