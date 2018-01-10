<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reward */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reward-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_id')->textInput() ?>

    <?= $form->field($model, 'r_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_pledge_amt')->textInput() ?>

    <?= $form->field($model, 'r_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_delivery_date')->textInput() ?>

    <?= $form->field($model, 'r_shipping_details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_limit_availability')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
