<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
frontend\assets\AppAsset::register($this);
frontend\assets\LoginAsset::register($this);
?>
<div class="site-request-password-reset">
    <body>

    <br><br><br><br><br>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Password Reset</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <?php $form = ActiveForm::begin(['id' => 'site-request-password-reset']); ?>
                <div class="sign-in-htm">
                    <br>
                    <div class="group">
                        <h6 style="alignment: center;color: #ffffff;font-size: 15px">Full fill in your email to reset the password:</h6>
                        <br>
                        <?= $form->field($model, 'email')
                            ->textInput(['autofocus' => true]) ?>
                    </div>
                    <br>

                    <div class="form-group">
                        <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <div class="order">
                        <span style="white-space:pre;">  </span><span class="line"></span>
                        <span style="white-space:pre;">  </span><span class="txt">Or</span>
                        <span style="white-space:pre;">  </span><span class="line"></span>
                    </div>
                    <?php ActiveForm::end(); ?>
                    <div class="foot-lnk">
                        <?= Html::a('Do not have an account?',['site/signup'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    </body>










    <!--<h1><?/*= Html::encode($this->title) */?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'login-form']); */?>

                <?/*= $form->field($model, 'username')->textInput(['autofocus' => true]) */?>

                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <?/*= $form->field($model, 'rememberMe')->checkbox() */?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?/*= Html::a('reset it', ['site/request-password-reset']) */?>.
                </div>

                <div class="form-group">
                    <?/*= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>-->
</div>