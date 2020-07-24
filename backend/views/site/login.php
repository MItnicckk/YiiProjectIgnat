<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<body class = "text-center" style = "background-image: url(/slider/fon2.png); background-repeat: repeat-y; background-attachment: fixed; background-size: 100%" >

<div class="site-index-signin">
<div class="container">
<div class="site-login">
    
<div class="form-signin">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]); ?>

 <img class="mb-4" src="/slider/log-signin.png" alt="" width="100" height="88">
  <h1 class="h3 font-weight-normal-signin">Введите данные</h1>
        <?= $form->field($model, 'username')->label('Логин') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ])->label('Запомнить'); ?>


        <?= Html::submitButton('Войти', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>


    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
</body>
