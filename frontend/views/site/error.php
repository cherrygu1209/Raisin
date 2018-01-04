<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
frontend\assets\PageNotFoundAsset::register($this);
frontend\assets\AppAsset::register($this);
?>
<div class="site-error">

    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <br/>
                    <br/>
                    <h1 class="subtitle">Opps!</h1>
                    <h1 class="subtitle"><?= Html::encode($this->title) ?></h1>
                    <br />
                    <h2 class="subtitle"><?= nl2br(Html::encode($message)) ?></h2>
                    <br/>
                    <h2 class="subtitle"> Any Problems? Contact Us!</h2>
                    <br/>
                </div>

                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#" class="icoGit" title="Github"><i class="fa fa-github"></i></a>
                        </li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   <!-- <h1><?/*= Html::encode($this->title) */?></h1>

    <div class="alert alert-danger">
        <?/*= nl2br(Html::encode($message)) */?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>-->
</div>
