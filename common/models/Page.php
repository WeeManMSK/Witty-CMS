<?php

namespace common\models;

use Yii;

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
        return 'wt_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'authorId'], 'required'],
            [['body'], 'string'],
            [['authorId', 'modifiedById', 'isDeleted'], 'integer'],
            [['createdAt', 'modifiedAt'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'unique'],
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
            'body' => 'Body',
            'authorId' => 'Author ID',
            'modifiedById' => 'Modified By ID',
            'createdAt' => 'Created At',
            'modifiedAt' => 'Modified At',
            'isDeleted' => 'Is Deleted',
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
}
