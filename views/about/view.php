<?php if (!empty($models)): ?>
    <?php foreach ($models as $model): ?>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Geo2-Love icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Litho Design</span>
                            <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100"><?=$model->addres?></p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Headset icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Let's Talk</span>
                            <p><?=$model->first_phone?><br>Fax: <?=$model->second_phone?></p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col xs-margin-30px-bottom">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Mail-Read icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">E-mail Us</span>
                            <p><a href="mailto:<?=$model->email?>" class="text-sky-blue-hover"><?=$model->email?></a></p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon">
                            <i class="line-icon-Information icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">E-mail Us</span>
                            <p><a href="mailto:<?=$model->email?>" class="text-light-blue text-sky-blue-hover"><?=$model->email?></a></p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="half-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-end sm-margin-25px-tb xs-no-margin-top">
                    <span class="alt-font text-medium d-block margin-10px-bottom">Connect with social media</span>
                    <ul class="small-icon">
                        <li><a class="facebook text-extra-dark-gray text-center text-sm-end" href="https:<?=$model->facebook_link?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter text-extra-dark-gray text-center text-sm-end" href="<?=$model->tweetter_link?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble text-extra-dark-gray text-center text-sm-end" href="<?=$model->telegram_link?>" target="_blank"><i class="fab fa-telegram"></i></a></li>
                        <li><a class="linkedin text-extra-dark-gray text-center text-sm-end" href="<?=$model->instagram_link?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach;?>
<?php endif; ?>