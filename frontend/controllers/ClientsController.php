<?php

namespace frontend\controllers;

use frontend\models\rest\Clients;
use Yii;
use yii\helpers\ArrayHelper;

class ClientsController extends BaseApiController
{
	public $modelClass = Clients::class;

	public function actions()
	{
		$actions = parent::actions();
		unset($actions['delete']);
		return $actions;
	}

	public function actionName(){
		return ArrayHelper::map(Clients::find()->select('name')->groupBy('name')->all(),'name','name');
	}
	//вывод в виде массива удобный 
}
