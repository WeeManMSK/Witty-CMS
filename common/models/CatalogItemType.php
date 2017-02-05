<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%catalog_item_type}}".
 *
 * @property int $id
 * @property string $name
 * @property int $is_deleted
 * @property array $dropdownList
 *
 * @property CatalogItem[] $catalogItems
 */
class CatalogItemType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogItems()
    {
        return $this->hasMany(CatalogItem::className(), ['type_id' => 'id']);
    }

    /**
     * @return array
     */
    public function getDropdownList(){
        return ArrayHelper::map($this::find()->where(['is_deleted'=>0])->all(), 'id', 'name');
    }
}
