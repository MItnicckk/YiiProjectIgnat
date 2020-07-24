<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Kurs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kurs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Headline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'TitleKurs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PodTitleKu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TextKu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TitleKonsult')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PodTitleKo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TextKo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TitleDZ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PodTitleDZ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TextDZ')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
