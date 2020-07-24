<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property int $id
 * @property string $id_menager
 * @property string $id_order
 * @property string $price
 * @property string $date
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menager', 'id_order', 'price', 'date'], 'required'],
            [['id_menager', 'id_order', 'price', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'id_menager' => 'Менеджер',
            'id_order' => 'Заказ',
            'price' => 'Цена',
            'date' => 'Дата',
        ];
    }
}
