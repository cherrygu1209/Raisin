<?php

use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use drsdre\wizardwidget\WizardWidget;

use yii\helpers\Html;
use frontend\models\Campaign;
use frontend\models\CampaignRewards;
use \frontend\models\CampaignStory;
use frontend\models\CampaignYourself;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = 'Create Campaign';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

          $model = new Campaign(); 
//          $modelReward = new CampaignRewards(); 
//          $modelStory = new CampaignStory();
//          $modelYourself = new CampaignYourself();
?>
<div class="campaign-create">

   <!-- <h1>
   -->
   
<!-- Page Header -->
    <header class="masthead" style="background-image:url('img/start_campaign.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Start a Campaign</h1>
              <span class="subheading">Add picture and details of the campaign.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
   
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
    <?php
    
    $form = ActiveForm::begin();
    
    $wizard_config = [
	'id' => 'stepwizard',
	'steps' => [
		1 => [
			'title' => 'Start your campaign',
			'icon' => 'glyphicon glyphicon-user',
			'content' => $this->render('_form_1',[ 'form' => $form,
                            'model' => $model,
                            ]),
			'buttons' => [
				'next' => [
					'title' => 'Save and continue',
                                        'type'=>'submit',
					'options' => [
						'class' => 'btn btn-info btn-next btn-lg'
					],
				 ],
			 ],
		],
		2 => [
			'title' => 'The Story',
			'icon' => 'glyphicon glyphicon-gift',
			'content' => $this->render('_form_2',[ 'form' => $form,
                            'model' => $model,
                            ]),
                        'buttons' => [
                            'save' => [
                            'html' => Html::submitButton('Create',
                                    [
                                        'class' => 'btn btn-info btn-next btn-lg',
                                        'id' => 'wizard_step3_final',
                                        'name' => 'submit',
                                        'value' => 'save-final'
                                    ]
                                ),
                            ],
                        ],
                ],                   
	],
	
	'complete_content' => "You are done!", // Optional final screen
	//'start_step' => 2, // Optional, start with a specific step
];
?>

<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); 
    ActiveForm::end();
?>
          </div>
        </div>
      </div>
    </div>
   
</div>
