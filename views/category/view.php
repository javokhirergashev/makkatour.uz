
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
                    $image = \app\models\StaticFunctions::getImage("tours", $model->id, $model->images)
                    ?>
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=$image?>" alt="" />
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
