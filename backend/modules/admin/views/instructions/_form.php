<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Instructions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'task')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->widget(DatePicker::className(), [
                'name' => 'check_issue_date',
                'value' => date('d-M-Y', strtotime('+2 days')),
                'options' => ['placeholder' => 'Выберите дату'],
                'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
                ]
                ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
