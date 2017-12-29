<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

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
                                ->textInput(['autofocus' => true])?>
                        </div>
                        <br>
                        <div class="group">
                            <?= $form->field($model, 'email') ?>
                        </div>
                        <br>
                        <div class="group">
                            <?= $form->field($model, 'password')->passwordInput() ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                        </div>
                        <div class="hr"></div>
                        <?php ActiveForm::end(); ?>
                        <div class="foot-lnk">
                            <?= Html::a('Already a Member?',['site/login'])?>
                        </div>
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
