<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/signup-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Reset Password</h1>
                        <span class="subheading">Please fill out the following fields to sign-up.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <hr>
    </body>











    <!--<h1><?/*= Html::encode($this->title) */?></h1>

    <p>Please choose your new password:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'reset-password-form']); */?>

                <?/*= $form->field($model, 'password')->passwordInput(['autofocus' => true]) */?>

                <div class="form-group">
                    <?/*= Html::submitButton('Save', ['class' => 'btn btn-primary']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>-->
</div>
