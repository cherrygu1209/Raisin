<?php
use yii\helpers\Url;
?>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['/site/contact'])?>">Support</a>
                    </li>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['/site/about'])?>">About</a>
                    </li>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['#'])?>">Terms of Use</a>
                    </li>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['#'])?>">Whitepaper</a>
                    </li>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['#'])?>">Team</a>
                    </li>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Webpuppies 2017</p>
          </div>
        </div>
      </div>
    </footer>