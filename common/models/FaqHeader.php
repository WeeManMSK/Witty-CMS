<?php

namespace common\models;

use yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%faq_header}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $faq_id
 * @property integer $order
 *
 * @property Faq $faq
 * @property FaqLine[] $lines
 * @property array $faqList
 */
class FaqHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'faq_id'], 'required'],
            [['faq_id', 'order'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['faq_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faq::className(), 'targetAttribute' => ['faq_id' => 'id']],
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
            'faq_id' => 'Faq',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaq()
    {
        return $this->hasOne(Faq::className(), ['id' => 'faq_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLines()
    {
        return $this->hasMany(FaqLine::className(), ['faq_header_id' => 'id']);
    }

    /**
     * @return array
     */
    public function getFaqList(){
        return ArrayHelper::map(Faq::find()->all(), 'id', 'name');
    }
}
