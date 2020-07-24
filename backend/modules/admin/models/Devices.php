<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "devices".
 *
 * @property int $id
 * @property string $devices_name
 * @property double $quantity
 */
class Devices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'devices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['devices_name', 'quantity'], 'required'],
            [['quantity'], 'number'],
            [['devices_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'devices_name' => 'Наименование оборудования',
            'quantity' => 'Количество',
        ];
    }
}
