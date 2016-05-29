<?php
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class GoogleMapsAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [

    ];

    public $js = [
        'themeMayarossa/js/gmap3.js',
        'http://maps.google.com/maps/api/js?sensor=false'
    ];

    public $depends = [
        'frontend\assets\MainAsset'
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
        'type' => 'text/javascript'
    ];

    public $cssOptions = [

    ];


}