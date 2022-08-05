

<section class="pt-0  ">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?=$image?>" >
            </div>
            <div class="col-6">
                <ul>
                    <li style="list-style: none"><h2><?=$model['title_'.Yii::$app->language];?></h2></li>
                    <li style="list-style: none"><h3><?=$model->period?></h3></li>
                    <li style="list-style: none"><h6><?=$model->price?></h6></li>

                </ul>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="col-12 margin-9-rem-top sm-margin-50px-top last-paragraph-no-margin wow animate__fadeIn">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-20px-bottom"><?=Yii::t('app','packages_info')?></h6>
                        <p><?=$model['body_'.Yii::$app->language];?></p>
                    </div>

                </div>
            </div>
        </div>
        <a href="https://payme.uz/fallback/merchant/?id=6287308844589c0316db4a42" class="btn btn-small btn-gradient-sky-blue-pink  d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"><?=Yii::t('app','buy_button')?><span class="bg-dark-slate-blue"></span></a>
    </div>
</section>
<!-- end section -->

