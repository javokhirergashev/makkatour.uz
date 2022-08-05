<header>
    <nav class="navbar top-space navbar-expand-lg navbar-boxed navbar-dark bg-extra-dark-gray header-dark fixed-top responsive-sticky">
        <div class="container-fluid nav-header-container">
            <!-- start logo -->
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt="" class="default-logo">
                    <img src="images/logo-white.png" data-at2x="images/logo-black@2x.png" alt="" class="alt-logo">
                    <img src="images/logo-white.png" data-at2x="images/logo-black@2x.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">


                            <ul class="navbar-nav alt-font">
                                <?php if (!empty($models)): ?>

                                    <?php foreach ($models as $model): ?>
                                        <li class="nav-item dropdown simple-dropdown">
                                            <a href="<?=$model->link?>" class="nav-link"><?=$model['name_'.Yii::$app->language];?></a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>


                </div>
            </div>
            <div class="header-language dropdown d-lg-inline-block">
                <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                <ul class="dropdown-menu alt-font">
                    <?php
                        foreach (Yii::$app->params['language'] as $key => $value){
                            echo "<li><a href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a></li>";
                        }
                    ?>

<!--                    <li><a href="javascript:void(0);" title="England"><span class="icon-country"><img src="images/country-flag-16X16/england.png" alt="" data-no-retina=""></span>English</a></li>-->
<!--                    <li><a href="javascript:void(0);" title="Russian"><span class="icon-country"><img src="images/country-flag-16X16/russian.png" alt="" data-no-retina=""></span>Russian</a></li>-->
                </ul>
            </div>
            <div class="header-cart-icon ">
                <a href="<?=\yii\helpers\Url::to(['admin/'])?>"><i class="feather icon-feather-log-in"></i></a>

            </div>

        </div>
    </nav>
</header>