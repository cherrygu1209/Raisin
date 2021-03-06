<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 13/12/2017
 * Time: 12:50 PM
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/user/reset.css',
        'css/user/style.css',
    ];

    public $js = [
        'js/user/jquery-2.1.4.js',
        'js/user/main.js',
        'js/user/modernizr.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}