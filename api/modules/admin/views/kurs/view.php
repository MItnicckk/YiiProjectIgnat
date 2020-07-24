<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Kurs */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Страница курс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kurs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Headline',
            'Text:ntext',
            'Price',
            'TitleKurs',
            'PodTitleKu',
            'TextKu:ntext',
            'TitleKonsult',
            'PodTitleKo',
            'TextKo:ntext',
            'TitleDZ',
            'PodTitleDZ',
            'TextDZ:ntext',
        ],
    ]) ?>

</div>
