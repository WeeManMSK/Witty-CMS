<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%settings}}".
 *
 * @property integer $id
 * @property string $version
 * @property integer $is_offline
 * @property integer $theme_id
 * 
 * @property Theme theme
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%settings}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['version'], 'required'],
            [['is_offline', 'theme_id'], 'integer'],
            [['version'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'version' => 'Version',
            'is_offline' => 'Is Offline',
            'theme_id' => 'Theme',
        ];
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getTheme(){
        return $this->hasOne(Theme::className(), ['id'=>'theme_id']);
    }
}
