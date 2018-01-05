<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WalletSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wallets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wallet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
    <header>
        <nav class="cd-stretchy-nav">
            <a class="cd-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>

            <ul>
                <li><?= Html::a(' profile &nbsp&nbsp&nbsp<i class="fa fa-user-o"></i>',['user/index']) ?></li>
                <!--<li><a href="#0" class="active" class="fa fa-home"><span>Profile</span></a></li>-->
                <li><?= Html::a(' Portfolio &nbsp&nbsp&nbsp<i class="fa fa-star-o"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Campaign &nbsp&nbsp&nbsp<i class="fa fa-shopping-bag"></i>',['campaign/index']) ?></li>
                <li><?= Html::a(' Wallet &nbsp&nbsp&nbsp<i class="fa fa-btc"></i>',['wallet/index'], array('class' => 'active')) ?></li>
                <li><?= Html::a(' Notice &nbsp&nbsp&nbsp<i class="fa fa-envelope"></i>',['site/index']) ?></li>
                <!--<li><a href="#0"><span>Portfolio</span></a></li>
                <li><a href="#0"><span>Services</span></a></li>
                <li><a href="#0"><span>Store</span></a></li>
                <li><a href="#0"><span>Contact</span></a></li>-->


                <?/*= Html::a('<i class="fa fa-fw fa-user"></i> Sign Up',['site/signup'], ['class' => 'btn btn-black', 'title' => 'Sign Up']) */?>
            </ul>

            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </nav>
    </header>

    <p>
        <?= Html::a('Create Wallet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'userId',
            'walletAddress',
            'balance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
