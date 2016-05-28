<?php

namespace frontend\controllers;

class PageController extends \yii\web\Controller
{
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHonors()
    {
        return $this->render('honors');
    }

    public function actionSmi()
    {
        return $this->render('smi');
    }

}
