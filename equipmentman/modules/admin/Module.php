<?php

namespace app\modules\admin;


use yii\filters\AccessControl;
/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
	public function behaviors(){
			 return [
				 'access' => [
					 'class' => \yii\filters\AccessControl::className(),
					 'rules' => [

					 // [
						//  'allow' => true,
						//  'controllers' => ['admin/test'],
					 // ],
					 [
						 // 'controllers' => ['admin/default'],
						 'allow' => true,
						 'roles' => ['@'],
						 // 'actions' => ['upload'],
					 ],
					 // [
						//  'allow' => true,
						//  'controllers' => ['admin/test'],
					 // ],// доступ без регистрации для всех
					 	
					 ],
				 ],
			 ];
	}
}