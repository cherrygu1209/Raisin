<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
frontend\assets\ProfileAsset::register($this);
frontend\assets\AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profile';
$this->params['breadcrumbs'][] = $this->title;
/*$this->registerCssFile('css/user/reset.css');
$this->registerCssFile('css/user/style.css');
$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
$this->registerJsFile('js/user/jquery-2.1.4.js');
$this->registerJsFile('js/user/main.js');
$this->registerJsFile('js/user/modernizr.js');*/

$userId = Yii::$app->user->identity->id;
$imagePath = '/'.Yii::$app->user->identity->image;
/*getimagesize(Yii::$app->basePath . $imagePath);*/
?>
<div class="user-index">

    <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
    <header>
        <nav class="cd-stretchy-nav">
            <a class="cd-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>

            <ul>
                <li><?= Html::a(' profile &nbsp&nbsp&nbsp<i class="fa fa-user-o"></i>',['user/index'], array('class' => 'active')) ?></li>
                <!--<li><a href="#0" class="active" class="fa fa-home"><span>Profile</span></a></li>-->
                <li><?= Html::a(' Portfolio &nbsp&nbsp&nbsp<i class="fa fa-star-o"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Campaign &nbsp&nbsp&nbsp<i class="fa fa-shopping-bag"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Wallet &nbsp&nbsp&nbsp<i class="fa fa-envelope"></i>',['site/index']) ?></li>
                <li><?= Html::a(' Notice &nbsp&nbsp&nbsp<i class="fa fa-envelope"></i>',['site/index']) ?></li>
                <!--<li><a href="#0"><span>Portfolio</span></a></li>
                <li><a href="#0"><span>Services</span></a></li>
                <li><a href="#0"><span>Store</span></a></li>
                <li><a href="#0"><span>Contact</span></a></li>-->


                <?/*= Html::a('<i class="fa fa-fw fa-user"></i> Sign Up',['site/signup'], ['class' => 'btn btn-black', 'title' => 'Sign Up']) */?>
            </ul>

            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </nav>
    </header>

    <main class="cd-main-content">
        <!-- main content here -->

        <div class="mainbody container-fluid">
            <div class="row">
                <!--<div style="padding-top:50px;"> </div>-->
                <!--<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1 class="panel-title pull-left" style="font-size:30px;"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</h1>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-offset-1 col-md-9 col-sm-9 col-xs-9">
                    <div class="panel panel-default">
                        <div style="margin: 20px auto; width: 200px; text-align: center;">
                            <h1 style="font-size:25px;">Basic Profile</h1>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Account Information</h4>
                            <br><br>
                            <form class="form-horizontal">
                                <!--<label for="First_name" style="font-size: 20px">User Name</label>-->
                                <h6>User Name</h6>
                                <br>
                                <p style="font-size: 16px"><?= yii::$app->user->identity->username?></p>
                                <hr>
                                <!--<input type="text" class="form-control" id="First_name" placeholder="John" value="John">-->
                                <br />
                                <h6>Email Address</h6>
                                <br />
                                <!--<label for="Last_name" style="font-size: 20px">Email Address</label>-->
                                <p style="font-size: 16px"><?= yii::$app->user->identity->email?></p>
                                <!--<input type="email" class="form-control" id="Last_name" placeholder="Doe" value="Doe">-->
                            </form>
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Your Image</h4>
                            <br>
                            <div align="center">
                                <div class="col-lg-12 col-md-12">
                                    <img src="<?php echo Yii::$app->request->baseUrl.$imagePath?>" width="120" height="120" class="img-circle"/>
                                </div>
                                <!--<div class="col-lg-12 col-md-12">
                                    <button class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload a new profile photo!</button>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 style="text-align: center">Extend Profile</h4>
                            <br><br>
                            <!--<p>Visibility of your extended profile:</p>-->
                            <br><br>
                            <form class="form-horizontal">
                                <!--<label for="First_name" style="font-size: 20px">User Name</label>-->
                                <h6>Company</h6>
                                <br>
                                <p style="font-size: 16px"><?= yii::$app->user->identity->companyName?></p>
                                <hr>
                                <!--<input type="text" class="form-control" id="First_name" placeholder="John" value="John">-->
                                <br />
                                <h6>Wallet Address</h6>
                                <br />
                                <!--<label for="Last_name" style="font-size: 20px">Email Address</label>-->
                                <p style="font-size: 16px"><?= yii::$app->user->identity->walletAddress?></p>
                                <!--<input type="email" class="form-control" id="Last_name" placeholder="Doe" value="Doe">-->
                            </form>
                        </div>
                    </div>
                    <?/*=
                    Html::a('Edit Profile',['update'],[
                        'class' => 'btn btn-default btn-update',
                        'id' => 'update',
                        'data-toggle' => 'modal',
                        'data-target' => '#edit-profile',
                    ])
                    */?>
                    <?= Html::a('Edit Profile',['update', 'id' => $userId], ['class' => 'btn btn-primary']) ?>
                    </div>
                    <hr>
                    <!--<div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="panel-title pull-left">Profile settings</h3>
                            <br><br>
                            <h4>Search</h4>
                            <div class="well checkbox">
                                <label class="checkbox-inline" for="profile_searchable"><input type="checkbox" name="profile[searchable]" id="profile_searchable" value="true" checked="checked">
                                    Allow for people to search for you within diaspora*
                                </label>
                            </div>
                            <br>
                            <h4>NSFW</h4>
                            <p>NSFW (“not safe for work”) is diaspora*’s self-governing community standard for content which may not be suitable to view while at work. If you plan to share such material frequently, please check this option so that everything you share will be hidden from people’s streams unless they choose to view them.</p>
                            <div class="well checkbox">
                                <label class="checkbox-inline" for="profile_nsfw"><input type="checkbox" name="profile[nsfw]" id="profile_nsfw" value="true">
                                    Mark everything I share as NSFW
                                </label>
                            </div>
                            <p class="text-danger"><strong><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> If you choose not to select this option, please add the #nsfw tag each time you share such material.</strong></p>
                            <button class="btn btn-default"><i class="fa fa-fw fa-times" aria-hidden="true"></i> Cancel</button>
                            <button class="btn btn-primary"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Update Profile</button>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </main>
    </body>




    <!--<h1><?/*= Html::encode($this->title) */?></h1>
    <?php /* echo $this->render('_search', ['model' => $searchModel]); */?>

    <p>
        <?/*= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) */?>
    </p>
    --><?/*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',*/
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'image',
            // 'companyName',
            // 'walletAddress',

            /*['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>
</div>

<?php
/*$requestUpdateUrl = Url::toRoute('update');

Modal::begin([
        'id' => 'edit-profile',
    'header' => '<h4 class="modal-title"></h4>',
]);
Modal::end();
*/?>


<?php
/*$js = <<<JS
$('.btn-update').on('click', function() {
    $('.modal-title').html('Edit Profile');
    $.get('{$requestUpdateUrl}', {id: $userId },
    function(data) {
        $('.modal-body').html(data);
      
    });
});
JS;
$this->registerJs($js);
*/?>


