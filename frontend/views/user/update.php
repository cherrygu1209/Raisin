<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'Update User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>

    --><?/*= $this->render('_form', [
        'model' => $model,
    ]) */?>


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) */?><!--

    <?/*= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) */?>

    --><?/*= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) */?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'status')->textInput() */?><!--

    <?/*= $form->field($model, 'created_at')->textInput() */?>

    --><?/*= $form->field($model, 'updated_at')->textInput() */?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'companyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'walletAddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?=
        Html::a('Cancel',['index'],[
            'class' => 'btn btn-default',
            'id' => 'cancel',
        ])
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>