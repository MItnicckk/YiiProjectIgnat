<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "accountant".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $username
 * @property string $password
 * @property string $role
 * @property string $auth_key
 */
class Accountant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accountant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'username', 'password'], 'required'],
            [['name', 'surname', 'username', 'password', 'role', 'auth_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'username' => 'Логин',
            'password' => 'Пароль',
            // 'role' => 'Role',
            // 'auth_key' => 'Auth Key',
        ];
    }
}
