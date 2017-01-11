<?php

namespace backend\widgets;


use yii\helpers\Html;
use yii\widgets\DetailView;

class EditableDetailView extends DetailView
{
    public function run()
    {
        parent::run();
        $saveButton = Html::a('Save',['save'], ['class'=>'btn btn-success']);
        $column = Html::tag("div", $saveButton, ['class'=>'col-md-12 text-right']);
        $row = Html::tag("div", $column, ['class'=>'row']);

        echo $row;

        echo "<div>&nbsp;</div>";
    }

}