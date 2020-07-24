<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\DevicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оборудование';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devices-index">

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
            'devices_name',
            'quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
