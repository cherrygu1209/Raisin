<?php
/**
 * Created by PhpStorm.
 * User: cherry
 * Date: 04/01/2018
 * Time: 5:03 PM
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class TeamAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/team/font-awesome.min.css',
        'css/team/main.css',
        'css/user/reset.css',
        /*'css/user/style.css',*/
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Passion+One:400',
    ];

    public $js = [
        'js/team/jquery。min.js',
        'js/team/jquery.poptrox.min.js',
        'js/team/jquery.scrolly.min.js',
        'js/team/main.js',
        'js/team/skel.min.js',
        'js/team/util.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}