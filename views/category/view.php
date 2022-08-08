<!--3<section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-12 blog-content">-->
<!--                --><?php //if (!empty($models)): ?>
<!--                <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">-->
<!--                    <li class="grid-sizer"></li>-->
<!---->
<!--                    <!-- start blog item -->-->
<!--                    --><?php //foreach ($models as $model): ?>
<!--                    --><?php
//                    $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
//                    if (is_file($image)){
//                        $image = "assets/images/no_photo.png";
//                    }
//                    ?>
<!--                        <li class="grid-item wow animate__fadeIn">-->
<!--                        <div class="blog-post border-radius-5px bg-white box-shadow-medium">-->
<!--                            <div class="blog-post-image bg-medium-slate-blue">-->
<!--                                <a href="#" title=""><img src="--><?//=$image?><!--" alt=""></a>-->
<!---->
<!--                            </div>-->
<!--                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">-->
<!--                                <a href="https://payme.uz/fallback/merchant/?id=6287308844589c0316db4a42" class="alt-font text-small d-inline-block margin-10px-bottom">--><?//=$model->price?><!-- </a>-->
<!--                                <a href="https://payme.uz/fallback/merchant/?id=6287308844589c0316db4a42" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block">--><?//=$model['description_'.Yii::$app->language];?><!--</a>-->
<!--                                <p>--><?//=$model['title_'.Yii::$app->language];?><!--</p>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    --><?php //endforeach;?>
<!--                    <!-- end blog item -->-->
<!---->
<!--                </ul>-->
<!--                --><?php //endif;?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->




<!--Start Blog One-->
<section class="blog-one blog-one--two">
    <div class="shape1 rotate-me"><img src="/images/shapes/blog-v1-shape1.png" alt="" /></div>
    <div class="shape2 zoominout"><img src="/images/shapes/blog-v1-shape2.png" alt="" /></div>
    <div class="shape3 float-bob-y"><img src="/images/shapes/blog-v1-shape3.png" alt="" /></div>
    <div class="shape4 float-bob-y"><img src="/images/shapes/blog-v1-shape4.png" alt="" /></div>
    <div class="shape5 zoominout"></div>
    <div class="container">
        <div class="sec-title text-center">
            <span class="sec-title__tagline">Our Blog update</span>
            <h2 class="sec-title__title">Recent Articles Daily Updated </h2>
        </div>
        <div class="row">
            <?php if(!empty($models)):?>
                <?php foreach ($models as $model):?>
                    <?php
                    $packimg = \app\models\StaticFunctions::getImage("tours", $model->id, $model->images)
                    ?>
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=$packimg?>" alt="" />
                                <div class="overlay-icon">
                                    <a href="blog-single.html"><span class="fa fa-plus"></span></a>
                                </div>
                            </div>
                            <div class="blog-one__single__content">

                                <h2>
                                    <a href="blog-single.html"><?=$model["title_".Yii::$app->language]?></a>
                                </h2>

                                <p><?=$model["description_".Yii::$app->language]?></p>
                                <ul class="meta-info">
                                    <li><?=$model->price?></li>
                                </ul>
                                <div class="blog-one--two__btn">
                                    <a href="<?=\yii\helpers\Url::to(["toursview/view", "id"=>$model->id])?>">Continue Reading <span class="icon-right-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->




                <?php endforeach;?>
            <?php endif;?>
            <!--End Single Blog One-->
        </div>
    </div>
</section>
<!--End Blog One-->
