<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "index".
 *
 * @property int $id
 * @property string $title
 * @property string $text1
 * @property string $text2
 * @property string $minititle1
 * @property string $info1
 * @property string $Image1
 * @property string $minititle2
 * @property string $info2
 * @property string $Image2
 * @property string $minititle3
 * @property string $info3
 * @property string $Image3
 */
class Index extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'index';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info1', 'info2', 'info3'], 'string'],
            [['title', 'text1', 'text2', 'Image1', 'Image2', 'Image3'], 'string', 'max' => 200],
            [['minititle1', 'minititle2', 'minititle3'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'title' => 'Заголовок',
            'text1' => 'Информация 1',
            'text2' => 'Информация 2',
            'minititle1' => 'Заголовок изображения 1',
            'info1' => 'Информация изображения 1',
            'Image1' => 'Имя изображения 1',
            'minititle2' => 'Заголовок изображения 2',
            'info2' => 'Информация изображения 2',
            'Image2' => 'Имя изображения 2',
            'minititle3' => 'Заголовок изображения 3',
            'info3' => 'Информация изображения 3',
            'Image3' => 'Имя изображения 3',
        ];
    }
}
