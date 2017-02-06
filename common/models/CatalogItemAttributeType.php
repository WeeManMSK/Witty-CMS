<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%catalog_item_attribute_type}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property CatalogItemAttribute[] $catalogItemAttributes
 */
class CatalogItemAttributeType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item_attribute_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogItemAttributes()
    {
        return $this->hasMany(CatalogItemAttribute::className(), ['type_id' => 'id']);
    }
}
