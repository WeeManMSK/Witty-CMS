<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%catalog_item_image}}".
 *
 * @property int $id
 * @property int $item_id
 * @property string $title
 * @property string $image_url
 * @property int $order
 *
 * @property CatalogItem $item
 */
class CatalogItemImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%catalog_item_image}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'title', 'image_url'], 'required'],
            [['item_id', 'order'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['image_url'], 'string', 'max' => 400],
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
            'title' => 'Title',
            'image_url' => 'Image Url',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(CatalogItem::className(), ['id' => 'item_id']);
    }
}
