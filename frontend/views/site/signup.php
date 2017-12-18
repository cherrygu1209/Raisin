<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/signup-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Sign-up</h1>
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
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <hr>
    </body>

















    <!--<h1><?/*= Html::encode($this->title) */?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
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
