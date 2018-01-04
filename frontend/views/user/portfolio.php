<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\sidenav\SideNav;
use yii\widgets;
use kartik\tabs\TabsX;
use frontend\models\Campaign;
use yii\widgets\ListView;
?>
<div class="site-about">
    <body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>My Portfolio</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="campaign-update">
        <div class="container">
        <h1></h1>
<?php 

    echo ListView::widget([
        'dataProvider'=>$model,
        'itemView'=>'created_campaigns_view'
    ]);
//    //$model = new Campaign();
//    echo TabsX::widget([
//    'position' => TabsX::POS_ABOVE,
//    'align' => TabsX::ALIGN_LEFT,
//    'items' => [
//        [
//            'label' => 'Created Campaigns',
//            'content' => $this->render('created_campaigns',['model' => $model]),
//            'headerOptions' => ['style'=>'font-weight:bold'],
//            'active' => true
//        ],
//        [
//            'label' => 'Supported Campaigns',
//            'content' => 'Anim pariatur cliche...',
//            'headerOptions' => ['style'=>'font-weight:bold'],
//            'options' => ['id' => 'myveryownID'],
//        ],
//        [
//            'label' => 'Dropdown',
//            'items' => [
//                 [
//                     'label' => 'DropdownA',
//                     'content' => 'DropdownA, Anim pariatur cliche...',
//                 ],
//                 [
//                     'label' => 'DropdownB',
//                     'content' => 'DropdownB, Anim pariatur cliche...',
//                 ],
//            ],
//        ],
//    ],
//]);

?>
        </div>
    </div>
    <hr>
    </body>
</div>
