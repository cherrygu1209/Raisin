<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CampaignSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'c_title') ?>

    <?= $form->field($model, 'c_image') ?>

    <?= $form->field($model, 'c_description') ?>

    <?= $form->field($model, 'c_start_date') ?>

    <?= $form->field($model, 'c_end_date') ?>

    <?php // echo $form->field($model, 'c_goal') ?>

    <?php // echo $form->field($model, 'c_id') ?>

    <?php // echo $form->field($model, 'c_video') ?>

    <?php // echo $form->field($model, 'c_description_long') ?>

    <?php // echo $form->field($model, 'c_author') ?>

    <?php // echo $form->field($model, 'c_created_at') ?>

    <?php // echo $form->field($model, 'c_display_name') ?>

    <?php // echo $form->field($model, 'c_email') ?>

    <?php // echo $form->field($model, 'c_location') ?>

    <?php // echo $form->field($model, 'c_biography') ?>

    <?php // echo $form->field($model, 'c_social_profile') ?>

    <?php // echo $form->field($model, 'c_status') ?>

    <?php // echo $form->field($model, 'c_cat_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
