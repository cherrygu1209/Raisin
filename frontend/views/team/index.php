<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
frontend\assets\AppAsset::register($this);
frontend\assets\TeamAsset::register($this);
?>
<div class="team-index">





    <div id="main">
        <div class="inner">

            <!-- Boxes -->
            <div class="thumbnails">

                <div class="box">
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic01.jpg')?><!--<img src="img/pic01.jpg" alt="" />--></a>
                    <div class="inner">
                        <h3 class="team-title">Nascetur nunc varius commodo</h3>
                        <p class="team-content">Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
                        <a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic02.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title">Nascetur nunc varius commodo</h3>
                        <p class="team-content">Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
                        <a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic03.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title">Nascetur nunc varius commodo</h3>
                        <p class="team-content">Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
                        <a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic04.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title">Nascetur nunc varius commodo</h3>
                        <p class="team-content">Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
                        <a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic05.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title">Nascetur nunc varius commodo</h3>
                        <p class="team-content">Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
                        <a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic06.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title">Nascetur nunc varius commodo</h3>
                        <p class="team-content">Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
                        <a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

















    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'position',
            'content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
