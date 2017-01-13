<?php

namespace backend\widgets\EditableDetailView;

use yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

class EditableDetailView extends DetailView
{
    public function run()
    {
        $controller = Yii::$app->controller->id;
        $form = ActiveForm::begin([
            'action'=>'/'.$controller.'/save'
        ]);
        parent::run();
        $saveButton = Html::button('Save', ['class'=>'btn btn-success', 'type'=> 'submit']);
        $column = Html::tag("div", $saveButton, ['class'=>'col-md-12 text-right']);
        $row = Html::tag("div", $column, ['class'=>'row']);

        echo $row;

        echo "<div>&nbsp;</div>";

        ActiveForm::end();
    }

}