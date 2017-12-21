<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use frontend\models\Campaign;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
<div class="text-left">
    <div class="form-group">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'c_title')->textInput(['maxlength' => true]) ?>
      
    <?= $form->field($model, 'file')->fileInput();  ?>
    
    <?= $form->field($model, 'c_description')->textarea(['rows' => 3]) ?>
    
    <?= $form->field($model, 'c_start_date')->widget(
         DatePicker::className(), [
        // inline too, not bad
         'inline' => FALSE, 
         // modify template for custom rendering
         //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>

    <?= $form->field($model, 'c_end_date')->widget(
         DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>

    <?= $form->field($model, 'c_goal')->textInput() ?>
    <?php ActiveForm::end(); ?>
    
    </div>
</div>
</div>
