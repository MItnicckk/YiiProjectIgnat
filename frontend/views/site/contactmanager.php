<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<body class = "" style = "background-image: url(/slider/fon3.png); background-repeat: repeat-y; background-attachment: fixed; background-size: 100%" >

<div class="site-index-contact">
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

         <div class="alert alert-success">
            Спасибо, что выбрали нас. В течении дня с Вами свяжется наш менеджер.
        </div>


        <p>
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

<div class="featurette">
      <div class="col-md-7">
        <div class="site-index-form">
          <h2>Остались какие-то вопросы?</h2>
           <p>Отправьте сообщение менеджеру, и он ответит в ближайшее время.</p>

           <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>
                    
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primar btn-lgr btn-block', 'name' => 'contact-button']) ?>

                <?php ActiveForm::end(); ?>
              </div>
      </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="/CardImg/Laptopp5.png" class="card-img-top" alt="">
                    </div>
                </div>
    </div>

        <?php endif; ?>
</div>
</div>
</body>