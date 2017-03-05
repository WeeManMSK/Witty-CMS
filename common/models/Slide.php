<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%slide}}".
 *
 * @property int $id
 * @property string $img_url
 * @property string $thumb_text
 *
 * @property SlideText[] $slideTexts
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slide}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img_url'], 'required'],
            [['img_url'], 'string', 'max' => 1000],
            [['thumb_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_url' => 'Img Url',
            'thumb_text' => 'Thumb Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlideTexts()
    {
        return $this->hasMany(SlideText::className(), ['slide_id' => 'id']);
    }
}
