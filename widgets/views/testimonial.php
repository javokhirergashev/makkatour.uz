<section class="border-top border-color-medium-gray bg-gradient-white-light-gray">
    <div class="container">
        <div class="row margin-5-rem-bottom xs-margin-4-rem-bottom align-items-center">
            <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px text-uppercase margin-5px-bottom"><?=Yii::t('app', 'opinions')?></h5>
                <p class="m-0 d-block"><?=Yii::t('app', 'sub_opinions')?> </p>
            </div>

        </div>
        <div class="row margin-6-rem-bottom xs-margin-2-half-rem-bottom">
            <div class="col-12 p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="swiper-simple-arrow-style-1">
                    <div class="swiper-container padding-15px-all black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-4", "prevEl": ".swiper-button-previous-nav-4" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <?php if (!empty($models)): ?>
                            <div class="swiper-wrapper">
                                <!-- start testimonial item -->
                                <?php foreach ($models as $model): ?>
                                <?php
                                $image = \app\models\StaticFunctions::getImage('testimonials',$model->id,$model->images);
                                if (is_file($image)){
                                    $image = "images/no_photo.png";
                                }
                                ?>
                                    <div class="swiper-slide text-center">
                                        <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white box-shadow-small border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                            <div class="feature-box-icon margin-25px-right">
                                                <img class="rounded-circle w-65px h-65px" src="<?=$image?>" alt="Herman Miller"/>
                                            </div>
                                            <div class="feature-box-content">
                                                <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px"><?=$model->name?></div>
                                                <span class="text-small"><?=$model->email?></span>
                                            </div>
                                            <p class="margin-30px-top"><?=$model['comment_'.Yii::$app->language];?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- end testimonial item -->

                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- start slider navigation -->
                    <!--<div class="swiper-button-next-nav-4 swiper-button-next slider-navigation-style-01 light box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
                        <div class="swiper-button-previous-nav-4 swiper-button-prev slider-navigation-style-01 light box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>-->
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 text-center wow animate__zoomIn" data-wow-delay="0.6s">
                <img src="images/home-travel-agency-trustpilot.jpg" alt=""/>
            </div>
        </div>
    </div>
</section>