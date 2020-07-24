<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "instructions".
 *
 * @property int $id
 * @property string $post
 * @property string $name
 * @property string $surname
 * @property string $task
 * @property string $date
 */
class Instructions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instructions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post', 'name', 'surname', 'task', 'date'], 'required'],
            [['task'], 'string'],
            [['date'], 'safe'],
            [['post', 'name', 'surname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'post' => 'Должность',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'task' => 'Задание',
            'date' => 'Дата',
        ];
    }
}
