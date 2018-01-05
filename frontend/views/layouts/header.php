<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\helpers\Html;

/*$imagePath = '/'.Yii::$app->user->identity->image;*/
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
                              <li><?= Html::a('My Portfolio', ['user/portfolio'])?></li>
                              <li><?= Html::a('Campaign', ['campaign/index'])?></li>
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