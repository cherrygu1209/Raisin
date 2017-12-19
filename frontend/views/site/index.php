<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Campaign;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->registerCssFile('vendor/bootstrap/css/bootstrap.min.css');
$this->registerCssFile('vendor/font-awesome/css/font-awesome.min.css');
$this->registerCssFile('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
$this->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
$this->registerCssFile('css/clean-blog.min.css');
$this->registerJsFile('vendor/jquery/jquery.min.js');
$this->registerJsFile('vendor/jquery/jquery.min.js');
$this->registerJsFile('vendor/bootstrap/js/bootstrap.bundle.min.js');
$this->registerJsFile('js/clean-blog.min.js');
?>
<div class="site-index">

    <!-- Page Header -->
    <header class="masthead" style="background-image:url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Featured Campaigns</h1>
                        <span class="subheading">Be a backer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <table>
                <?php foreach ($model as $campaign) {?>
                <tr>
                    <td>
                        <a href="<?=Url::to(['campaign/view','id'=>$campaign->c_id])?>">
                            <p><?=Html::img(Url::to('@web/uploads/Koala.jpg'),['class' => 'img-responsive'],['alt'=>'Image'],['align'=>'left'],['width'=>'42'],['height'=>'42'])?></p>
                        </a>
                    </td>
                    <td>
                        <p><div><?=$campaign->c_title?></div></p>              
                        <p><div><?=$campaign->c_description?></div></p>    
                        <p><div><?=$campaign->c_start_date?></div></p>
                        <p><div><?=$campaign->c_end_date?></div></p>
                    </td>
                </tr>
                <?php }?>
            </table>     
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
</div> 