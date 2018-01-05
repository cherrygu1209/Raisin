<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Campaign;
use frontend\components\SmallBody;
/* @var $this yii\web\View */

$this->title = 'GoRaisin';
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="site-index">
    
    <!-- Page Header -->
    <header class="masthead" style="background-image:url('/img/home-bg.jpg')">
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
    
    <!-- Project One -->
    <div class="container">
<!--        <div class="line"></div>   Dividing line 
                
                <article id="article1">  The new article tag. The id is supplied so it can be scrolled into view. 
                    <div class="articleBody clear">
                    
                    	<figure>  The figure tag marks data (usually an image) that is part of the article 
	                    	<a href="http://tutorialzine.com/2010/02/photo-shoot-css-jquery/"><img src="http://tutorialzine.com/img/featured/641.jpg" width="620" height="340" /></a>
                        </figure>
                        
                        <p>In this tutorial, we are creating a photo shoot effect with our just-released PhotoShoot jQuery plug-in. With it you can convert a regular div on the page into a photo shooting stage simulating a camera-like feel.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. Duis felis dui, vulputate nec adipiscing nec, interdum vel tortor. Sed gravida, erat nec rutrum tincidunt, metus mauris imperdiet nunc, et elementum tortor nunc at eros. Donec malesuada congue molestie. Suspendisse potenti. Vestibulum cursus congue sem et feugiat. Morbi quis elit odio. </p>
                    </div>
                </article>-->
      <div class="row">
        <div class="col-md-5">
          <a href="<?=Url::to(['campaign/view','id'=>$model->c_id])?>">
              <p><?=Html::img(Url::to('@web/uploads/'.$model->c_image),['class' => 'img-fluid rounded mb-3 mb-md-0'],['alt'=>'Image'],['align'=>'left'],['width'=>'700'],['height'=>'300'])?></p>
          </a>
        </div>
        <div class="col-md-6">
          <h3><?=$model->c_title?></h3>
          <p><?= SmallBody::widget(['body' => $model->c_description, 'count'=>5])?></p>
          <div class="section" style="padding-bottom:20px;">
              <a href="<?=Url::to(['campaign/view','id'=>$model->c_id])?>">
                <button class="btn btn-warning"><span style="margin-right:20px" class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View Campaign</button>
              </a>
                <button class="btn btn-info"><span style="margin-right:20px" class="glyphicon glyphicon-gift" aria-hidden="true"></span>Fund Campaign</button>
          </div>
          <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=$model->c_id?>%">
                    <?=$model->c_id?>%
                </div>
          </div>
          <table style="width:100%">
                <tr align="center">
                <th><?=$model->c_id?></th>
                <th><?=$model->c_id?></th>
                <th><?=$model->c_goal?></th>
                </tr>
                <tr>
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
      <!-- /.row -->
    <hr>
</div>

