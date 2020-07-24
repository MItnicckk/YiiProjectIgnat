<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Equipmentman */

$this->title = 'Создать нового пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Зав. оборудованием', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipmentman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
