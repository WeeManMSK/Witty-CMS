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
 * @property string $site_name
 * @property integer $is_development
 * @property \DateTime $site_start_date
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
            [['is_offline', 'theme_id', 'is_development'], 'integer'],
            [['version', 'site_name'], 'string', 'max' => 255],
            [['site_start_date'], 'date', 'format' => 'php:Y-m-d']
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
            'site_name' => 'Site name',
            'site_start_date' => 'Site start date',
            'is_offline' => 'Site is Offline',
            'is_development' => 'Development Mode',
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
