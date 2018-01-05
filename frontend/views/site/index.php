<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Campaign;
use frontend\models\Fund;
use yii\bootstrap\ActiveForm;
use yii\widgets\ListView;
use yii\bootstrap\Modal;
use common\widgets\Alert;

frontend\assets\AppAsset::register($this);
frontend\assets\CampaignAsset::register($this);

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

    <?php
    $fund = new Fund();
    ?>

    <!--Page Header -->
    <header class="masthead">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">  
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image:url('/img/picture_6.jpg')">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Kick start your idea</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('/img/picture_4.jpg')">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('/img/picture_7.jpg')">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-md-9">
                <h4>4-8% of RASIN for pledging in our platform</h4>
            </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <h1>Featured Campaigns</h1>
        <?php foreach ($model as $campaign) { ?>
            <div class="row">
                <div class="col-md-5">
                    <a href="<?= Url::to(['campaign/view', 'id' => $campaign->c_id]) ?>">
                        <p><?= Html::img(Url::to('@web/uploads/' . $campaign->c_image), ['class' => 'img-fluid rounded mb-3 mb-md-0'], ['alt' => 'Image'], ['align' => 'left'], ['width' => '700'], ['height' => '300']) ?></p>
                    </a>
                </div>
                <div class="col-md-6">
                    <h3><?= $campaign->c_title ?></h3>
                    <p><?= $campaign->c_description ?></p>
                    <div class="section" style="padding-bottom:20px;">
                        <a href="<?= Url::to(['campaign/view', 'id' => $campaign->c_id]) ?>">
                            <button class="btn btn-warning"><span style="margin-right:20px" class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View Campaign</button>
                        </a>
          <!--              <a href="<?= Url::to(['fund/create', 'id' => $campaign->c_id]) ?>">
                          <button class="btn btn-info" id="modalButton"><span style="margin-right:20px" class="glyphicon glyphicon-gift" aria-hidden="true"></span>Fund Campaign</button>
                        </a>-->
                        <a>
                            <button class="btn btn-info" href="<?= Url::to(['views/fund/create']) ?>" data-toggle="modal" data-target="#modalForm"><span style="margin-right:20px" class="glyphicon glyphicon-gift" aria-hidden="true"></span>Fund Campaign</button>
                        </a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?= $campaign->c_id ?>%">
                            <?= $campaign->c_id ?>%
                        </div>
                    </div>
                    <table style="width:100%">
                        <tr align="center">
                            <th><?= $campaign->c_id ?></th>
                            <th><?= $campaign->c_id ?></th>
                            <th><?= $campaign->c_goal ?></th>
                        </tr>
                        <tr>
                            <td>Raisins</td>
                            <td>Backers</td>
                            <td>Soft Cap</td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php } ?>
        <!--         Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
    </div>
    <hr>
</div>  

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--             Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Fund Campaign</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>

            <!--             Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                    <div class="form-group">
                        <!--                        <label for="inputName">Campaign ID</label>-->
                        <?= $form->field($fund, 'fund_c_id')->textInput() ?>
                        <!--                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>-->
                    </div>
                    <div class="form-group">
                        <!--                        <label for="inputAmount">Amount</label>-->
                        <?= $form->field($fund, 'fund_amt')->textInput() ?>
                        <!--                        <input type="text" class="form-control" id="inputAmount" placeholder="Enter the amount"/>-->
                    </div>
                    <div class="form-group">
                        <!--                        <label for="inputMessage">Note</label>-->
                        <?= $form->field($fund, 'fund_note')->textarea(['rows' => 6]) ?>
                        <!--                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>-->
                    </div>
                </form>
            </div>

            <!--             Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--                <a href="<?= Url::to(['fund/create', 'id' => $campaign->c_id]) ?>">
                    <button type="button" class="btn btn-primary submitBtn">SUBMIT</button>
                </a>-->
                <?= Html::submitButton($fund->isNewRecord ? 'Fund' : 'Update', ['class' => $fund->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src="css/bootstrap.js"></script>
<script type="text/javascript" src="/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="/functions.js"></script>
<script type="text/javascript">
    //starts the carousel
    $document.ready(function () {
        $('#image-slider').carousel();
    });
</script>

