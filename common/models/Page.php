<?php

namespace common\models;

use yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "wt_page".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $body
 * @property integer $authorId
 * @property integer $modifiedById
 * @property string $created_at
 * @property string $updated_at
 * @property integer $isDeleted
 * @property integer $is_visible
 * @property integer $is_index
 * @property string $layout
 * @property integer $page_type_id
 *
 * @property User $author
 * @property User $modifiedBy
 * @property PageType $pageType
 * @property array $pageTypeList
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
            [['title', 'body'], 'required'],
            [['body'], 'string'],
            [['is_visible', 'isDeleted', 'is_index'], 'boolean'],
            [['authorId', 'modifiedById', 'page_type_id' ], 'integer'],
            [['created_At', 'updated_At'], 'safe'],
            [['title', 'url', 'layout'], 'string', 'max' => 255],
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
            'layout' => 'Layout',
            'authorId' => 'Author ID',
            'modifiedById' => 'Modified By ID',
            'createdAt' => 'Created At',
            'modifiedAt' => 'Modified At',
            'isDeleted' => 'Is Deleted',
            'is_visible' => 'Is Visible',
            'is_index' => 'Is Index Page',
            'page_type_id' => 'Page Type',
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
     * @return yii\db\ActiveQuery
     */
    public function getPageType(){
        return $this->hasOne(PageType::className(), ['id'=>'page_type_id']);
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

    /**
     * @return array
     */
    public function getPageTypeList(){
        return ArrayHelper::map(PageType::find()->all(), 'id', 'code');
    }
}
