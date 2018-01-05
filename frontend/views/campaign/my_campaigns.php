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
                        <h1>My Campaigns</h1>
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
?>
        </div>
                <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
    </div>
    <hr>
    </body>
</div>
