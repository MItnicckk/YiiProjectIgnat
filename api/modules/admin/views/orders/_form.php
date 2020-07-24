<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'klient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kurs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manager')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'time_order')->widget(DatePicker::className(), [
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
