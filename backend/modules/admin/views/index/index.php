<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\IndexSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главная страница';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Действия над записями: (Просмотр <img src="/slider/Просмотр.png">), (Редактировать<img src="/slider/Редактировать.png">), (Удалить<img src="/slider/Удалить.png">)</p>
<div class="index-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать запись (не рекомендуется)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text1',
            'text2',
            'minititle1',
            //'info1:ntext',
            //'Image1',
            //'minititle2',
            //'info2:ntext',
            //'Image2',
            //'minititle3',
            //'info3:ntext',
            //'Image3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
