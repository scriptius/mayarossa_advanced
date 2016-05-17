<?
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'themeMayarossa/css/style.css',
        'themeMayarossa/styles/light.css',

//        'themeMayarossa/bootstrap/css/bootstrap.css',
//        'themeMayarossa/bootstrap/css/bootstrap.min.css',
//        'themeMayarossa/bootstrap/css/bootstrap-responsive.min.css',
        'themeMayarossa/styles/icons/icons.css',
        'http://fonts.googleapis.com/css?family=Oswald',
        'themeMayarossa/js/rs-plugin/css/settings.css',
    ];

    public $js = [
        'themeMayarossa/js/theme20.js',
        'themeMayarossa/js/jquery.min.js',
        'themeMayarossa/bootstrap/js/bootstrap.min.js',
        'themeMayarossa/js/rs-plugin/js/jquery.themepunch.plugins.min.js',
        'themeMayarossa/js/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'themeMayarossa/js/jquery.prettyPhoto.js',
        'themeMayarossa/js/jquery.flexslider-min.js',
        'themeMayarossa/js/jquery.jplayer.js',
        'themeMayarossa/js/ttw-music-player-min.js',
        'themeMayarossa/music/myplaylist.js',
        'themeMayarossa/js/countdown.js',
        'themeMayarossa/js/jquery.nicescroll.min.js',
        'themeMayarossa/js/twitter/jquery.tweet.js',
        'themeMayarossa/js/custom.js',

    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
        'type' => 'text/javascript'
    ];

    public $cssOptions = [
        'type' => 'text/css'
    ];


}