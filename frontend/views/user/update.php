<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
frontend\assets\ProfileAsset::register($this);
frontend\assets\AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'Edit Profile';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

$userId = Yii::$app->user->identity->id;

?>
<div class="user-update">

    <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
    <header>
            <!-- do not know why the navigation bar dose not load by itself. Copy from 'header' -->
            <!--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="<?=Url::to(['/site/index'])?>">GoRaisin</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">


                            <!-- search box not implement yet -->
                            <!--<form class="navbar-form navbar-right" role="search">

                                <button type="button" id="btn-togglesearch" class="btn-search">
                                    <span class="fa fa-bars" aria-hidden="true"></span>
                                    <span>Toggle search</span>
                                </button>

                                <div>
                                    <input>
                                </div>

                                <button>
                                    <span></span>
                                    <span>Submit search</span>
                                </button>
                            </form>-->


                            <li class="nav-item">
                                <a class="nav-link" href="<?=Url::to(['/site/index'])?>">Whitepaper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=Url::to(['/team/index'])?>">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=Url::to(['/roadmap/index'])?>">Roadmap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=Url::to(['/faq/index'])?>">FAQ</a>
                            </li>
                            <?php if(Yii::$app->user->isGuest){ ?>
                                <li class="nav-item">
                                    <a class="btn btn-info btn-xs" href="<?=Url::to(['/campaign/create'])?>">Start a Campaign</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=Url::to(['/site/login'])?>">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=Url::to(['/site/signup'])?>">Sign up</a>
                                </li>
                            <?php } else {
                                echo'<li class="nav-item"><a class="btn btn-info btn-xs" href="'.Url::to(['/campaign/create']).'">Start a Campaign</a></li>';
                                ?>
                                <nav class="menu">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><img src="<?php
                                                $imagePath = '/'.Yii::$app->user->identity->image;
                                                echo Yii::$app->request->baseUrl.$imagePath?>" width="40" height="40" class="img-circle"/></a>

                                            <ul class="sub-menu">
                                                <!--<img src="<?php /*echo Yii::$app->request->baseUrl.$imagePath*/?>" width="30" height="30" class="img-circle" align="center"/>-->
                                                <li><?= Html::a('Profile', ['user/index'])?></li>
                                                <li><a href="#">Portfolio</a></li>
                                                <li><?= Html::a('Campaign', ['campaign/index'])?></li>
                                                <li><?= Html::a('My Wallet', ['wallet/index'])?></li>
                                                <li><?= Html::a(
                                                        'Logout',
                                                        ['/site/logout'],
                                                        ['data-method' => 'post', 'class' => 'btn btn-default btn-danger']
                                                    ) ?></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>


        <nav class="cd-stretchy-nav">
            <a class="cd-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>

            <ul>
                <li><?= Html::a(' profile &nbsp&nbsp&nbsp<i class="fa fa-user-o"></i>',['user/index'], array('class' => 'active')) ?></li>
                <li><?= Html::a(' Portfolio &nbsp&nbsp&nbsp<i class="fa fa-star-o"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Campaign &nbsp&nbsp&nbsp<i class="fa fa-shopping-bag"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Wallet &nbsp&nbsp&nbsp<i class="fa fa-envelope"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Notice &nbsp&nbsp&nbsp<i class="fa fa-envelope"></i>',['site/index']) ?></li>

            </ul>

            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </nav>
    </header>

    <main class="cd-main-content">
        <!-- main content here -->

        <div class="mainbody container-fluid">
            <div class="row">
                <div class="col-lg-offset-1 col-md-9 col-sm-9 col-xs-9">
                    <div class="panel panel-default">
                        <div style="margin: 20px auto; width: 200px; text-align: center;">
                            <h1 style="font-size:25px;">Edit Profile</h1>
                        </div>
                    </div>
                    <!--<div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="panel-title pull-left">Describe yourself in 5 words</h3>
                            <br><br>
                            <form class="form-horizontal">
                                <input type="text" class="form-control" id="keywords" placeholder="Like #movies #kittens #travel #teacher #newyork">
                            </form>
                        </div>
                    </div>-->
                    <!--<div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Your photo</h4>
                            <br><br>
                            <div align="center">
                                <div class="col-lg-12 col-md-12">
                                    <img class="img-thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload a new profile photo!</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Account Information</h4>
                            <br>

                            <?php /*$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); */?>

                            <h6>User Name</h6>
                            <?= $form->field($model, 'username')
                                ->label(false)
                                ->textInput(['maxlength' => true, 'style' => 'float:left;width:500px;']) ?>

                            <br><br>
                            <h6>Email Address</h6>
                            <?= $form->field($model, 'email')
                                ->label(false)
                                ->textInput(['maxlength' => true, 'style' => 'float:left; width: 500px;']) ?>

                            <!--<br>
                            <h6>Company Name</h6>
                            <?/*= $form->field($model, 'companyName')
                                ->label(false)
                                ->textInput(['maxlength' => true,'style' => 'float:left; width: 500px;']) */?>

                            <br><br>
                            <h6>Wallet Address</h6>
                            --><?/*= $form->field($model, 'walletAddress')
                                ->label(false)
                                ->textInput(['maxlength' => true, 'style' => 'float:left; width: 500px;']) */?>

                            <!--<br><br>
                            <div class="form-group">
                                <?/*= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) */?>
                                <?/*=
                                Html::a('Cancel',['index'],[
                                    'class' => 'btn btn-default',
                                    'id' => 'cancel',
                                ])
                                */?>
                            </div>

                            --><?php /*ActiveForm::end(); */?>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Your Image</h4>
                            <br><br>
                            <div class="col-lg-12 col-md-12" align="center">
                                <img src="<?php echo Yii::$app->request->baseUrl.$imagePath?>" width="120" height="120" class="img-circle"/>
                                <br><br>
                            </div>
                            <br><br>
                            <?= $form->field($model, 'image')
                                ->label(false)
                                ->fileInput() ?>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Extend Profile</h4>
                            <br>

                            <br>
                            <h6>Company Name</h6>
                            <?= $form->field($model, 'companyName')
                                ->label(false)
                                ->textInput(['maxlength' => true,'style' => 'float:left; width: 500px;']) ?>


                            <br><br>
                            <h6>Wallet Address</h6>
                            <?= $form->field($model, 'walletAddress')
                                ->label(false)
                                ->textInput(['maxlength' => true, 'style' => 'float:left; width: 500px;']) ?>
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        <?=
                        Html::a('Cancel',['index'],[
                            'class' => 'btn btn-default',
                            'id' => 'cancel',
                        ])
                        ?>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
                <hr>
            </div>
        </div>
</div>
</main>
</body>




<?php /*$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); */?><!--

    --><?/*= $form->field($model, 'username')
        ->label(false)
        ->textInput(['maxlength' => true, 'style' => 'float:left;width:200px;']) */?>

<?/*= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) */?><!--

    <?/*= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) */?>

    --><?/*= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) */?>

<?/*= $form->field($model, 'email')->textInput(['maxlength' => true]) */?>

<?/*= $form->field($model, 'status')->textInput() */?><!--

    <?/*= $form->field($model, 'created_at')->textInput() */?>

    --><?/*= $form->field($model, 'updated_at')->textInput() */?>

<?/*= $form->field($model, 'image')->fileInput() */?><!--

    <?/*= $form->field($model, 'companyName')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'walletAddress')->textInput(['maxlength' => true]) */?>

    <div class="form-group">
        <?/*= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) */?>
        <?/*=
        Html::a('Cancel',['index'],[
            'class' => 'btn btn-default',
            'id' => 'cancel',
        ])
        */?>
    </div>

    --><?php /*ActiveForm::end(); */?>

</div>
