<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Accountant */

$this->title = 'Создать нового пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Бухгалтера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accountant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
