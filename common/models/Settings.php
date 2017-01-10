<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%settings}}".
 *
 * @property integer $id
 * @property string $version
 * @property integer $is_offline
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
            [['is_offline'], 'integer'],
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
        ];
    }
}
