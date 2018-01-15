<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use frontend\models\Comment;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */
frontend\assets\AppAsset::register($this);
frontend\assets\ViewCampaignAsset::register($this);

$this->title = $model->c_title;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$user_comment = new Comment();
?>
<script type="text/javascript">
$(document).ready(function() {
$(".btn-pref .btn").on("click", function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
//    $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
<div class="container">
    <body>
    <!-- Page Header -->
     <!-- Main Content -->
    <!DOCTYPE html>
        <div class="content-container">
                <div class="row">
               <div class="col-xs-6 item-photo">
                   <p><?=Html::img(Url::to('@web/uploads/campaign_img/'.$model->c_image),['class' => 'img-fluid rounded mb-3 mb-md-0'],['alt'=>'Image'],['align'=>'left'],['width'=>'700'],['height'=>'300'])?></p> 
<!--                   <img style="max-width:100%;" src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg" />-->
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h4><?= $model->c_title?></h4>    
                    <h6 style="color:#337ab7">By <a href="#"><?= $author->c_author?></a> · <small style="color:#337ab7"> Campaigns Backed (5054 ventas)</small></h6>

                    <!-- Precios -->
                    <h6 class="title-price"><small>FUNDS RAISED</small></h6>
                    <h5 style="margin-top:0px;">U$S 399</h5>

                    <!-- Precios -->
                    <h6 class="title-price"><small>BACKERS</small></h6>
                    <h5 style="margin-top:0px;">199</h5>

                    <!-- Detalles especificos del producto -->
<!--                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>BACKERS</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>-->
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>COUNTDOWN TO END</small></h6>                    
                        <div>
                            <div class="attr2">16 hr</div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>Campaign ends on</small></h6>                    
                        <div>
                            <div>
                            <div class="attr2"><?= $model->c_end_date?></div>
                            </div>
<!--                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>-->
                        </div>
                    </div>                

                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <a href="<?= Url::to(['fund/create1']) ?>">
                        <button class="btn btn-success"><h6><span style="margin-right:20px" class="glyphicon glyphicon-gift" aria-hidden="true"></span>Fund this Campaign</h6></button>
                        </a>
<!--                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>-->
                    </div>                                        
                </div>                              

                <div class="col-xs-11">
                    <div style="width:100%;border-top:1px solid silver">

                    <!--View Campaign Navigation bar-->    
<div class="btn-pref btn-group-justified btn-group-lg" role="group" aria-label="..." >
    <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <div class="hidden-xs">Campaign</div>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
            <div class="hidden-xs">Updates</div>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="favorites" class="btn btn-primary" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
            <div class="hidden-xs">Comments</div>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            <div class="hidden-xs">Community</div>
        </button>
    </div>
</div>

    <div class="well">
  <div class="tab-content">
    <div class="tab-pane fade in" id="tab1">
      <p style="padding:5px;">
        <h4 class="title-attr">About the Campaign</h4>    
        <small><?= $model->c_description?></small>
    </p>
    <p style="padding:5px;">
        <h4 class="title-attr">Campaign Description</h4>    
        <small><?= $model->c_description_long?></small>
      </p>
    </div>
    <div class="tab-pane fade in" id="tab2">
      <h3>This is tab 2</h3>
    </div>
    <div class="tab-pane fade in active" id="tab3">
       <form action="#" method="post" role="form">
           <div class="form-group">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($user_comment, 'comment_content')->textarea(['rows' => 3]); ?>
           </div>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-info']) ?>
       </form>
        <?php ActiveForm::end(); ?>
    <div class="row">
        <?php foreach ($comments as $comment) { ?>
        <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?= $comment->comment_user_id?></b></a>
                            made a post.
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p><?= $comment->comment_content ?></p>
                </div>
        </div>
        <?php } ?>
    </div>
    </div>
    <div class="tab-pane fade in" id="tab4">
      <h3>This is tab 4</h3>
    </div>
  </div>
</div>

                        
                    </div>
                </div>		
            </div>
        </div>        
    <hr>
    </body>
</div>

