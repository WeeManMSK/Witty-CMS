<?php

namespace common\models;

use yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "wt_page".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property integer $authorId
 * @property integer $modifiedById
 * @property string $createdAt
 * @property string $modifiedAt
 * @property integer $isDeleted
 *
 * @property User $author
 * @property User $modifiedBy
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%page}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'authorId'], 'required'],
            [['body'], 'string'],
            [['is_visible', 'isDeleted'], 'boolean'],
            [['authorId', 'modifiedById', 'isDeleted'], 'integer'],
            [['created_At', 'updated_At'], 'safe'],
            [['title', 'url'], 'string', 'max' => 255],
            [['title', 'url'], 'unique'],
            [['authorId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['authorId' => 'id']],
            [['modifiedById'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['modifiedById' => 'id']],
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
            'url' => 'Url',
            'body' => 'Body',
            'authorId' => 'Author ID',
            'modifiedById' => 'Modified By ID',
            'createdAt' => 'Created At',
            'modifiedAt' => 'Modified At',
            'isDeleted' => 'Is Deleted',
            'is_visible' => 'Is Visible',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'authorId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'modifiedById']);
    }

    /**
     * @return array
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
