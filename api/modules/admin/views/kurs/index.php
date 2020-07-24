<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\KursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страница курс';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Действия над записями: (Просмотр <img src="/slider/Просмотр.png">), (Редактировать<img src="/slider/Редактировать.png">), (Удалить<img src="/slider/Удалить.png">)</p>
<div class="kurs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Headline',
            'Text:ntext',
            'Price',
            'TitleKurs',
            //'PodTitleKu',
            //'TextKu:ntext',
            //'TitleKonsult',
            //'PodTitleKo',
            //'TextKo:ntext',
            //'TitleDZ',
            //'PodTitleDZ',
            //'TextDZ:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
