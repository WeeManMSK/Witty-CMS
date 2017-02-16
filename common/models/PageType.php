<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%page_type}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $description
 * @property integer $is_deleted
 *
 * @property Page[] $pages
 */
class PageType extends \yii\db\ActiveRecord
{
    const CATALOG = 1;
    const FAQ = 2;
    const BLOG = 3;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%page_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['is_deleted'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'description' => 'Description',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['page_type_id' => 'id']);
    }
}
