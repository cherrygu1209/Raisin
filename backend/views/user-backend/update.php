<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserBackend */

$this->title = 'Update User Backend: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Backends', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-backend-update">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->

    <?/*= $this->render('_form', [
        'model' => $model,
    ]) */?>


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?/*= $form->field($model, 'username')->textInput(['maxlength' => true]) */?><!--

    <?/*= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) */?>

    --><?/*= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) */?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model,'image')->fileInput()?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?=
        Html::a('Cancel',['site/index'],[
            'class' => 'btn btn-default',
            'id' => 'cancel',
        ])
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
