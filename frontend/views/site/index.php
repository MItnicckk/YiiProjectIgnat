<?php
use yii\bootstrap\Carousel;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'АРНТТД Технотроника';
?>
<body class = "" style = "background-image: url(/slider/fon5.png); background-repeat: repeat-y; background-attachment: fixed; background-size: 100%" >

<div class="site-index">
    <div class="jumbotron">
        <? foreach ($query as $val):?>
            <img src="/slider/Main1.png" class="card-img-top-log" alt="Технотроника">
            <h2><?= $val['text1'] ?></h2>
            <h2><?= $val['text2'] ?></h2>
        <? endforeach; ?>
        <a href="/site/kurs" class="btn btn-outline-primary places">Подробнее</a>
        <a href="/site/contact" class="btn btn-primary places">Подать заявку</a>
    </div>
    <div class="body-content">
        <div class="rowp">
                        <div class="col-md-4">
                            <? foreach ($query as $val):?>
                                <hr class="featurette-divider">
                                <div class="rowp">
                                <h3><?= $val['minititle1'] ?></h3>
                            <? endforeach; ?>
                            <? foreach ($query as $val):?>
                                <img src="/CardImg/<?= $val['Image1'] ?>" class="card-img-top" alt="<?= $val['minititle1'] ?>">
                                <? endforeach; ?>
                                        <div class="cardin">
                                            <? foreach ($query as $val):?>
                                                <p class="card-text"><?= $val['info1'] ?></p>
                                            <? endforeach; ?>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <? foreach ($query as $val):?>
                                <hr class="featurette-divider">
                                <div class="rowp">
                                <h3><?= $val['minititle2'] ?></h3>
                            <? endforeach; ?>
                                        <div class="cardin">
                                            <? foreach ($query as $val):?>
                                                <p class="card-text"><?= $val['info2'] ?></p>
                                            <? endforeach; ?>
                                        </div>
                                        <? foreach ($query as $val):?>
                                        <div class="cardin">
                                            <img src="/CardImg/<?= $val['Image2'] ?>" class="card-img-top" alt="<?= $val['minititle2'] ?>">
                                        </div>
                                        <br>
                                        <? endforeach; ?>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <hr class="featurette-divider">
                            <? foreach ($query as $val):?>
                                <div class="rowp">
                                <h3><?= $val['minititle3'] ?></h3>

                            <? endforeach; ?>
                            <? foreach ($query as $val):?>
                            <img src="/CardImg/<?= $val['Image3'] ?>" class="card-img-top" alt="<?= $val['minititle3'] ?>">
                            <? endforeach; ?>
                                <div class="card-text">
                                    <? foreach ($query as $val):?>
                                        <p class="card-text"><?= $val['info3'] ?></p>
                                    <? endforeach; ?>
                                </div>
                                </div>
                        </div>
        </div>
    </div>
</div>
</body>