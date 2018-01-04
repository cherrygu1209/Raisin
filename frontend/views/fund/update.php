<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fund */

$this->title = 'Update Fund: ' . $model->fund_id;
$this->params['breadcrumbs'][] = ['label' => 'Funds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fund_id, 'url' => ['view', 'id' => $model->fund_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fund-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
