<?php
use backend\widgets\DetailViewRowEditor\BooleanWidget;
use backend\widgets\DetailViewRowEditor\DropdownWidget;
use backend\widgets\EditableDetailView\EditableDetailView;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Settings
 */

$this->params['breadcrumbs'][] = 'Settings';
$this->title='Settings';
?>

<?=\common\widgets\Alert::widget();?>
<div class="box box-primary direct-chat direct-chat-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Main settings</h3>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <?= EditableDetailView::widget([
                'model'=>$model,
                'attributes'=> [
                    'version',
                    'is_offline',
                    'is_development',
                    [
                            'format' => 'raw',
                            'attribute' => 'is_development',
                            'value' => BooleanWidget::widget([
                                'model' => $model,
                                'attribute' => 'is_development'
//                                'attribute' => 'theme',
//                                'listOptions' => [
//                                    'key' => 'id',
//                                    'value' => 'name',
//                                ],
//                                'value' => $model->is_development
                        ])
                    ],
                    [
                        'format' => 'raw',
                        'attribute' => 'theme_id',
                        'value' => DropdownWidget::widget([
                            'model' => $model,
                            'attribute' => 'theme',
                            'listOptions' => [
                                'key' => 'id',
                                'value' => 'name',
                            ],
                            'value' => $model->theme_id
                        ])
                    ]
                ]
            ]) ?>
        </div>
    </div>
</div>
