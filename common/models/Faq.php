<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%faq}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property FaqHeader[] $headers
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHeaders()
    {
        return $this->hasMany(FaqHeader::className(), ['faq_id' => 'id']);
    }
}
