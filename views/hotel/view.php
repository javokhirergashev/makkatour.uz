
<!--Start Blog One-->
<section class="blog-one blog-one--two">
    <div class="shape1 rotate-me"><img src="/images/shapes/blog-v1-shape1.png" alt="" /></div>
    <div class="shape2 zoominout"><img src="/images/shapes/blog-v1-shape2.png" alt="" /></div>
    <div class="shape3 float-bob-y"><img src="/images/shapes/blog-v1-shape3.png" alt="" /></div>
    <div class="shape4 float-bob-y"><img src="/images/shapes/blog-v1-shape4.png" alt="" /></div>
    <div class="shape5 zoominout"></div>
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">Hotels </h2>
        </div>
        <div class="row">
            <?php if(!empty($models)):?>
                <?php foreach ($models as $model):?>
                    <?php
                    $image = \app\models\StaticFunctions::getImage("hotel", $model->id, $model->images)
                    ?>
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=$image?>" alt="" />
                            </div>
                            <div class="blog-one__single__content">

                                <h2>
                                    <a href="blog-single.html"><?=$model->country?></a>
                                </h2>

                                <p><?=$model->name?></p>


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
