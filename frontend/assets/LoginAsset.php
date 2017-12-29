<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 29/12/2017
 * Time: 1:53 PM
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/login/style.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:600',
    ];

    public $js = [

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}