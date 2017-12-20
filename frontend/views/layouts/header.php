<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\helpers\Html;
//$imagePath = '/'.Yii::$app->user->identity->image;
?>
<header class="main-header">

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
            <li class="nav-item">
              <a class="nav-link" href="<?=Url::to(['/site/index'])?>">Whitepaper</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Url::to(['/site/about'])?>">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Url::to(['/site/index'])?>">Roadmap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=Url::to(['/site/index'])?>">FAQ</a>
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
                          <a href="#"><?= Yii::$app->user->identity->username?></a>

                          <ul class="sub-menu">
                              <li><a href="#">Profile</a></li>
                              <li><a href="#">Portfolio</a></li>
                              <li><a href="#">Campaign</a></li>
                              <li><a href="#">My Wallet</a></li>
                              <li><?= Html::a(
                                      'Logout',
                                      ['/site/logout'],
                                      ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
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