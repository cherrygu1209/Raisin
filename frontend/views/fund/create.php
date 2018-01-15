<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use frontend\models\Fund;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = 'Fund Campaign';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$fund = new Fund();
?>

  <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="fund-create">
<body>
<div class="container">
  <div class="text-left">
    <div class="form-group">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        
     <?= $form->field($model, 'fund_c_id')->radio(array(
								'label'=>'Make plegde with 20% lifetime discount',
								'labelOptions'=>array('style'=>'padding:5px;')))
								->label(''); ?>
        
     <?= $form->field($model, 'fund_c_id')->radio(array(
                                                                'label' =>'Make pledge with 50% discount of future purchases',
								'labelOptions'=>array('style'=>'padding:5px;')))
								->label(''); ?>
     <?= $form->field($model, 'fund_c_id')->radio(array(
                                                                'label' =>'Make pledge with 50% discount of future purchases',
								'labelOptions'=>array('style'=>'padding:5px;')))
								->label(''); ?>

    <?= $form->field($model, 'fund_user_id')->textInput() ?>

    <?= $form->field($model, 'fund_amt')->textInput() ?>

    <?= $form->field($model, 'fund_note')->textarea(['rows' => 6]) ?>
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
    </div>
  </div>
</div>
    </body>
</div>

<!--<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
         Modal Header 
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Fund Campaign</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
        Modal Body 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                      <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                    <div class="form-group">
                        <label for="inputName">Campaign ID</label>
                             <?= $form->field($fund, 'fund_c_id')->textInput() ?>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputAmount">Amount</label>
                        <?= $form->field($fund, 'fund_amt')->textInput() ?>
                        <input type="text" class="form-control" id="inputAmount" placeholder="Enter the amount"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Note</label>
                        <?= $form->field($fund, 'fund_note')->textarea(['rows' => 6]) ?>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>
            
        Modal Footer 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary submitBtn">SUBMIT</button>
            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>-->

    