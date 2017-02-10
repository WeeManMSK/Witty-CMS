<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%catalog_item}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $description_full
 * @property int $type_id
 * @property int $is_deleted
 * @property array $typeDropdownList
 *
 * @property CatalogItemType $type
 * @property ItemAttributeMapping[] $attributeMapping
 * @property CatalogItemAttribute[] $possibleAttributes
 */
class CatalogItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type_id'], 'required'],
            [['description', 'description_full'], 'string'],
            [['type_id', 'is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatalogItemType::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'description' => 'Description',
            'description_full' => 'Description Full',
            'type_id' => 'Type ID',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(CatalogItemType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeMapping(){
        return $this->hasMany(ItemAttributeMapping::className(), ['item_id' => 'id']);
    }

    /**
     * @return array
     */
    public function getTypeDropdownList(){
        $model = new CatalogItemType();
        return $model->dropdownList;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getPossibleAttributes(){
        return CatalogItemAttribute::find()->all();
    }

    /**
     * @param CatalogItemAttribute $attr
     */
    public function getAttributeValue(CatalogItemAttribute $attr)
    {
        /** @var CatalogItemAttribute $attr */
        $a = array_filter($this->attributeMapping, function($e) use ($attr){
           return $e->attribute_id == $attr->id;
        });

        if (count($a) < 1) {
            return null;
        }

        /** @var ItemAttributeMapping $attributeMapping */
        $attributeMapping = array_values($a)[0];
        switch ($attr->type_id) {
            case \common\models\CatalogItemAttributeType::ATTRIBUTE_TEXT:
                return  $attributeMapping->value_text;
                break;
            case \common\models\CatalogItemAttributeType::ATTRIBUTE_BOOLEAN:
                return  $attributeMapping->value_boolean;
                break;
            default:
                return null;
        }
    }
}
