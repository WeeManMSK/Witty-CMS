<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%slide_text}}".
 *
 * @property int $id
 * @property int $slide_id
 * @property string $text
 * @property string $class
 * @property int $horizontal
 * @property int $vertical
 * @property string $show_transition
 * @property string $hide_transition
 * @property int $show_delay
 * @property int $hide_delay
 * @property string $layer_init
 * @property string $style
 *
 * @property Slide $slide
 */
class SlideText extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slide_text}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slide_id', 'text'], 'required'],
            [['slide_id', 'horizontal', 'vertical', 'show_delay', 'hide_delay'], 'integer'],
            [['style'], 'string'],
            [['text'], 'string', 'max' => 100],
            [['class'], 'string', 'max' => 255],
            [['show_transition', 'hide_transition', 'layer_init'], 'string', 'max' => 20],
            [['slide_id'], 'exist', 'skipOnError' => true, 'targetClass' => Slide::className(), 'targetAttribute' => ['slide_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slide_id' => 'Slide ID',
            'text' => 'Text',
            'class' => 'Class',
            'horizontal' => 'Horizontal',
            'vertical' => 'Vertical',
            'show_transition' => 'Show Transition',
            'hide_transition' => 'Hide Transition',
            'show_delay' => 'Show Delay',
            'hide_delay' => 'Hide Delay',
            'layer_init' => 'Layer Init',
            'style' => 'Style',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlide()
    {
        return $this->hasOne(Slide::className(), ['id' => 'slide_id']);
    }
}
