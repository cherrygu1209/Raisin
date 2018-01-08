<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Support */

$this->title = 'Support';
$this->params['breadcrumbs'][] = ['label' => 'Supports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

frontend\assets\SupportAsset::register($this);
?>
<div class="support-create">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->

    <h2 class="page-title">Support</h2>
    <br><br><br><br>

    <?php $form = ActiveForm::begin(); ?>

    <div class="support-email">
        <?= $form->field($model, 'email')
            ->textInput(['maxlength' => true])
            ->label('Email Address')?>
    </div>

    <div class="support-type">
        <?= $form->field($model, 'type')->dropDownList(['basic'=>'basic questions','back'=>'back project','project'=>'start project'], ['prompt'=>'(select type)','style'=>'font-size:15px']) ?>
    </div>

    <div class="support-content">
        <?= $form->field($model, 'content')->textarea(['rows' => 9]) ?>
    </div>

    <div class="support-button">
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

    <?/*= $this->render('_form', [
        'model' => $model,
    ]) */?>

</div>
