<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactFormManager extends Model
{
    public $name;
    public $email;
    public $subject = null;
    public $body;
    public $curs;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
         return [

            // name, email, subject and body are required
            ['name', 'required', 'message' => 'Поле «Ваше имя» обязательно для заполнения'],
            ['body', 'required'],
            // ['body', 'required'],

            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly


            ['email', 'required', 'when' => function ($model) {
                return $model->subject == '';
            }, 'whenClient' => 'function (attribute, value) {
               return $("#subject").val() == "";
             }', 'message' => 'Заполните строку "Адрес электронной почты" или "Телефон"'],

            ['subject', 'required', 'when' => function ($model) {
                return $model->email == '';
            }, 'whenClient' => 'function (attribute, value) {
              return $("#email").val() == "";
             }', 'message' => 'Заполните строку "Адрес электронной почты" или "Телефон"']

        ];
    }

    /**
     * @return array customized attribute labels
     */
 public function attributeLabels()
    {
        return [
            //капча 
            // 'verifyCode' => 'Подтвердите код',
            //капча 
            'name' => 'Ваше имя',
            'email' => 'Адрес электронной почты',
            'subject' => 'Телефон',
            'body' => 'Сообщение',
            'curs' => 'Выберете курс',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contactmanager($email)
    {           
                $htmlBody = '<p><b>Имя</b>: ' . ($this->name) . '</p>';
                $htmlBody .= '<p><b>Почта</b>: ' . ($this->email) . '</p>';
                $htmlBody .= '<p><b>Телефон</b>: ' . ($this->subject) . '</p>';
                $htmlBody .= '<p><b>Сообщение</b>: ' . ($this->body) . '</p>';
                // $htmlBody .= '<p><b>Курс</b>: ' . ($this->curs) . '</p>';



        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('MrTangi@yandex.ru')
                ->setFrom(['MrTangi@yandex.ru' => $this->email])
                ->setHtmlBody($htmlBody)
                ->send();

            return true;
        }
        return false;
    }
}