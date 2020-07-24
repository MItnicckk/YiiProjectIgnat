<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $klient
 * @property string $kurs
 * @property string $manager
 * @property string $time_order
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['klient', 'kurs', 'manager', 'time_order'], 'required'],
            [['time_order'], 'safe'],
            [['klient', 'kurs', 'manager'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'klient' => 'Клиент',
            'kurs' => 'Курс',
            'manager' => 'Менеджер',
            'time_order' => 'Дата заказа',
        ];
    }
}
