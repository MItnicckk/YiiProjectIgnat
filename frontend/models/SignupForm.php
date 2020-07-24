<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{
 
 public $username;
 public $password;
 
    public function rules() {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле'],
            'password' => [['password'], 'string', 'max' => 40],
            ['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
            [ ['username'],'string','min' => 3],
            [ ['password'],'string','min' => 7],
        ];
    }
 
 public function attributeLabels() {
 return [
 'username' => 'Логин',
 'password' => 'Пароль',
 ];
 }


 
}