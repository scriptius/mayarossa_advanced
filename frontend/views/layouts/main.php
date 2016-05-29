<?php
\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <!--[if IE 7 ]>
    <html class="ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]>
    <html class="ie8" lang="en"> <![endif]-->
    <!--[if IE 9 ]>
    <html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
    <!--[if (gte IE 10)|!(IE)]><!-->
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <!--<![endif]-->
    <head>
        <title><?= $this->title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <!-- Seo Meta -->
        <meta name="description" content="Maya Rossa (Мая Егорова) - официальный сайт">
        <meta name="keywords" content="remix, music, light, dark, themeforest, multi purpose, band, css3, html5">
        <?php \yii\helpers\Html::csrfMetaTags(); ?>

        <!-- Styles -->

        <!-- Favicon -->
        <link rel="shortcut icon" href="themeMayarossa/images/favicon.ico">
        <link rel="apple-touch-icon" href="themeMayarossa/images/apple-touch-icon.png">

        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE"/>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css"/>
        <![endif]-->
        <?php $this->head() ?>
    </head>
    <body id="fluidGridSystem" class="modern">
    <?php $this->beginBody() ?>
    <div id="layout" class="boxed-margin">

        <?= $this->render('//layouts/head'); ?>


        <?= $content; ?>

        <?= $this->render('//layouts/footer'); ?>

    </div><!-- end layout -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>