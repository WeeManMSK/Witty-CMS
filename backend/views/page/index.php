<?php
/**
 * @var $this \yii\web\View
 * @var $rows \yii\data\ActiveDataProvider
 */
use backend\extensions\columns\ActionColumn;
use backend\extensions\columns\BooleanColumn;
use backend\extensions\WtHtml;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = 'Page';
$this->title='Page';
?>

<div class="box box-primary direct-chat direct-chat-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Pages</h3>
        <div class="box-tools pull-right">
            <?= WtHtml::aAsButton('Add', ['create'], ['iconClass'=>'fa fa-plus'] )?>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <?= GridView::widget([
                'dataProvider' => $rows,
                'columns' => [
                    'id',
                    'title',
                    [
                        'class' => BooleanColumn::className(),
                        'attribute' => 'is_visible'
                    ],
                    'created_at:datetime',
                    'updated_at:datetime',
                    [
                        'class' => ActionColumn::className(),
                        'template' => '{update} {delete}'
                    ],
                ]
            ]);?>
        </div>
    </div>
</div>


