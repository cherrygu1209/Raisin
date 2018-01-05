<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 03/01/2018
 * Time: 11:20 AM
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class FaqAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'vendor/font-awesome/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700',
        'css/faq/style.css',
        'css/user/reset.css',
        'css/user/style.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'https://bootswatch.com/cosmo/bootstrap.min.css',
    ];

    public $js = [
        'js/faq/jquery.mobile.custom.min.js',
        'js/faq/jquery-2.1.1.js',
        'js/faq/main.js',
        'js/faq/modernizr.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}