<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ViewCampaignAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700',
        'http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700',
        'css/campaign/global.css',
        'css/campaign/structure.css',
        'css/campaign/be_style.css',
        'css/campaign/custom.css',
        'css/campaign/settings.css',
        'css/campaign/view-campaign.css',
        
    ];
    public $js = [
'js/campaign/jquery-2.1.4.min.js',
'js/campaign/jquery-ui.min.js',
'js/campaign/mfn.menu.js',
'js/campaign/jquery.plugins.js',
'js/campaign/jquery.jplayer.min.js',
'js/campaign/animations.js',
'js/campaign/email.js',
'js/campaign/scripts.js',    
    ];
    public $depends = [
        
    ];

    public static function addJavaScript($view,$jsfile){
        $view->registerJsFile($jsfile,[ViewCampaignAsset::className(),'depends'=>'frontend\assets\ViewCampaignAsset']);
    }

    public static function addCss($view,$cssfile){
        $view->registerCssFile($cssfile,[ViewCampaignAsset::className(),'depends'=>'frontend\assets\ViewCampaignAsset']);
    }
}
