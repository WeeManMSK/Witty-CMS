<?php
/**
 * @var $this \yii\web\View
 * @var $rows \yii\data\ActiveDataProvider
 */
use backend\extensions\WtHtml;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = 'Menu';
$this->title='Menu';
?>

<div class="box box-primary direct-chat direct-chat-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Menu</h3>
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
                    'name',
                    [
                        'class' => \backend\extensions\columns\ActionColumn::className(),
                        'template' => '{update} {delete}',
                    ],
                ]
            ]);?>
        </div>
    </div>
</div>
