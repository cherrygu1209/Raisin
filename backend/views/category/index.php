<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <p>
        <?/*= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) */?>
        <h3 style="color: black">Create</h3>
        <?=
            Html::a('Create Category',['create'],[
                    'class' => 'btn btn-success',
                    'id' => 'create',
                    'data-toggle' => 'modal',
                    'data-target' => '#operate-modal',
            ])
        ?>
    </p>
    <hr style=" height:1px;border:none;border-top:1px solid #185598;" />


    <h3 style="color: black">Search</h3>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <hr style=" height:1px;border:none;border-top:1px solid #185598;" />


    <h3 style="color: black">Category List</h3>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'options' => ['id' => 'category'],
        'columns' => [
            /*['class' => 'yii\grid\SerialColumn'],*/

            'id',
            'name',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'header' => 'Operation',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a("Category Update",$url, [
                            'title' => 'Category Update',
                            'class' => 'btn btn-default btn-update',
                            'data-toggle' => 'modal',
                            'data-target' => '#operate-modal',
                        ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('delete',$url,[
                         'title' => 'Delete',
                         'class' => 'btn btn-default',
                         'data' => [
                             'confirm' => 'Confirm Delete?',
                             'method' => 'post',
                         ]
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>
</div>

<?php
use yii\bootstrap\Modal;
Modal::begin([
    'id' => 'operate-modal',
    'header' => '<h4 class="modal-title"></h4>',
]);
Modal::end();
?>

<?php
use yii\helpers\Url;

$requestCreateUrl = Url::toRoute('create');
$js = <<<JS
$('#create').on('click',function() {
    $('.modal-title').html('Create Category');
    $.get('{$requestCreateUrl}',
        function(data){
            $('.modal-body').html(data);
            }
        );
})
JS;
$this->registerJs($js);
?>

<?php
$requestUpdateUrl = Url::toRoute('update');
$js = <<<JS
    $('.btn-update').on('click',function () {
        $('.modal-title').html('Category Information');
        $.get('{$requestUpdateUrl}',{id: $(this).closest('tr').data('key')},
            function(data) {
              $('.modal-body').html(data);
            }
        );
    });
JS;
$this->registerJs($js);
?>





