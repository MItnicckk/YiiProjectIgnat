<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\KursSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kurs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Headline') ?>

    <?= $form->field($model, 'Text') ?>

    <?= $form->field($model, 'Price') ?>

    <?= $form->field($model, 'TitleKurs') ?>

    <?php // echo $form->field($model, 'PodTitleKu') ?>

    <?php // echo $form->field($model, 'TextKu') ?>

    <?php // echo $form->field($model, 'TitleKonsult') ?>

    <?php // echo $form->field($model, 'PodTitleKo') ?>

    <?php // echo $form->field($model, 'TextKo') ?>

    <?php // echo $form->field($model, 'TitleDZ') ?>

    <?php // echo $form->field($model, 'PodTitleDZ') ?>

    <?php // echo $form->field($model, 'TextDZ') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
