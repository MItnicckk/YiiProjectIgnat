<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ELFinder;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lesson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NumberLesson')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Data')->widget(DatePicker::className(), [
                'name' => 'check_issue_date',
                'value' => date('d-M-Y', strtotime('+2 days')),
                'options' => ['placeholder' => 'Выберите дату'],
                'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
                ]
                ]); ?>

    <?= $form->field($model, 'Professor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AboutProfessor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AboutKurs')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
                    ]); ?>

    <?= $form->field($model, 'InfoLesson')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
                    ]); ?>

    <?= $form->field($model, 'VideoURL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Attention')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
