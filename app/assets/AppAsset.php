<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    
    public $css = [
        'css/styles.css',
        'css/css.css',
        'css/font-awesome.css',
        'css/style.css'
         
    ];
    
    public $js = [
        'js/common.js',
        'js/owl.js',
         'js/scripts.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
