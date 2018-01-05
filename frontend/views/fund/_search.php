<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FundSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fund-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fund_id') ?>

    <?= $form->field($model, 'fund_c_id') ?>

    <?= $form->field($model, 'fund_user_id') ?>

    <?= $form->field($model, 'fund_amt') ?>

    <?= $form->field($model, 'fund_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
