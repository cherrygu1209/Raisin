<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 05/01/2018
 * Time: 4:27 PM
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class SupportAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/support/style.css',
    ];

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}