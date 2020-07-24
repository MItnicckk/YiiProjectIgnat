<?php 
    use yii\helpers\Html;
    use yii\bootstrap\Modal;
    use yii\widgets\ActiveForm;
?>
<body class = "" style = "background-image: url(/slider/fon4.png); background-repeat: repeat-y; background-attachment: fixed; background-size: 100%" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    </div>

<section class="jumbotronn text-center">
      <div class="container">
      <h1 class="lead-kurs placejumbkurs">echo "Онлайн курсы";</h1>
      <p class="lead-kurs-text text-mutedkurs">Выберете курс, подходящий уровню ваших знаний в программировании или пройдите полный для укрепления старых материалов и освоении нового.</p>
      <p>
        <a href="/site/kurs" class="btn btn-primary my-2">Просмотреть курсы</a>
        <a href="/site/contact" class="btn btn-secondary-kurs my-2">Подать заявку</a>
      </p>
    </div>
  </section>

  <div class="container">

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Наши услуги</h1>
      <p class="lead">Мы учим на практике и разрабатываем программы совместно со специалистами Ваш сайт-портфолио, который вы сможете презентовать при устройстве на работу. Вы сможете быстро разобраться со всем, в ином случае на изучение всех материалов самостоятельно ушли бы недели.</p>
    </div>

<hr class="featurette-divider">
<div class="row-podkurs featurette">
      <div class="col-md-7-podkurs col-podkurs">
        <h2 class="featurette-heading-podkurs"><?= $site->TitleKurs?> <span class="text-muted"><?= $site->PodTitleKu?></span></h2>
        <p class="lead textcol"><?= $site->TextKu?></p>
      </div>
      <div class="col-md-5-podkurs">
        <svg class="bd-placeholder-img-lg bd-placeholder-img1 img-fluid-podkurs featurette-image mx-auto" width="350" height="350" focusable="false" role="img" aria-label="Placeholder: 500x500"></svg>
      </div>
    </div>
<hr class="featurette-divider">

<div class="row-podkurs featurette">
      <div class="col-podkurs col-md-7-podkurs order-md-2">
        <h2 class="featurette-heading-podkurs"><?= $site->TitleKonsult?> <span class="text-muted"><?= $site->PodTitleKo?></span></h2>
        <p class="lead textcol"><?= $site->TextKo?></p>
      </div>
      <div class="col-md-5-podkurs order-md-1">
        <svg class="bd-placeholder-img2 bd-placeholder-img-lg featurette-image img-fluid-podkurs mx-auto" width="350" height="350" focusable="false" role="img" aria-label="Placeholder: 500x500"></svg>
      </div>
    </div>

<hr class="featurette-divider">
<div class="row-podkurs featurette">
      <div class="col-podkurs col-md-7-podkurs">
        <h2 class="featurette-heading-podkurs"><?= $site->TitleDZ?> <span class="text-muted"><?= $site->PodTitleDZ?></span></h2>
        <p class="lead textcol"><?= $site->TextDZ?></p>
      </div>
      <div class="col-md-5-podkurs">
        <svg class="bd-placeholder-img3 bd-placeholder-img-lg featurette-image img-fluid-podkurs mx-auto" width="350" height="350" focusable="false" role="img" aria-label="Placeholder: 500x500"></svg>
      </div>
    </div>
<hr class="featurette-divider">

    <div class="jumbotron">
          <a href="/site/kurs" class="btn btn-outline-primary places">Другие курсы</a>
          <a href="/site/contact" class="btn btn-primary places">Подать заявку</a>
      </div>
    </div>

</body>