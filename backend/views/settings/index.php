<?php
use yii\widgets\DetailView;
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Settings
 */

$this->params['breadcrumbs'][] = 'Settings';
$this->title='Settings';
?>

<div class="box box-primary direct-chat direct-chat-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Main settings</h3>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <?= DetailView::widget([
                'model'=>$model,
                'attributes'=> [
                    'version',
                    'is_offline'
                ]
            ]) ?>
        </div>
    </div>
</div>
