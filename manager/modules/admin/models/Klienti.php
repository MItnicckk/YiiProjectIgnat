<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "klienti".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string $mail
 */
class Klienti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'phone', 'mail'], 'required'],
            [['name', 'surname', 'phone', 'mail'], 'string', 'max' => 255],
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
            'phone' => 'Телефон',
            'mail' => 'Почта',
        ];
    }
}
