<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

if($exception->statusCode == 404){$this->title = 'Ошибка (#404)';}
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Что-то пошло не так. Возможно, вы ошиблись, когда набирали адрес в строке браузера. Если вы уверенны, что адрес набран верно, то вероятнее всего, страница была удалена.
    </p>
    <p>
        Вы можете перейти на <a href="/site/index">главную страницу</a>!
    </p>

</div>
