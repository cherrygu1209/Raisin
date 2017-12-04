<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        //'css/bootstrap-theme.css',
        'css/elegant-icons-style.css',
        'css/font-awesome.css',
        'css/font-awesome.css/font-awesome.min.css',
        'css/fullcalendar.css',
        'css/jquery-jvectormap.1.2.2.css',
        'css/jquery-ui-1.10.4.css',
        'css/owl.carousel.css',
        'css/style.css',
        'css/style-responsive.css',
        'css/widgets.css',
        'css/xcharts.min.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
