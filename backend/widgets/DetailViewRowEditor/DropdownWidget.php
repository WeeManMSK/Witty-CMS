<?php

namespace backend\widgets\DetailViewRowEditor;


use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * Class DropdownWidget
 * @package backend\widgets\DetailViewRowEditor
 */
class DropdownWidget extends DetailViewRowEditorWidget
{
    public $values;
    public $key;
    public $value;
    public $listOptions;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        /** @var ActiveRecord $class */
        $class = get_class($this->model[$this->attribute]);
        $rows = $class::find()
            ->select([$this->listOptions['key'], $this->listOptions['value']])
            ->asArray()
            ->all();

        $this->values = [];

        foreach ($rows as $row){
            array_push($this->values, [
                'label'=>$row[$this->listOptions['key']],
                'url'=>$row[$this->listOptions['value']]
            ]);
        }

        $this->values = ArrayHelper::map($rows, $this->listOptions['key'], $this->listOptions['value'], 'label');
    }

    public function run()
    {
        if ($this->values === null) {
            return $this->renderError('Values for the list is not set.');
        }

        return $this->render('dropdown',[
            'values'=>$this->values,
            'value'=>$this->value,
            'model'=>$this->model
        ]);
    }

    public function renderError($message){
        return $this->render('error' ,[
            'message' => $message
        ]);
    }
}