<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fund */

$this->title = $model->fund_id;
$this->params['breadcrumbs'][] = ['label' => 'Funds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fund-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fund_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fund_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fund_id',
            'fund_c_id',
            'fund_user_id',
            'fund_amt',
            'fund_note:ntext',
        ],
    ]) ?>

</div>
