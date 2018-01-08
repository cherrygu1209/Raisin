<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SupportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supports';
$this->params['breadcrumbs'][] = $this->title;
frontend\assets\PageNotFoundAsset::register($this);
frontend\assets\SupportAsset::register($this);
?>
<div class="support-index">


    <h2 class="page-title">Support</h2>
    <br>

    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <br/>
                    <br/>
                    <h1 class="subtitle">Your request has been sent to us!</h1>
                    <br />
                    <br/><br/>
                    <a class="btn-homepage" href="<?=Url::to(['/site/index'])?>"><i class="fa fa-home"></i>&nbspGo Homepage</a>
                    <a class="btn-homepage" href="<?=Url::to(['/support/create'])?>"><i class="fa fa-telegram"></i>&nbspSupport Again</a>
                    <!--<a class="btn-homepage" href="<?/*=Url::to(Yii::$app->request->referrer)*/?>"><i class="fa fa-home"></i>Go back to previous page</a>-->
                </div>
            </div>
        </div>
    </div>

    <!--<h1><?/*= Html::encode($this->title) */?></h1>
    <?php /*// echo $this->render('_search', ['model' => $searchModel]); */?>

    <p>
        <?/*= Html::a('Create Support', ['create'], ['class' => 'btn btn-success']) */?>
    </p>

    --><?/*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'type',
            'content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>
</div>
