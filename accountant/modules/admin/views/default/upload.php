<?php
use yii\widgets\ActiveForm;
?>
<a class="btn btn-primary btn-lg" href="../../admin" role="button">Назад</a>
  <p class="lead">Выберите документ или фото.</p>
  <p class="lead">Нажмите загрузить.</p>
  <p class="lead">Готово. Теперь пропишите имя файла в нужном столбце, на нужной странице.</p>
<?php if($model->image): ?>
<div class="col-md-4">
 <img src="/CardImg/<?= $model->image?>" width="370px" height="220px" class="card-img-top" alt="">
</div>
<?php endif; ?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'image')->fileInput()?>
<button>Загрузить</button>
<?php ActiveForm::end() ?>