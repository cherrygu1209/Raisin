<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */
/* @var $form ActiveForm */
?>
<div class="form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'c_title') ?>
        <?= $form->field($model, 'c_image') ?>
        <?= $form->field($model, 'c_description') ?>
        <?= $form->field($model, 'c_start_date') ?>
        <?= $form->field($model, 'c_end_date') ?>
        <?= $form->field($model, 'c_goal') ?>
        <?= $form->field($model, 'c_video') ?>
        <?= $form->field($model, 'c_description_long') ?>
        <?= $form->field($model, 'c_created_at') ?>
        <?= $form->field($model, 'c_author') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- _form -->
