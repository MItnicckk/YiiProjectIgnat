<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/slider/log12.png" class="lognav" width="40px" height="35px" alt="Логотип">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index'], 'visible' => Yii::$app->user->getIdentity('User') ? true : false],
        ['label' => 'Редактировать страницы', 'url' => ['/admin/default'], 'visible' => Yii::$app->user->getIdentity('User') ? true : false],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Администратор (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn-out btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        
        <h5 class="pull-left"><img src="/slider/log1.png" class="logmain" width="40px" height="35px" alt="Логотип">&copy; Технотроника <?= date('Y') ?>
                
            <a href="#">
                <img src="/slider/VK.png" class="vk" width="36px" height="36px" alt="VK">
            </a>
        </h5>

        <h5 class="pull-right">Почта:<a href="mailto:ano.texnotronika@yandex.ru">texnotronika@ymail.ru</a>
        <br>
                    Телефон:<a href="tel:+7(918)626-27-12">+7(800)555-35-35</a></h5>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
