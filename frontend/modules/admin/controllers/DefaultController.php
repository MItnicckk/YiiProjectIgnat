<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\data\Pagination;
use app\models\Lesson;


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
    
    public function actionLesson()
             {

        $query = (new \yii\db\Query())
            ->select(['id', 'Title', 'NumberLesson'])
            ->from('Lesson')
            ->all();

        $query1 = lesson::find()->select('id, Title, NumberLesson, Data, Professor, AboutProfessor, AboutKurs, InfoLesson, VideoURL, Attention');
        //->orderBy('id DESC') добавить после "TextDZ')" - сортрировка
        $pages = new Pagination(['totalCount' => $query1->count(), 'pageSize' => 1]);
        $sites = $query1->offset($pages->offset)->limit($pages->limit)->all();

        $params = [
            'header' => 'Вернуться',
            'query1' => $query1,
            'query' => $query,
            'sites' => $sites,
            'pages' => $pages,
        ];
          return $this->render('lesson', compact('sites', 'pages', 'query'));
         }
}
