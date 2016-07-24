<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%role}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $isDeleted
 * @property integer $isActive
 *
 * @property User[] $users
 */
class Role extends \yii\db\ActiveRecord
{
    const GUEST = 1;
    const USER = 2;
    const ADMIN = 3;

    const DEFAULT_ROLE = Role::USER;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%role}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['isDeleted', 'isActive'], 'integer'],
            [['name'], 'string', 'max' => 50],
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
            'isDeleted' => 'Is Deleted',
            'isActive' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['roleId' => 'id']);
    }
}
