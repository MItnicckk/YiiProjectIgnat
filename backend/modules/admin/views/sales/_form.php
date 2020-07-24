<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_menager')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

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
