<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "kurs".
 *
 * @property int $id
 * @property string $Headline
 * @property string $Text
 * @property int $Price
 * @property string $TitleKurs
 * @property string $PodTitleKu
 * @property string $TextKu
 * @property string $TitleKonsult
 * @property string $PodTitleKo
 * @property string $TextKo
 * @property string $TitleDZ
 * @property string $PodTitleDZ
 * @property string $TextDZ
 */
class Kurs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kurs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Headline', 'Text', 'Price', 'TitleKurs', 'PodTitleKu', 'TextKu', 'TitleKonsult', 'PodTitleKo', 'TextKo', 'TitleDZ', 'PodTitleDZ', 'TextDZ'], 'required'],
            [['Text', 'TextKu', 'TextKo', 'TextDZ'], 'string'],
            [['Price'], 'integer'],
            [['Headline', 'TitleKurs', 'PodTitleKu', 'TitleKonsult', 'PodTitleKo', 'TitleDZ', 'PodTitleDZ'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'Headline' => 'Вид курса',
            'Text' => 'Описание курса (кратко)',
            'Price' => 'Цена',
            'TitleKurs' => 'Заголовок №1 курса',
            'PodTitleKu' => 'Подзаголовок курса',
            'TextKu' => 'Описание курса',
            'TitleKonsult' => 'Заголовок №2 Консультация',
            'PodTitleKo' => 'Подзаголовок Консультации',
            'TextKo' => 'Описание Консультации',
            'TitleDZ' => 'Заголовок №3 Д/З',
            'PodTitleDZ' => 'Подзаголовок Д/З',
            'TextDZ' => 'Описание Д/З',
        ];
    }
}
