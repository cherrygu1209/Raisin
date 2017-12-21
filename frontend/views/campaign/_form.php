<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */
/* @var $form ActiveForm */
?>
<div class="form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'c_title') ?>
        <?= $form->field($model, 'file')->fileInput();  ?>
        <?= $form->field($model, 'c_description') ?>
        <?= $form->field($model, 'c_start_date') ?>
        <?= $form->field($model, 'c_end_date') ?>
        <?= $form->field($model, 'c_goal') ?>
        <?= $form->field($model, 'c_created_at') ?>
        <?= $form->field($model, 'c_video') ?>
        <?= $form->field($model, 'c_description_long') ?>
        <?= $form->field($model, 'c_author') ?>
        <?= $form->field($model, 'c_display_name') ?>
        <?= $form->field($model, 'c_email') ?>
        <?= $form->field($model, 'c_location') ?>
        <?= $form->field($model, 'c_biography') ?>
        <?= $form->field($model, 'c_social_profile') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- _form -->
