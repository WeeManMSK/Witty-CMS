<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%catalog_item_attribute}}".
 *
 * @property int $id
 * @property string $name
 * @property int $group_id
 * @property int $type_id
 * @property int $order
 *
 * @property CatalogItemAttributeGroup $group
 * @property CatalogItemAttributeType $type
 */
class CatalogItemAttribute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item_attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'group_id', 'type_id'], 'required'],
            [['group_id', 'type_id', 'order'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatalogItemAttributeGroup::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatalogItemAttributeType::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'group_id' => 'Group ID',
            'type_id' => 'Type ID',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(CatalogItemAttributeGroup::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(CatalogItemAttributeType::className(), ['id' => 'type_id']);
    }
}
