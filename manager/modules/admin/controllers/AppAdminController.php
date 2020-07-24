<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use app\models\UploadImage;

/**
 * Default controller for the `admin` module
 */
class AppAdminController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function behaviors(){
		return
		[
		  'access' => [
		           'class' => AccessControl::ClassName(),
		                   'rules' => [
						                [  
								           'allow' => true,
									       'roles' => ['@']
								        ]
								      ]
			           ] 
	    ];
	}

	public function actionUpload(){
         $model = new UploadImage();
         if(Yii::$app->request->isPost){
             $model->image = UploadedFile::getInstance($model, 'image');
             $model->upload();
             return $this->render('upload', ['model' => $model]);
         }
         return $this->render('upload', ['model' => $model]);
    }
		               
	public function actionLogin()
    {
		if (!Yii::$app->user->isGuest){
			return $this->goHome();
		}
		
		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()){
			return $this->goBack();
		}
		
		$model->password = '';
		return $this->render('login', [
		                     'model' => $model,
							 ]);
	}
}