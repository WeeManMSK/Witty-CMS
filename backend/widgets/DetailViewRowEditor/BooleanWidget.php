<?php

namespace backend\widgets\DetailViewRowEditor;


class BooleanWidget extends DetailViewRowEditorWidget
{
    private $values;
    public $value;
    public $model;
    public $attribute;

    public function init()
    {
        parent::init();

        $this->value = $this->model[$this->attribute];

        $this->values = ["0" => "No", '1'=>"Yes" ];
    }


    public function run()
    {
        return $this->render('boolean',[
            'values'=>$this->values,
            'value'=>$this->value,
            'model'=>$this->model,
            'attribute'=> $this->attribute
        ]);
    }
}