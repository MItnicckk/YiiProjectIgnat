<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\index */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minititle1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Image1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minititle2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Image2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minititle3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Image3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
