<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Faq
 */

use backend\extensions\WtHtml;
use backend\helper\FormHelper;
use yii\widgets\ActiveForm;
?>

<div class="box box-default">
    <div class="box-header with-border">
        <h4 class="box-title">Sections</h4>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($model->headers as $index=>$header) { ?>
                    <?= $this->render('_faqHeader', ['header'=>$header, 'index'=>$index]); ?>
                <?php }?>
            </div>
            <div class="col-md-12 text-center">
                <?= \yii\helpers\Html::a('Add new section', ['/faq-header/add', 'faq_id'=>$model->id], ['class'=>'btn btn-default btn-sm'])?>
            </div>
        </div>
    </div>
</div>