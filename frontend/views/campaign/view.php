<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = $model->c_title;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script type="text/javascript">
   $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })                     
        }) 
</script>

<div class="site-about">
    <body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?=$model->c_title?></h1>
                        <span class="subheading">By <?=$model->c_author?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <!DOCTYPE html>
        <div class="container">
        	<div class="row">
               <div class="col-xs-6 item-photo">
                   <p><?=Html::img(Url::to('@web/uploads/campaign_img/'.$model->c_image),['class' => 'img-fluid rounded mb-3 mb-md-0'],['alt'=>'Image'],['align'=>'left'],['width'=>'700'],['height'=>'300'])?></p> 
<!--                   <img style="max-width:100%;" src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg" />-->
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3><?= $model->c_title?></h3>    
                    <h5 style="color:#337ab7">By <a href="#"><?= $model->c_author?></a> · <small style="color:#337ab7"> Campaigns Backed (5054 ventas)</small></h5>
        
                    <!-- Precios -->
                    <h5 class="title-price"><small>FUNDS RAISED</small></h5>
                    <h4 style="margin-top:0px;">U$S 399</h4>
                    
                    <!-- Precios -->
                    <h5 class="title-price"><small>BACKERS</small></h5>
                    <h4 style="margin-top:0px;">199</h4>
        
                    <!-- Detalles especificos del producto -->
<!--                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>BACKERS</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>-->
                    <div class="section" style="padding-bottom:5px;">
                        <h5 class="title-attr"><small>COUNTDOWN TO END</small></h5>                    
                        <div>
                            <div class="attr2">16 hr</div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h5 class="title-attr"><small>Campaign ends on</small></h5>                    
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
                        <button class="btn btn-success"><h5><span style="margin-right:20px" class="glyphicon glyphicon-gift" aria-hidden="true"></span>Fund this Campaign</h5></button>
<!--                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>-->
                    </div>                                        
                </div>                              
        
                <div class="col-xs-11">
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <h3 class="title-attr">About the campaign</h3>    
                            <small><?= $model->c_description?></small>
                        </p>
                        <p style="padding:15px;">
                            <h3 class="title-attr">Campaign Description</h3>    
                            <small><?= $model->c_description_long?></small>
                        </p>
                    </div>
                </div>		
            </div>
        </div>        
<!--    <div class="container">
        <div class="campaign-view">
        <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->c_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->c_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'c_title',
            [
                'label'=>'Campaign Image',
                'attribute'=> 'c_image',
                'format' => 'html',
                'value'=>function($model){
                    return yii\bootstrap\Html::img('@web/uploads/'.$model->c_image,['width'=>'150']);
                }
            ],
            'c_description',
            'c_start_date',
            'c_end_date',
            'c_goal',
//            'c_id',
            'c_video:ntext',
            'c_description_long:ntext',
//            'c_author',
//            'c_created_at',
            'c_display_name',
            'c_email:email',
            'c_location',
            'c_biography:ntext',
            'c_social_profile',
        ],
    ]) ?>

        </div>
    </div>-->
    <hr>
    </body>
</div>

<script type="text/javascript">
   $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
</script>
