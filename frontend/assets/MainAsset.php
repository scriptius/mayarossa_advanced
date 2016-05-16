<?
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'themeMayarossa/css/style.css',
        'themeMayarossa/bootstrap/css/bootstrap.css',
        'themeMayarossa/bootstrap/css/bootstrap.min.css',
        'themeMayarossa/bootstrap/css/bootstrap-responsive.min.css',
        'themeMayarossa/styles/icons/icons.css'
    ];

    public $js = [
        'themeMayarossa/js/rs-plugin/css/settings.css',

    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];


}