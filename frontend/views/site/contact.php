<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <body>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                <!--          <form name="sentMessage" id="contactForm" novalidate>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Name</label>
                      <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Email Address</label>
                      <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Message</label>
                      <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <br>
                  <div id="success"></div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
                  </div>
                </form>-->
            </div>
        </div>
    </div>
    <hr>
    </body>



















    <!--<h1><?/*= Html::encode($this->title) */?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'contact-form']); */?>

                <?/*= $form->field($model, 'name')->textInput(['autofocus' => true]) */?>

                <?/*= $form->field($model, 'email') */?>

                <?/*= $form->field($model, 'subject') */?>

                <?/*= $form->field($model, 'body')->textarea(['rows' => 6]) */?>

                <?/*= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) */?>

                <div class="form-group">
                    <?/*= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>-->

</div>
