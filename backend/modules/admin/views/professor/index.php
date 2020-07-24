<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProfessorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Преподаватели';
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="lead">Для просмотра <strong>пароля</strong> нажмите <img src="/slider/Просмотр.png"></p>
<div class="professor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать нового пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'username',
            // 'password',
            //'role',
            //'auth_key',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
