<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profile';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('css/user/reset.css');
$this->registerCssFile('css/user/style.css');
$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
$this->registerJsFile('js/user/jquery-2.1.4.js');
$this->registerJsFile('js/user/main.js');
$this->registerJsFile('js/user/modernizr.js');
?>
<div class="user-index">

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
                <li><a href="#0" class="active" class="fa-home"><span>Profile</span></a></li>
                <li><a href="#0"><span>Portfolio</span></a></li>
                <li><a href="#0"><span>Services</span></a></li>
                <li><a href="#0"><span>Store</span></a></li>
                <li><a href="#0"><span>Contact</span></a></li>
            </ul>

            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </nav>
    </header>

    <main class="cd-main-content">
        <!-- main content here -->

    </main>
    </body>




    <!--<h1><?/*= Html::encode($this->title) */?></h1>
    <?php /*// echo $this->render('_search', ['model' => $searchModel]); */?>

    <p>
        <?/*= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) */?>
    </p>
    --><?/*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'image',
            // 'companyName',
            // 'walletAddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>
</div>
