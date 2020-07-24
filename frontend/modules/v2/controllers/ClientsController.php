<?php

namespace frontend\modules\v2\controllers;

use frontend\controllers\BaseApiController;
use frontend\modules\v2\models\Clients;
use Yii;

class ClientsController extends BaseApiController
{
    public $modelClass = Clients::class;

    public function actionColors(){
        return ['yes it is v2'];
    }
}
