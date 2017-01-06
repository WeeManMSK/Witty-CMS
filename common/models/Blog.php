<?php

namespace common\models;

use yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $created_by
 * @property integer $status_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $createdBy
 * @property BlogStatus $status
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'created_by', 'status_id'], 'required'],
            [['content'], 'string'],
            [['created_by', 'status_id'], 'integer'],
            [['is_visible'], 'boolean'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['image_url'], 'string', 'max' => 1000],
            [['subtitle', 'url'], 'string', 'max' => 100],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'url' => 'Url',
            'image_url' => 'Image Url',
            'is_visible' => 'Is Visible',
            'content' => 'Content',
            'created_by' => 'Created By',
            'status_id' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(BlogStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className()
            ]
        ];
    }
}
