<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\helpers\Html;

frontend\assets\AppAsset::register($this);
/*$imagePath = '/'.Yii::$app->user->identity->image;*/
?>

<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
</nav>-->


<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?=Url::to(['/site/index'])?>">GoRaisin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
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
                      <li><a>
                          <p><?=Html::img(Url::to('@web/uploads/user/'.Yii::$app->user->identity->image),['class' => 'mg-circle'],['width'=>'40'],['height'=>'40'])?></p>
                          </a>
                          <ul class="sub-menu">
                              <img src="<?php /*echo Yii::$app->request->baseUrl.$imagePath*/?>" width="30" height="30" class="img-circle" align="center"/>
                              <li><?= Html::a('Profile', ['user/index'])?></li>

                              <li><?= Html::a('My Campaigns', ['campaign/portfolio'])?></li>
                              li><?= Html::a('Campaign', ['campaign/index'])?></li>
                              <li><?= Html::a('My Wallet',['wallet/index'])?></li>

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

</header>