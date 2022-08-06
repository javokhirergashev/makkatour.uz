<header class="main-header main-header--one main-header--one--two  clearfix">
    <div class="main-header--one__wrapper">
        <div class="auto-container">
            <div class="main-header--one__inner">

                <div class="main-header--one__left">
                    <div class="logo">
                        <a href="index-2.html"><img src="/images/resources/logo-2.png" alt="" /></a>
                    </div>
                </div>

                <nav class="main-menu main-menu--1 main-menu--1--2">
                    <div class="main-menu__inner">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <div class="stricky-one-logo">
                            <div class="logo">
                                <a href="index-2.html"><img src="/images/resources/logo-1.png" alt=""></a>
                            </div>
                        </div>

                        <div class="main-header--one__middle">
                            <ul class="main-menu__list">
                                <li class="dropdown current">

                                    <?php if (!empty($models)):?>
                                        <?php foreach ($models as $model):?>
                                            <a href="<?=$model->link?>"><?=$model["name_".Yii::$app->language];?></a>
                                        <?php endforeach;?>
                                    <?php endif;?>

                                </li>
                                <li><a href="<?=\yii\helpers\Url::to(['admin/'])?>"><i style="font-size: 20px" class="uil uil-sign-out-alt"></i></a></li>

                                <div class="containerr-1">
                                    <button class="clickk"><i class="uil uil-globe" ></i><i class="uil uil-angle-down" id="down"></i></button>
                                    <div class="listt">
                                        <?php
                                        foreach (Yii::$app->params['language'] as $key => $value){echo
                                            "<li id='linka'>
                                                <a href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."' id='ahref'><img src='' alt=''><p class='imageValue'>".$value."</p></a>
                                             </li>";
                                        }?>
                                    </div>
                                </div>


                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="main-header--one__right clearfix">
                    <div class="contact-box">
                        <div class="icon">
                            <span class="icon-call-1"></span>
                        </div>
                        <div class="text">
                            <p>More info for call us</p>
                            <a href="tel:123456789">+017682648101</a>
                        </div>
                    </div>

                    <div class="search-box">
                        <a href="#" class="search search-toggler"><span class="icon-search"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>


<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content">

    </div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->