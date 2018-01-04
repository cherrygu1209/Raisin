<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Campaign;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Raisin';
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
   
    <!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-md-5">
          <a href="<?=Url::to(['campaign/view','id'=>$model->c_id])?>">
              <p><?=Html::img(Url::to('@web/uploads/'.$model->c_image),['class' => 'img-fluid rounded mb-3 mb-md-0'],['alt'=>'Image'],['align'=>'left'],['width'=>'700'],['height'=>'300'])?></p>
          </a>
        </div>
        <div class="col-md-6">
          <h3><?=$model->c_title?></h3>
          <p><?=$model->c_description?></p>
          <div class="section" style="padding-bottom:20px;">
              <a href="<?=Url::to(['campaign/view','id'=>$model->c_id])?>">
                <button class="btn btn-warning"><span style="margin-right:20px" class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View Campaign</button>
              </a>
<!--                <button class="btn btn-info"><span style="margin-right:20px" class="glyphicon glyphicon-gift" aria-hidden="true"></span>Fund Campaign</button>-->
          </div>
          <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=$model->c_id?>%">
                    <?=$model->c_id?>%
                </div>
          </div>
          <table style="width:100%">
                <tr align="left">
                <th><?=$model->c_id?></th>
                <th><?=$model->c_id?></th>
                <th><?=$model->c_goal?></th>
                </tr>
                <tr align="left">
                <td>Raisins</td>
                <td>Backers</td>
                <td>Soft Cap</td>
                </tr>
          </table>
        </div>
      </div>
        <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
    </div>
    <hr>
</div> 
