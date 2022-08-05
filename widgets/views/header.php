<header class="main-header main-header--one main-header--one--two  clearfix">
    <div class="main-header--one__wrapper">
        <div class="auto-container">
            <div class="main-header--one__inner">

                <div class="main-header--one__left">
                    <div class="logo">
                        <a href="index-2.html"><img src="images/resources/logo-2.png" alt="" /></a>
                    </div>
                </div>

                <nav class="main-menu main-menu--1 main-menu--1--2">
                    <div class="main-menu__inner">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <div class="stricky-one-logo">
                            <div class="logo">
                                <a href="index-2.html"><img src="images/resources/logo-1.png" alt=""></a>
                            </div>
                        </div>

                        <div class="main-header--one__middle">
                            <ul class="main-menu__list">
                                <li class="dropdown current">

                                    <?php if (!empty($menular)):?>
                                        <?php foreach ($menular as $menu):?>
                                            <a href="<?=$menu->link?>"><?=$menu["name_".Yii::$app->language];?></a>
                                        <?php endforeach;?>
                                    <?php endif;?>
<!--                                    <a href="index-2.html">Home</a>-->
<!--                                    <ul>-->
<!--                                        -->
<!--                                        <li><a href="index-2.html">Home One</a></li>-->
<!--                                        <li><a href="index-3.html">Home Two</a></li>-->
<!--                                        <li class="dropdown">-->
<!--                                            <a href="#">Header Styles</a>-->
<!--                                            <ul>-->
<!--                                                <li><a href="index-2.html">Header One</a></li>-->
<!--                                                <li><a href="index-3.html">Header Two</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
                                </li>
<!--                                <li><a href="about.html">About</a></li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#">Services</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="services.html">Services</a></li>-->
<!--                                        <li><a href="services-details.html">Services Details</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#">Page</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="case.html">Case</a></li>-->
<!--                                        <li><a href="case-v2.html">Case Two</a></li>-->
<!--                                        <li><a href="case-single.html">Case Single</a></li>-->
<!--                                        <li><a href="team.html">Team</a></li>-->
<!--                                        <li><a href="faq.html">Faq</a></li>-->
<!--                                        <li><a href="error.html">Error</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#">Blog</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="blog.html">Blog</a></li>-->
<!--                                        <li><a href="blog-v2.html">Blog Two</a></li>-->
<!--                                        <li><a href="blog-single.html">Blog Single</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="contact.html">Contact</a></li>-->
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