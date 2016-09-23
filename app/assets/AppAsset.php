<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    
    public $css = [
        
        'css/css.css',
        'css/font-awesome.css',
        'css/style.css',
        'css/bootstrap_col_15.css',
       'css/styles.css',
         
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
