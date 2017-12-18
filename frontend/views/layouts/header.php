<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\helpers\Html;

/*    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();*/
    ?>
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
                echo'<li class="nav-item"><a class="nav-link" href="'.Url::to(['#']).'">My Profile</a></li>';
                echo '<li class="nav-item"><a class="nav-link">'.
                Html::beginForm(['/site/logout']);
                echo Html::submitButton('LOGOUT('.Yii::$app->user->identity->username.')', ['class'=>'btn-link logout']);
                echo Html::endForm().'</a></li>';
                
                //'<li class="nav-item"><a class="nav-link" href="'.Url::to(['/site/signup']).'">Logout('.Yii::$app->user->identity->username.')</a></li>';
            }?>
          </ul>
        </div>
      </div>
    </nav>

<!--<div id="header">
      <div id="logo">
        <div id="logo_text">
           class="logo_colour", allows you to change the colour of the text 
          <h1><a href="index.html">Go<span class="logo_colour">Raisin</span></a></h1>
          <h2>Tagline</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
           put class="selected" in the li tag for the selected page - to highlight which page you're on 
          <li><a href=<?=Url::to(['/site/index'])?>>Whitepaper</a></li>
          <li><a href=<?=Url::to(['/site/index'])?>>Team</a></li>
          <li><a href=<?=Url::to(['/site/index'])?>>Roadmap</a></li>
          <li><a href=<?=Url::to(['/site/index'])?>>FAQ</a></li>
          <li class="selected"><a href=<?=Url::to(['/campaign/create'])?>>Start a Campaign</a></li>
        </ul>
      </div>
    </div>-->