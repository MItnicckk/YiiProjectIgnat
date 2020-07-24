<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Lesson".
 *
 * @property int $id
 * @property string $Title
 * @property string $NumberLesson
 * @property string $Data
 * @property string $Professor
 * @property string $AboutProfessor
 * @property string $AboutKurs
 * @property string $InfoLesson
 * @property string $VideoURL
 * @property string $Attention
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Lesson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'NumberLesson', 'Data', 'Professor', 'AboutProfessor', 'AboutKurs', 'InfoLesson', 'VideoURL', 'Attention'], 'required'],
            [['AboutProfessor', 'AboutKurs', 'InfoLesson', 'Attention'], 'string'],
            [['Title', 'NumberLesson', 'Data', 'Professor', 'VideoURL'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'Title' => 'Название урока',
            'NumberLesson' => 'Номер урока',
            'Data' => 'Дата',
            'Professor' => 'Преподаватель',
            'AboutProfessor' => 'Информация о Преподавателе',
            'AboutKurs' => 'Информация о уроке (кратко)',
            'InfoLesson' => 'Информация о уроке',
            'VideoURL' => 'Ссылка видео',
            'Attention' => 'Домашнее задание',
        ];
    }
}
