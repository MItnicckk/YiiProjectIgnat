<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Instructions */

$this->title = 'Добавить задание';
$this->params['breadcrumbs'][] = ['label' => 'Указания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
