<?php

namespace common\models;

use yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%faq_line}}".
 *
 * @property integer $id
 * @property integer $faq_header_id
 * @property string $question
 * @property string $answer
 * @property integer $is_deleted
 * @property integer $order
 *
 * @property FaqHeader $header
 * @property array $faqHeaderList
 */
class FaqLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faq_header_id', 'question', 'answer'], 'required'],
            [['faq_header_id', 'is_deleted', 'order'], 'integer'],
            [['question', 'answer'], 'string', 'max' => 255],
            [['faq_header_id'], 'exist', 'skipOnError' => true, 'targetClass' => FaqHeader::className(), 'targetAttribute' => ['faq_header_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faq_header_id' => 'Faq section',
            'question' => 'Question',
            'answer' => 'Answer',
            'is_deleted' => 'Is Deleted',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHeader()
    {
        return $this->hasOne(FaqHeader::className(), ['id' => 'faq_header_id']);
    }

    /**
     * @return array
     */
    public function getFaqHeaderList(){
        return ArrayHelper::map(FaqHeader::find()->all(), 'id', 'name');
    }
}
