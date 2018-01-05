<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = 'Update Campaign: ' . $model->c_id;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c_id, 'url' => ['view', 'id' => $model->c_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */
/* @var $form ActiveForm */
?>
<div class="site-about">
    <body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?=$model->c_title?></h1>
                        <span class="subheading"><?=$model->c_description?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="post-preview">
    <?php
    
    $form = ActiveForm::begin([
        'id' => 'campaign-create-form',
        'options' => ['enctype' => 'multipart/form-data']
    ]);
    
    $wizard_config = [
	'steps' => [
		'1' => [
			'title' => 'Start your campaign',
			'icon' => 'glyphicon glyphicon-user',
			'content' => $this->render('_form_1',['model' => $model]),
			'buttons' => [
				'next' => [
					'title' => 'Save and continue',
					'options' => [
						'class' => 'btn btn-info btn-next btn-lg'
					],
				 ],
			 ],
		],
		'2' => [
			'title' => 'The Story',
			'icon' => 'glyphicon glyphicon-gift',
			'content' => $this->render('_form_2',['model' => $model]),
                        'buttons' => [
				'next' => [
					'title' => 'Save and continue',
					'options' => [
						'class' => 'btn btn-info btn-next btn-lg'
					],
				 ],
                                'prev' =>[
                                    'title' => 'Previous',
					'options' => [
						'class' => 'btn btn-info btn-next btn-lg'
					],
                                    
                                ]
			 ],
                ],
                
	],
	
	//'complete_content' => "You are done!", // Optional final screen
	'start_step' => 1, // Optional, start with a specific step
];
?>

<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); 
    ActiveForm::end();
?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    </body>
</div>
