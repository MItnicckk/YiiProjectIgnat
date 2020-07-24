<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\data\Pagination;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\LoginForm;
use app\models\User;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\Kurs;
use app\models\LikeForm;
// use frontend\models\ContactForm;
use app\models\ContactForm;
use app\models\ContactFormManager;


class SiteController extends Controller
{
        public function behaviors()
        {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['logout', 'signup'],
                    'rules' => [
                        [
                            'actions' => ['signup'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        [
                            'actions' => ['logout'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ];
        }

        public function actions()
        {
            return [
                'error' => [
                    'class' => 'yii\web\ErrorAction',
                ],
                'captcha' => [
                    'class' => 'yii\captcha\CaptchaAction',
                    'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                ],
            ];
        }


        public function actionIndex()
        {
                $query = (new \yii\db\Query())
                ->select(['id', 'title', 'text1', 'text2', 'minititle1', 'info1', 'Image1', 'minititle2', 'info2', 'Image2', 'minititle3', 'info3', 'Image3'])
                ->from('index')
                ->all();


            $params=[
                'header' => 'Вернуться',
                'query' => $query,
                'model' => $likeForm,
                'posts' => $posts,
                'pages' => $pages,
            ];

            return $this->render('index', $params);
        }


        public function actionLogin()
        {
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }

            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            }

            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }


        public function actionLogout()
        {
            Yii::$app->user->logout();

            return $this->goHome();
        }


        public function actionContact()
        {
            $model = new ContactForm();
            if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('contactFormSubmitted');

                return $this->refresh();
            }
            return $this->render('contact', [
                'model' => $model,
            ]);
        }


            public function actionContactmanager()
        {
            $model = new ContactFormManager();
            if ($model->load(Yii::$app->request->post()) && $model->contactmanager(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('contactFormSubmitted');

                return $this->refresh();
            }
            return $this->render('contactmanager', [
                'model' => $model,
            ]);
        }


         public function actionKurs()
         {

        $likeForm = new LikeForm;
        $str = new LikeForm;


        $query1 = kurs::find()->select('id, Headline, Text, Price, TitleKurs, PodTitleKu, TextKu, TitleKonsult, PodTitleKo, TextKo, TitleDZ, PodTitleDZ, TextDZ');
        //->orderBy('id DESC') добавить после "TextDZ')" - сортрировка
        $pages = new Pagination(['totalCount' => $query1->count(), 'pageSize' => 3]);
        $sites = $query1->offset($pages->offset)->limit($pages->limit)->all();

        $params = [
            'header' => 'Вернуться',
            'query1' => $query1,
            'model' => $likeForm,
            'sites' => $sites,
            'pages' => $pages,
        ];
          return $this->render('kurs', compact('sites', 'pages'));
         }


        public function actionView(){
            $id = \Yii::$app->request->get('id'); // получить id 
            $site = kurs::findOne($id); // переменная post, но класс price
            if(empty($site)) throw new \yii\web\HttpException(404, 'Такой страницы нет...'); // если нет такого id, то 404
            return $this->render('view', compact('site'));   // обязательно в конце переменная
        }


        public function actionAbout()
        {
            return $this->render('about');
        }


        public function actionSignup(){
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }

            $model = new SignupForm();
            if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new User();
            $user->username = $model->username;
            $user->password = \Yii::$app->security->generatePasswordHash($model->password);
            $user->auth_key = $model->username;

            if($user->save()){
                return $this->goHome();
            }
        }

        return $this->render('signup', compact('model'));
        }


}