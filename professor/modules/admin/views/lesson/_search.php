<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\LessonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'NumberLesson') ?>

    <?= $form->field($model, 'Data') ?>

    <?= $form->field($model, 'Professor') ?>

    <?php // echo $form->field($model, 'AboutProfessor') ?>

    <?php // echo $form->field($model, 'AboutKurs') ?>

    <?php // echo $form->field($model, 'InfoLesson') ?>

    <?php // echo $form->field($model, 'VideoURL') ?>

    <?php // echo $form->field($model, 'Attention') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
