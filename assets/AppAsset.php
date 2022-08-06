<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://unicons.iconscout.com/release/v4.0.0/css/line.css",
        "images/favicons/apple-touch-icon.png",
        "images/favicons/favicon-32x32.png",
        "images/favicons/favicon-16x16.png",
        "images/favicons/site.webmanifest",
        "vendors/bootstrap/css/bootstrap.min.css",
        "vendors/animate/animate.min.css",
        "vendors/animate/custom-animate.css",
        "vendors/fontawesome/css/all.min.css",
        "vendors/jarallax/jarallax.css",
        "vendors/jquery-magnific-popup/jquery.magnific-popup.css",
        "vendors/nouislider/nouislider.min.css",
        "vendors/nouislider/nouislider.pips.css",
        "vendors/odometer/odometer.min.css",
        "vendors/swiper/swiper.min.css",
        "vendors/icomoon-icons/style.css",
        "vendors/tiny-slider/tiny-slider.min.css",
        "vendors/reey-font/stylesheet.css",
        "vendors/owl-carousel/owl.carousel.min.css",
        "vendors/owl-carousel/owl.theme.default.min.css",
        "vendors/twentytwenty/twentytwenty.css",
        "css/amozo.css",
        "css/amozo-responsive.css",
        ];
    public $js = [
//        "assets/js/jquery.min.js",
        "vendors/jquery/jquery-3.5.1.min.js",
        "vendors/bootstrap/js/bootstrap.bundle.min.js",
        "vendors/jarallax/jarallax.min.js",
        "vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js",
        "vendors/jquery-appear/jquery.appear.min.js",
        "vendors/jquery-circle-progress/jquery.circle-progress.min.js",
        "vendors/jquery-magnific-popup/jquery.magnific-popup.min.js",
        "vendors/jquery-validate/jquery.validate.min.js",
        "vendors/nouislider/nouislider.min.js",
        "vendors/odometer/odometer.min.js",
        "vendors/swiper/swiper.min.js",
        "vendors/tiny-slider/tiny-slider.min.js",
        "vendors/wnumb/wNumb.min.js",
        "vendors/wow/wow.js",
        "vendors/isotope/isotope.js",
        "vendors/countdown/countdown.min.js",
        "vendors/owl-carousel/owl.carousel.min.js",
        "vendors/twentytwenty/twentytwenty.js",
        "vendors/twentytwenty/jquery.event.move.js",
        "vendors/parallax/parallax.min.js",
        "vendors/tilt.js/tilt.jquery.js",
        "http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM",
        "js/amozo.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
