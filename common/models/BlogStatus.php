<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%blog_status}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $description
 * @property integer $is_deleted
 *
 * @property Blog[] $blogs
 */
class BlogStatus extends \yii\db\ActiveRecord
{
    
    const DRAFT = 'draft';
    const MODERATION = 'moderation';
    const ACTIVE = 'active';
    const HIDDEN = 'hidden';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_status}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code'], 'unique'],
            [['is_deleted'], 'integer'],
            [['code', 'description'], 'string', 'max' => 255],
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
    public function getBlogs()
    {
        return $this->hasMany(Blog::className(), ['status_id' => 'id']);
    }
}
