<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <!-- title -->
            <div class="col-md-12 text-center">
                <h6 class="alt-font text-extra-dark-gray font-weight-500"><?=Yii::t('app','booking')?></h6>
            </div>
            <!-- end title -->
            <div class="col-12 col-xl-4 col-lg-8 col-md-10 text-center">
                <h6 class="font-weight-300 margin-eight-bottom sm-margin-30px-bottom"><?=Yii::t('app','sub_booking')?></h6>
                <a href="#booking" class="btn btn-medium btn-round-edge btn-fast-blue popup-with-form"><?=Yii::t('app','booking_button')?></a>
                <!-- start contact form -->
                <form id="booking"  method="post" class="white-popup-block col-xl-4 col-lg-7 col-sm-9  p-0 mx-auto mfp-hide">
                    <div class="padding-fifteen-all bg-white border-radius-6px xs-padding-six-all">
                        <h6 class="text-extra-dark-gray font-weight-500 margin-35px-bottom xs-margin-15px-bottom">Buyurtma berish uchun ma'lumotlarni kiriting</h6>
                        <div>
                            <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="text" name="name" placeholder="Ismingiz" id="name">
                            <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="text" name="surname" placeholder="Familiyangiz" id="surname">
                            <input class="medium-input margin-25px-bottom xs-margin-10px-bottom required" type="email" name="email" placeholder="Elektron pochtangiz" id="email">
                            <input class="medium-input margin-25px-bottom xs-margin-10px-bottom" type="tel" name="phone" placeholder="Telefon raqamingiz" id="phone">
                            <input class="medium-input margin-25px-bottom xs-margin-10px-bottom" type="date" name="date" placeholder="Sayohat sanasi" id="date">
                            <?php if (!empty($models)): ?>
                                <select  id="package" placeholder="Tur paketni tanlang">
                                    <option value="" disabled selected>Tur paketni tanlang </option>
                                    <?php foreach ($models as $model): ?>
                                        <option value="<?=$model['title_'.Yii::$app->language];?>"><?=$model['title_'.Yii::$app->language];?></option>
                                    <?php endforeach; ?>
                                </select>
                            <?php endif; ?>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-medium btn-gradient-sky-blue-pink mb-0 submit" type="submit" onclick="booking();">Send Message</button>
                            <div class="form-results d-none"></div>
                        </div>
                    </div>
                </form>
                <!-- end contact form -->
            </div>
        </div>
    </div>
</section>