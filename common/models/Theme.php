<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%theme}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $version
 * @property string $author
 * @property string $url
 *
 * @property Settings[] $settings
 */
class Theme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%theme}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'version', 'author', 'url'], 'required'],
            [['code', 'name', 'author'], 'string', 'max' => 100],
            [['version'], 'string', 'max' => 20],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'version' => 'Version',
            'author' => 'Author',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettings()
    {
        return $this->hasMany(Settings::className(), ['theme_id' => 'id']);
    }
}
