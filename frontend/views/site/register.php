<div class="under_header" style="height: 170px">

</div>

<div class="row" style="align-content: center">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <?
        $form = \yii\bootstrap\ActiveForm::begin([
            'enableClientValidation' => true,
            'enableAjaxValidation' => true,
        ]);
        ?>

        <?
        echo $form->field($model,'username');
        ?>
        <?
        echo $form->field($model,'email');
        ?>
        <?
        echo $form->field($model,'password')->passwordInput();
        ?>
        <?
        echo $form->field($model,'repassword')->passwordInput();
        ?>

        <?
        echo \yii\helpers\Html::submitButton('Register',['class' => 'btn btn-success'])
        ?>


        <?
        \yii\bootstrap\ActiveForm::end();
        ?>
        <br>
    </div>

</div>