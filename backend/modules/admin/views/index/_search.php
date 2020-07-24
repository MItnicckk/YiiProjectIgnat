<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\IndexSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'text1') ?>

    <?= $form->field($model, 'text2') ?>

    <?= $form->field($model, 'minititle1') ?>

    <?php // echo $form->field($model, 'info1') ?>

    <?php // echo $form->field($model, 'Image1') ?>

    <?php // echo $form->field($model, 'minititle2') ?>

    <?php // echo $form->field($model, 'info2') ?>

    <?php // echo $form->field($model, 'Image2') ?>

    <?php // echo $form->field($model, 'minititle3') ?>

    <?php // echo $form->field($model, 'info3') ?>

    <?php // echo $form->field($model, 'Image3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
