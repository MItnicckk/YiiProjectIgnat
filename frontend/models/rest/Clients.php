<?php

namespace frontend\models\rest;

use Yii;
use yii\helpers\Url;
use yii\web\Linkable;

class Clients extends \common\models\Clients implements Linkable
{
	public function fields(){
		return parent::fields();
	}


	public function getLinks()
	{
		return [
			'vasia' => Url::to(['user/view', 'id' => $this->id], true),
		];
	}
}
