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

    <br />
    <h2 class="page-title">Team</h2>
    <br><br>

    <h3 class="page-side-title">Our Develop Members and Advisors</h3>


    <div id="main">
        <div class="inner">

            <!-- Boxes -->
            <div class="thumbnails">

                <div class="box">
                    <?php
                    $str1 = '';
                    $str2 = '';
                    $rows1 = (new \yii\db\Query())
                        ->select('name')
                        ->where(['id' => 1])
                        ->from('team')
                        ->all();
                    $rows2 = (new \yii\db\Query())
                        ->select('position')
                        ->where(['id' => 1])
                        ->from('team')
                        ->all();
                    foreach ($rows1 as $key => $val)
                    {
                        $str1 = $rows1[$key]['name'];
                    }
                    foreach ($rows2 as $key => $val)
                    {
                        $str2 = $rows2[$key]['position'];
                    }
                    ?>
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic01.jpg')?><!--<img src="img/pic01.jpg" alt="" />--></a>
                    <div class="inner">
                        <h3 class="team-title"><?php echo $str1; ?></h3>
                        <br />
                        <p class="team-position"><?php echo $str2; ?></p>
                        <br />
                        <a href="https://www.linkedin.com/company/3120362/" class="fa fa-linkedin-square fa-2x social-icon" target="_blank"></a>
                        <!--<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>-->
                    </div>
                </div>

                <div class="box">
                    <?php
                    $str1 = '';
                    $str2 = '';
                    $rows1 = (new \yii\db\Query())
                        ->select('name')
                        ->where(['id' => 2])
                        ->from('team')
                        ->all();
                    $rows2 = (new \yii\db\Query())
                        ->select('position')
                        ->where(['id' => 2])
                        ->from('team')
                        ->all();
                    foreach ($rows1 as $key => $val)
                    {
                        $str1 = $rows1[$key]['name'];
                    }
                    foreach ($rows2 as $key => $val)
                    {
                        $str2 = $rows2[$key]['position'];
                    }
                    ?>
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic02.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title"><?php echo $str1; ?></h3>
                        <br />
                        <p class="team-position"><?php echo $str2; ?></p>
                        <br />
                        <a href="https://www.linkedin.com/company/3120362/" class="fa fa-linkedin-square fa-2x social-icon" target="_blank"></a>
                        <!--<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>-->
                    </div>
                </div>

                <div class="box">
                    <?php
                    $str1 = '';
                    $str2 = '';
                    $rows1 = (new \yii\db\Query())
                        ->select('name')
                        ->where(['id' => 3])
                        ->from('team')
                        ->all();
                    $rows2 = (new \yii\db\Query())
                        ->select('position')
                        ->where(['id' => 3])
                        ->from('team')
                        ->all();
                    foreach ($rows1 as $key => $val)
                    {
                        $str1 = $rows1[$key]['name'];
                    }
                    foreach ($rows2 as $key => $val)
                    {
                        $str2 = $rows2[$key]['position'];
                    }
                    ?>
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic03.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title"><?php echo $str1; ?></h3>
                        <br />
                        <p class="team-position"><?php echo $str2 ?></p>
                        <br />
                        <?/*= Html::a('<i class="fa fa-linkedin-square fa-2x social-icon"></i>',[''])*/?>
                        <a href="https://www.linkedin.com/company/3120362/" class="fa fa-linkedin-square fa-2x social-icon" target="_blank"></a>
                    </div>
                </div>

                <div class="box">
                    <?php
                    $str1 = '';
                    $str2 = '';
                    $rows1 = (new \yii\db\Query())
                        ->select('name')
                        ->where(['id' => 4])
                        ->from('team')
                        ->all();
                    $rows2 = (new \yii\db\Query())
                        ->select('position')
                        ->where(['id' => 4])
                        ->from('team')
                        ->all();
                    foreach ($rows1 as $key => $val)
                    {
                        $str1 = $rows1[$key]['name'];
                    }
                    foreach ($rows2 as $key => $val)
                    {
                        $str2 = $rows2[$key]['position'];
                    }
                    ?>
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic04.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title"><?php echo $str1 ?></h3>
                        <br />
                        <p class="team-position"><?php echo $str2 ?></p>
                        <br />
                        <a href="https://www.linkedin.com/company/3120362/" class="fa fa-linkedin-square fa-2x social-icon" target="_blank"></a>
                        <!--<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>-->
                    </div>
                </div>

                <div class="box">
                    <?php
                    $str1 = '';
                    $str2 = '';
                    $rows1 = (new \yii\db\Query())
                        ->select('name')
                        ->where(['id' => 5])
                        ->from('team')
                        ->all();
                    $rows2 = (new \yii\db\Query())
                        ->select('position')
                        ->where(['id' => 5])
                        ->from('team')
                        ->all();
                    foreach ($rows1 as $key => $val)
                    {
                        $str1 = $rows1[$key]['name'];
                    }
                    foreach ($rows2 as $key => $val)
                    {
                        $str2 = $rows2[$key]['position'];
                    }
                    ?>
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic05.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title"><?php echo $str1 ?></h3>
                        <br />
                        <p class="team-position"><?php echo $str2 ?></p>
                        <br />
                        <a href="https://www.linkedin.com/company/3120362/" class="fa fa-linkedin-square fa-2x social-icon" target="_blank"></a>
                        <!--<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>-->
                    </div>
                </div>

                <div class="box">
                    <?php
                    $str1 = '';
                    $str2 = '';
                    $rows1 = (new \yii\db\Query())
                        ->select('name')
                        ->where(['id' => 6])
                        ->from('team')
                        ->all();
                    $rows2 = (new \yii\db\Query())
                        ->select('position')
                        ->where(['id' => 6])
                        ->from('team')
                        ->all();
                    foreach ($rows1 as $key => $val)
                    {
                        $str1 = $rows1[$key]['name'];
                    }
                    foreach ($rows2 as $key => $val)
                    {
                        $str2 = $rows2[$key]['position'];
                    }
                    ?>
                    <a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?= Html::img('@web/img/team/pic06.jpg')?></a>
                    <div class="inner">
                        <h3 class="team-title"><?php echo $str1 ?></h3>
                        <br />
                        <p class="team-position"><?php echo $str2 ?></p>
                        <br />
                        <a href="https://www.linkedin.com/company/3120362/" class="fa fa-linkedin-square fa-2x social-icon" target="_blank"></a>
                        <!--<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>-->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--<h1><?/*= Html::encode($this->title) */?></h1>
    <?php /*// echo $this->render('_search', ['model' => $searchModel]); */?>

    <p>
        <?/*= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) */?>
    </p>
    --><?/*= GridView::widget([
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
    ]); */?>
</div>
