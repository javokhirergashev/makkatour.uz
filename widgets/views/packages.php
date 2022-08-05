<section class="border-top border-color-medium-gray bg-light-gray">
    <div class="container">
        <div class="row margin-5-half-rem-bottom align-items-center">
            <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px text-uppercase margin-5px-bottom">Tur paketlar</h5>
                <p class="m-0 d-block">Sizni ajoyib va quvnoq sayohatlar kutmoqda</p>
            </div>

        </div>
        <div class="row">

            <div class="col-12 position-relative p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                <?php if (!empty($models)): ?>
                <div class="swiper-container h-auto padding-15px-all black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-3", "prevEl": ".swiper-button-previous-nav-3" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>

                    <div class="swiper-wrapper">
                        <!-- start info banner slider item -->

                            <?php foreach ($models as $model): ?>
                            <?php
                                $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
                                if (is_file($image)){
                                    $image = "images/no_photo.png";
                                }
                            ?>
                                <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover">
                                    <a href="<?=\yii\helpers\Url::to(['tours/view','id'=>$model->id])?>"><img src="<?=$image?>" alt="" /></a>
                                    <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr">
                                        <div class="bg-neon-orange text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr"><?=$model->price?></div>
                                        <span class="text-medium text-uppercase d-block margin-5px-bottom"><?=$model->period?></span>
                                        <a href="<?=\yii\helpers\Url::to(['tours/view','id'=>$model->id])?>" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block"><?=$model['title_'.Yii::$app->language];?></a>

                                        <a href="<?=\yii\helpers\Url::to(['tours/view','id'=>$model->id])?>" class="btn btn-small btn-gradient-sky-blue-pink  d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr">Batafsil<span class="bg-dark-slate-blue"></span></a>

                                        <span class="text-golden-yellow text-small line-height-18px d-block">…</span>
                                        <span class="text-medium">Ko'rishlar soni <?=$model->seen_count?> marta</span>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        <!-- end info banner slider item -->


                    </div>

                </div>
                <?php endif; ?>
                <div class="swiper-button-next-nav-3 swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large" tabindex="0" role="button" aria-label="Next slide"><i class="feather icon-feather-arrow-right"></i></div>
                <div class="swiper-button-previous-nav-3 swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large" tabindex="0" role="button" aria-label="Previous slide"><i class="feather icon-feather-arrow-left"></i></div>
            </div>
        </div>
    </div>
</section>