<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
frontend\assets\AppAsset::register($this);
frontend\assets\SignupAsset::register($this);
?>
<div class="site-login">
    <body>

    <br><br><br><br><br>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="sign-in-htm">
                    <br>
                    <div class="group">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    </div>
                    <br>
                    <div class="group">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                    <br>
                    <div class="group">
                        <?= $form->field($model, 'rememberMe')->checkbox()?>
                    </div>
                    <br>
                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?= Html::a('Forgot Password?',['site/request-password-reset'])?>
                    </div>

                    <div class="hr"></div>
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
