<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alert alert-success">
    <?= Html::encode($this->title) ?>
</div>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->label('Имя') ?>
    <?= $form->field($model, 'password')->input('password')->label('Пароль') ?>
	<?= $form->field($model, 'remember')->checkbox([
        'value' => '1',
        'checked' => true
    ])->label('Запомнить'); ?>
    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
