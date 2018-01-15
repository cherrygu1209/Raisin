<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/clean-blog.css',
        'css/clean-blog.min.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/font-awesome/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'vendor/2amigos/yii2-date-picker-widget/src/assets/css/bootstrap-daterangepicker.css',
        'css/styles.css',
        'css/bootstrap.css',
        'css/bootstrap-grid.css',
        'css/bootstrap-grid.min.css',
        'css/bootstrap-reboot.css',
        'css/bootstrap-reboot.min.css',
        'css/explore_campaigns_style.css'
    ];
    public $js = [
        'js/clean-blog.js',
        'js/clean-blog.min.js',
        'js/contact_me.js',
        'js/jqBootstrapValidation.js',
//        'vendor/jquery/jquery.min.js',
//        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/bootstrap/js/bootstrap.js',
        'js/modal.js',
        'vendor/jquery/jquery.min.js',
//        'vendor/bootstrap/js/bootstrap.bundle.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public static function addJavaScript($view,$jsfile){
        $view->registerJsFile($jsfile,[AppAsset::className(),'depends'=>'frontend\assets\AppAsset']);
    }

    public static function addCss($view,$cssfile){
        $view->registerCssFile($cssfile,[AppAsset::className(),'depends'=>'frontend\assets\AppAsset']);
    }
}
