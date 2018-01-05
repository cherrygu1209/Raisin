<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 28/12/2017
 * Time: 5:27 PM
 */

namespace frontend\assets;

use yii\web\AssetBundle;

class SignupAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/signup/style.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:600',
    ];

    public $js = [

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}