<section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 blog-content">
                <?php if (!empty($models)): ?>
                    <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>

                        <!-- start blog item -->
                        <?php foreach ($models as $model): ?>
                            <?php
                            $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
                            if (is_file($image)){
                                $image = "assets/images/no_photo.png";
                            }
                            ?>
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="#" title=""><img src="<?=$image?>" alt=""></a>

                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="" class="alt-font text-small d-inline-block margin-10px-bottom"><?=$model->price?> </a>
                                        <a href="" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block"><?=$model['description_'.Yii::$app->language];?></a>
                                        <p><?=$model['title_'.Yii::$app->language];?></p>

                                    </div>
                                </div>
                            </li>
                        <?php endforeach;?>
                        <!-- end blog item -->

                    </ul>
                <?php endif;?>

            </div>
        </div>
    </div>
</section>