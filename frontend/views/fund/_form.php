<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fund */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fund-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fund_c_id')->textInput() ?>

    <?= $form->field($model, 'fund_user_id')->textInput() ?>

    <?= $form->field($model, 'fund_amt')->textInput() ?>

    <?= $form->field($model, 'fund_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
