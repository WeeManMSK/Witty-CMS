<?php
/**
 * @var $this \yii\web\View
 * @var $rows \yii\data\ActiveDataProvider
 */
use backend\extensions\WtHtml;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = 'Menu Item';
$this->title='Menu Item';
?>

<div class="box box-primary direct-chat direct-chat-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Menu Item</h3>
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
                        'class' => \yii\grid\DataColumn::class,
                        'attribute'=>'menu_id',
                        'value' => function($model){
                            return $model->menu->name;
                        }
                    ],
                    [
                        'class' => \yii\grid\DataColumn::class,
                        'attribute'=>'parent_id',
                        'value' => function($model){
                            return $model->parent ? $model->parent->title : "";
                        }
                    ],
                    [
                        'class' => \backend\extensions\columns\BooleanColumn::class,
                        'attribute' => 'is_visible'
                    ],
                    [
                        'class' => \backend\extensions\columns\ActionColumn::className(),
                        'template' => '{update} {delete}',
                    ],
                ]
            ]);?>
        </div>
    </div>
</div>
