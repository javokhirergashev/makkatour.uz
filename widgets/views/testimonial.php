
<section class="client-feed-back-one client-feed-back-one--two">
    <div class="shape-one rotate-me"><img src="/images/shapes/client-feed-back-v2-shape1.png" alt="" />
    </div>
    <div class="shape-two float-bob-y"><img src="/images/shapes/client-feed-back-v2-shape2.png" alt="" />
    </div>
    <div class="shape-three float-bob-y"><img src="/images/shapes/client-feed-back-v2-shape3.png"
                                              alt="" /></div>
    <div class="shape-four rotate-me"><img src="/images/shapes/client-feed-back-v2-shape4.png" alt="" />
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xl-5">
                <div class="client-feed-back-one__img js-tilt">
                    <div class="overlay-icon">
                        <span class="icon-quotation"></span>
                    </div>
                    <img src="/images/resources/testimonial.jpg" alt="" />
                </div>
            </div>

            <div class="col-xl-7">
                <div class="client-feed-back-one__content">
                    <div class="client-feed-back-one__carousel owl-carousel owl-theme owl-dot-type1 owl-nav-type1">
                        <?php if(!empty($models)):?>
                        <?php foreach ($models as $model):?>
                        <?php
                        $img = \app\models\StaticFunctions::getImage("testimonials", $model->id, $model->images)
                        ?>
                        <!--Start Client Feed Back One Single Content-->
                        <div class="client-feed-back-one__content-single">
                                <div class="sec-title">
                                    <span class="sec-title__tagline"><?=Yii::t("app", "testmon")?></span>
                                    <h2 class="sec-title__title"><?=Yii::t("app", "test_info")?>
                                    </h2>
                                </div>
                                <p class="client-feed-back-one__content-single-text">
                                    <?=$model["comment_".Yii::$app->language];?>
                                </p>

                                <div class="client-info">
                                    <h3><?=$model->name?></h3>
                                    <p><?=$model->email?></p>
                                </div>
                        </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
