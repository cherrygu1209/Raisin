<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 03/01/2018
 * Time: 4:51 PM
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class PageNotFoundAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/pageNotFound/animations.css',
        'css/pageNotFound/bootstrap.css',
        'css/pageNotFound/bootstrap-theme.css',
        'css/pageNotFound/font-awesome.css',
        'css/pageNotFound/style.css',
        'css/user/reset.css',
        'css/user/style.css',
    ];

    public $js = [
        'js/pageNotFound/bootstrap.min.js',
        'js/pageNotFound/jquery.countdown.min.js',
        'js/pageNotFound/main.js',
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
        'http://downloads.mailchimp.com/js/jquery.form-n-validate.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}