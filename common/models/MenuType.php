<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "{{%menu_type}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $is_deleted
 *
 * @property Menu[] $menus
 */
class MenuType extends \yii\db\ActiveRecord
{
    const UNDEFINED = "UNDEFINED";
    const HEADER = "HEADER";
    const FOOTER = "FOOTER";
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['is_deleted'], 'integer'],
            [['code', 'name'], 'string', 'max' => 50],
            [['code'], 'unique'],
            [['name'], 'unique'],
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
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['menu_type_id' => 'id']);
    }
}
