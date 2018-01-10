<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RewardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rewards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reward-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reward', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'r_id',
            'c_id',
            'r_title',
            'r_pledge_amt',
            'r_description',
            //'r_delivery_date',
            //'r_shipping_details',
            //'r_limit_availability',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
