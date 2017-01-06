<?php

namespace backend\extensions\columns;

use yii\base\Model;
use yii\data\DataProviderInterface;
use yii\grid\Column;

class BooleanColumn extends Column
{
    public $attribute;
    public $label;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        if ($this->attribute === null){
            return "Error. Attribute is undefined";
        }
        return $model[$this->attribute] ? "Yes" : "No   ";
    }

    /**
     * @inheritdoc
     */
    protected function getHeaderCellLabel()
    {
        if ($this->label !== null) {
            return $this->label;
        }

        $model = $this->getModel($this->grid->dataProvider);

        return $model === null ? "" : $model->attributeLabels()[$this->attribute];
    }

    /**
     * @param DataProviderInterface $provider
     * @return Model
     */
    private function getModel(DataProviderInterface $provider) {
        $models = $provider->getModels();

        return count($models)>0 ? $models[0] : null;
    }
}