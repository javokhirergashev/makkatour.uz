<!--Start Team One-->
<section class="team-one">
    <div class="container">
        <div class="sec-title text-center">
            <span class="sec-title__tagline"><?=Yii::t("app", "hotelh1")?></span>
            <h2 class="sec-title__title"><?=Yii::t("app", "hotelspan")?></h2>
        </div>
        <div class="row">
            <?php if (!empty($models)):?>
            <?php foreach ($models as $model):?>
            <!--Start Single Team One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="team-one__single">
                    <div class="shape1"><img src="/images/shapes/team-v1-shape1.png" alt="" /></div>
                    <div class="shape2"><img src="/images/shapes/team-v1-shape2.png" alt="" /></div>
                    <div class="team-one__single-img">
                        <?php
                            $img = \app\models\StaticFunctions::getImage("hotel", $model->id, $model->images);
                        ?>
                        <img src="<?=$img?>" alt="" />
                    </div>

                    <div class="team-one__single-content text-center">
                        <h2><a href="team.html"><?=$model->name?></a></h2>
                        <p><?=$model->country?></p>
                    </div>
                </div>
            </div>

                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>
<!--End Team One-->