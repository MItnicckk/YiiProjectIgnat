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

			<?= $form->field($model, 'username') ?>

			<?= $form->field($model, 'password')->passwordInput() ?>
			
			<div class="place-sign">
				<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-lg btn-primary btn-block']) ?>
			</div>
			<p class="font-weight-normal-sing">Уже зарегистрированы?</p>

			<a href="/site/login" class="btn btn-lg btn-outline-primary btn-block">Войти в аккаунт</a>

			<?php ActiveForm::end(); ?>

			</div>
		</div>
	</div>
</div>
</body>