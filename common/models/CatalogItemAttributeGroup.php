<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%catalog_item_attribute_group}}".
 *
 * @property int $id
 * @property string $name
 * @property int $order
 *
 * @property CatalogItemAttribute[] $catalogItemAttributes
 */
class CatalogItemAttributeGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item_attribute_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'order'], 'required'],
            [['order'], 'integer'],
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
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogItemAttributes()
    {
        return $this->hasMany(CatalogItemAttribute::className(), ['group_id' => 'id']);
    }
}
