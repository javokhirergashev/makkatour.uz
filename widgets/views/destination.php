<!--Start Case Studies Two-->
<section class="case-studies-two">
    <div class="shape2 float-bob-y"><img src="/images/shapes/case-studies-v2-shape2.png" alt="" /></div>
    <div class="shape3 float-bob-y"><img src="/images/shapes/case-studies-v2-shape3.png" alt="" /></div>
    <div class="shape4 float-bob-y"><img src="/images/shapes/case-studies-v2-shape4.png" alt="" /></div>
    <div class="container">
        <div class="sec-title text-center">
            <span class="sec-title__tagline">Our Case Studies</span>
            <h2 class="sec-title__title">Our Most Recent Digital And <br>Strategy Projects.</h2>
        </div>
        <div class="row">
            <?php if (!empty($models)):?>
            <?php foreach ($models as $model):?>
            <?php
            $img = \app\models\StaticFunctions::getImage("tours_category", $model->id, $model->images);
            ?>
            <!--Start Single Case Studies Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="case-studies-two__single">
                    <div class="shape1"><img src="/images/shapes/case-studies-v2-shape1.png" alt="" />
                    </div>

                    <div class="case-studies-two__single-img">
                        <img src="<?=$img?>" alt=""/>
                    </div>
                    <div class="case-studies-two__single-content">
                        <p><?=$model["name_".Yii::$app->language];?></p>
                        <h2><a href="case-single.html">Case Study colsulting Business Strategies</a></h2>
                        <a href="<?=\yii\helpers\Url::to(["tours/view", "id"=>$model->id])?>">More</a>
                    </div>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>

        <div class="case-studies-two__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="case-studies-two__bottom-inner">
                        <div class="case-studies-two__bottom-img wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <img src="/images/cases/case-v2-bottom-img.png" alt="" />
                        </div>
                        <div class="case-studies-two__bottom-title">
                            <h2>Giving your business some original ideas and grow your business with our team
                            </h2>
                        </div>
                        <div class="case-studies-two__bottom-btn">
                            <a href="services.html" class="thm-btn">More Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Case Studies Two-->