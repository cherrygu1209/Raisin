<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use frontend\models\Campaign;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaignReward-form">

    <div class="form-group">
    <!--<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>-->

    <?= $form->field($model, 'c_video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_description_long')->textarea(['rows' => 6]); ?>
        
<!--    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>-->

    <?php ActiveForm::end(); ?>
    </div>
</div>
