<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\index */

$this->title = 'Создать запись (не рекомендуется)';
$this->params['breadcrumbs'][] = ['label' => 'Главная страница', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
