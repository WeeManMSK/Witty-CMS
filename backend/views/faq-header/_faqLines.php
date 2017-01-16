<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\models\FaqHeader
 */

use backend\extensions\WtHtml;
use backend\helper\FormHelper;
use yii\widgets\ActiveForm;
?>

<div class="box box-default">
    <div class="box-header with-border">
        <h4 class="box-title">Questions</h4>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($model->lines as $index=>$line) { ?>
                    <?= $this->render('_faqLine', ['line'=>$line, 'index'=>$index]); ?>
                <?php }?>
            </div>
            <div class="col-md-12 text-center">
                <?= \yii\helpers\Html::a('Add new question', ['/faq-line/add', 'faq_header_id'=>$model->id], ['class'=>'btn btn-default'])?>
            </div>
        </div>
    </div>
</div>