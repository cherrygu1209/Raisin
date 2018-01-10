<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RewardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reward-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'r_id') ?>

    <?= $form->field($model, 'c_id') ?>

    <?= $form->field($model, 'r_title') ?>

    <?= $form->field($model, 'r_pledge_amt') ?>

    <?= $form->field($model, 'r_description') ?>

    <?php // echo $form->field($model, 'r_delivery_date') ?>

    <?php // echo $form->field($model, 'r_shipping_details') ?>

    <?php // echo $form->field($model, 'r_limit_availability') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
