<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
frontend\assets\AppAsset::register($this);
frontend\assets\SignupAsset::register($this);

?>
<div class="site-signup">
    <body>
    <!-- Main Content -->
    <div class="container">


        <br><br><br><br><br>
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']);?>
                        <br>
                        <div class="group">
                            <?= $form->field($model, 'username')
                                ->hint('at least 2 digits.', ['style' => 'font-size:12px, color:#ffffff'])
                                ->textInput(['autofocus' => true])?>
                        </div>
                        <div class="group">
                            <?= $form->field($model, 'email') ?>
                        </div>
                        <div class="group">
                            <?= $form->field($model, 'password')->passwordInput()
                                ->hint('at least 6 digits.', ['style' => 'font-size:12px, color:#ffffff'])?>
                        </div>
                        <div class="group">
                            <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                        </div>



                        <div class="group">
                            <?= $form->field($model, 'verifyCode')
                                ->hint('Click for refresh',['style' => 'font-size:12px, color:#ffffff'])
                                ->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>
                        </div>




                        <div class="form-group">
                            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= Html::a('Already a Member?',['site/login'])?>
                        </div>
                        <div class="order">
                            <span style="white-space:pre;">  </span><span class="line"></span>
                            <span style="white-space:pre;">  </span><span class="txt">Or</span>
                            <span style="white-space:pre;">  </span><span class="line"></span>
                        </div>
                        <?php ActiveForm::end(); ?>
                        <?= Html::a('<i class="fa fa-facebook fa-2x"></i>',['site/index'],['style' => 'margin-left:70px'])?>
                        <?= Html::a('<i class="fa fa-twitter fa-2x"></i>',['site/index'],['style' => 'margin-left:90px'])?>
                        <?= Html::a('<i class="fa fa-instagram fa-2x"></i>',['site/index'],['style' => 'margin-left:80px'])?>
                    </div>
                </div>
            </div>
        </div>
        <!-- original signup fomr -->
        <!--<div class="row">
            <div class="col-lg-5">
                <?php /*$form = ActiveForm::begin(['id' => 'form-signup']); */?>

                <?/*= $form->field($model, 'username')->textInput(['autofocus' => true]) */?>

                <?/*= $form->field($model, 'email') */?>

                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <div class="form-group">
                    <?/*= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) */?>
                </div>

                <?php /*ActiveForm::end(); */?>
            </div>
        </div>-->
    </div>

    <hr>
    </body>
</div>
