<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%catalog_item_attribute_mapping}}".
 *
 * @property int $id
 * @property int $item_id
 * @property int $attribute_id
 * @property string $value_text
 * @property int $value_boolean
 *
 * @property CatalogItemAttribute $attribute0
 * @property CatalogItem $item
 */
class ItemAttributeMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item_attribute_mapping}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'attribute_id'], 'required'],
            [['item_id', 'attribute_id', 'value_boolean'], 'integer'],
            [['value_text'], 'string'],
            [['attribute_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatalogItemAttribute::className(), 'targetAttribute' => ['attribute_id' => 'id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatalogItem::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'attribute_id' => 'Attribute ID',
            'value_text' => 'Value Text',
            'value_boolean' => 'Value Boolean',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttribute0()
    {
        return $this->hasOne(CatalogItemAttribute::className(), ['id' => 'attribute_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(CatalogItem::className(), ['id' => 'item_id']);
    }
}
