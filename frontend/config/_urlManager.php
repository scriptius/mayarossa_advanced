<?php
return [
    'class'=>'yii\web\UrlManager',
    'enablePrettyUrl'=>true,
    'showScriptName'=>false,
    'rules'=> [
        //site
        ['pattern'=>'register', 'route'=>'site/register'],

        // Pages
        ['pattern'=>'page/<slug>', 'route'=>'page/view'],
        ['pattern'=>'about', 'route'=>'page/about'],
        ['pattern'=>'honors', 'route'=>'page/honors'],
        ['pattern'=>'smi', 'route'=>'page/smi'],
        // Articles


        ['pattern'=>'article/index', 'route'=>'article/index'],
        ['pattern'=>'article/attachment-download', 'route'=>'article/attachment-download'],
        ['pattern'=>'article/<slug>', 'route'=>'article/view'],

        // Api
        ['class' => 'yii\rest\UrlRule', 'controller' => 'api/v1/article', 'only' => ['index', 'view', 'options']],
        ['class' => 'yii\rest\UrlRule', 'controller' => 'api/v1/user', 'only' => ['index', 'view', 'options']]
    ]
];
