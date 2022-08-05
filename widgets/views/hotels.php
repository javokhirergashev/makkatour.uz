<section class="position-relative padding-7-rem-lr xl-padding-2-rem-lr xs-no-padding-lr">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-3 col-lg-9 col-md-8 text-center text-xl-start position-relative lg-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <h5 class="alt-font text-uppercase text-extra-dark-gray font-weight-600 margin-25px-bottom letter-spacing-minus-1px w-75 xl-w-100 lg-w-50 mx-auto mx-xl-0 lg-margin-15px-bottom md-w-100"><?=Yii::t('app','hotel_special')?></h5>
                <p class="w-75 margin-35px-bottom xl-w-100 lg-w-65 mx-auto mx-xl-0 md-w-100 sm-margin-30px-bottom"><?=Yii::t('app','sub_hotel_special')?></p>
                <a href="#" class="btn btn-fancy btn-small btn-dark-gray"><?=Yii::t('app','hotel_special_button')?></a>
            </div>
            <!-- start interactive banner item -->
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <?php
                    $image = \app\models\StaticFunctions::getImage('hotel',$model->id,$model->images);
                        if (is_file($image)){
                            $image = "images/no_photo.png";
                        }
                    ?>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6 interactive-banners-style-02 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s">
                        <a href="#">
                            <img src="<?=$image?>" alt="">
                            <div class="bg-gradient-black-transparent opacity-full"></div>
                            <span class="category-name font-weight-500 border-radius-2px text-extra-small"><?=$model->country?></span>
                            <div class="alt-font category-content justify-content-center">
                                <div class="d-flex align-items-center">
                                    <span class="flex-shrink-0 m-0 text-white text-large text-uppercase font-weight-500 w-50 letter-spacing-minus-1-half xl-w-80"><?=$model->name?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            <?php endif; ?>
            <!-- end interactive banner item -->

        </div>
    </div>
</section>