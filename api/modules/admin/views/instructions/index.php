<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\InstructionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Указания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Добавить задание', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'post',
            'name',
            'surname',
            'task:ntext',
            //'date',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
