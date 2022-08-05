<section class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center margin-7-rem-bottom">
                <span class="d-block alt-font margin-5px-bottom"><?=Yii::t('app','FAQ')?></span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">FAQ</h5>
            </div>
            <div class="col-12 col-lg-12 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                <?php if (!empty($models)): ?>
                    <div class="panel-group accordion-event accordion-style-03" id="accordion2" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                        <!-- start accordion item -->
                        <?php foreach ($models as $model): ?>
                            <div class="panel bg-white box-shadow-small border-radius-5px">
                                <div class="panel-heading active-accordion">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#collapseOne" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500"><?=$model['question_'.Yii::$app->language];?></span>
                                            <i class="indicator fas fa-angle-down text-fast-blue icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" data-bs-parent="#accordion2">
                                    <div class="panel-body"><?=$model['answer_'.Yii::$app->language];?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- end accordion item -->

                </div>
                <?php endif; ?>

        </div>
    </div>
</section>