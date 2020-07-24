<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionUser()
    {
        return $this->render('user');
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
