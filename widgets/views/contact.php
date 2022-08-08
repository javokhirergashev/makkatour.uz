<!--Start Contact Page-->
<section class="contact-page">
    <div class="container">
        <div class="title text-center">
            <h2><?=Yii::t("app", "contact")?></h2>
            <p><?=Yii::t("app", "contactp")?></p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__wrapper">
                    <!--Start Comment Form -->
                    <div class="comment-form">
                        <form action="https://amozo-html.vercel.app/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                              novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" id="input_name" placeholder="<?=Yii::t('app','name')?>*" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" id="input_surname" placeholder="<?=Yii::t("app", "surname")?>*" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="number" id="input_tel" placeholder="<?=Yii::t("app", "tel")?>*" name="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" id="input_email" placeholder="<?=Yii::t("app", "email")?>*" name="email">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <select id="select" data-aos="fade-up">
                                            <option disabled selected><?= Yii::t("app", "category1")?></option>
                                            <?php if(!empty($contacts)):?>
                                                <?php foreach ($contacts as $contact):?>
                                                    <option><?=$contact["title_".Yii::$app->language];?></option>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">

                                        <input type="datetime-local" id="input_data" placeholder="<?=Yii::t("app", "data")?>" data-aos="fade-up" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" id="textarea" placeholder="<?=Yii::t("app", "message")?>"></textarea>
                                    </div>
                                    <button type="submit" id="submit" onclick="getValue()" class="thm-btn comment-form__btn btnnm"><?=Yii::t("app", "send")?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Comment Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page-->