<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reward */

$this->title = $model->r_id;
$this->params['breadcrumbs'][] = ['label' => 'Rewards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reward-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->r_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->r_id], [
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
            'r_id',
            'c_id',
            'r_title',
            'r_pledge_amt',
            'r_description',
            'r_delivery_date',
            'r_shipping_details',
            'r_limit_availability',
        ],
    ]) ?>

</div>
