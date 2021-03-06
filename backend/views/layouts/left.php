<!--<aside class="main-sidebar">

    <section class="sidebar">-->

        <!-- Sidebar user panel -->
       <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?/*= $directoryAsset */?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p align="center">Administrator</p>

                </i> Position</a>
            </div>
        </div>-->

        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <?/*= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Profile', 'icon' => 'user-circle', 'url' => ['/site/index']],
                    ['label' => 'User Management', 'icon' => 'gavel', 'url' => ['/user-backend/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Campaigns',
                        'icon' => 'rocket',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Campaign Applying', 'icon' => 'inbox', 'url' => '#',],
                            ['label' => 'Campaign Approved', 'icon' => 'check', 'url' => '#',],
                            ['label' => 'Campaign Declined', 'icon' => 'times', 'url' => '#',],
                        ],
                    ],
                ],
            ]
        ) */?><!--

    </section>

</aside>-->

<?php

use mdm\admin\components\MenuHelper;
use dmstr\widgets\Menu;
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?=
        Menu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id)
        ]);
        ?>
    </section>
</aside>
