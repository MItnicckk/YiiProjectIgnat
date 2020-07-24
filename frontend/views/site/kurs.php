<?php 
    use yii\helpers\Html;
    use yii\bootstrap\Modal;
    use yii\widgets\ActiveForm;
    use yii\data\Pagination;
    use mihaildev\ckeditor\CKEditor;
    use mihaildev\elfinder\ELFinder;
?>
<body class = "" style = "background-image: url(/slider/fon2.png); background-repeat: repeat-y; background-attachment: fixed; background-size: 100%" >

<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script>
$(function(){
  $('a[href^="#"]').on('click', function(event) {
    // отменяем стандартное действие
    event.preventDefault();
    
    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    /*
    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
    * dn - определяем положение блока на странице
    */
    
    $('html, body').animate({scrollTop: dn}, 1000);
    
    /*
    * 1000 скорость перехода в миллисекундах
    */
  });
});
</script>

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
<script type="text/javascript">
 $(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
</script>

    </div>

<section class="jumbotronn text-center">
      <div class="container">
      <h1 class="lead-kurs placejumbkurs">echo "Онлайн курсы";</h1>
      <p class="lead-kurs-text text-mutedkurs">Выберете курс, подходящий уровню ваших знаний в программировании или пройдите полный для укрепления старых материалов и освоении нового.</p>
      <p>
        <a href="#kurs" class="btn btn-primary my-2">Просмотреть курсы</a>
        <a href="/site/contact" class="btn btn-secondary-kurs my-2">Подать заявку</a>
      </p>
    </div>
  </section>

  <div class="container">

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Наши услуги</h1>
      <p class="lead">Мы учим на практике и разрабатываем программы совместно со специалистами Ваш сайт-портфолио, который вы сможете презентовать при устройстве на работу. Вы сможете быстро разобраться со всем, в ином случае на изучение всех материалов самостоятельно ушли бы недели.</p>
    </div>

        <div class="row">
              <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                            <div class="cardin mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                      <img src="/slider/S2.png" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-88">
                                        <div class="card-body">
                                          <h3 class="card-title-kurs">Онлайн вебинары</h3>
                                          <p class="card-text">Вы получите целый комплекс онлайн занятий и заданий. Вы сможете в любой удобный момент связаться с Вашим преподавателем для обсуждения урока или проверки домашнего задания.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              </div>

              <div class="col-sm-6">
                  <div class="card">
                      <div class="card-body">
                          <div class="cardin mb-3" style="max-width: 540px;">
                              <div class="row no-gutters">
                                <div class="col-md-88">
                                      <div class="card-bodyr">
                                        <h3 class="card-title-kurs">Экскурсии в крупные web-компании</h3>
                                        <p class="card-text">Мы предоставляем возможность своим студентам побывать в офисе крупных web-компаний, пообщаться с профессионалами и почувствовать себя настоящим специалистом.</p>
                                        </div>
                                </div>
                                    <div class="col-md-4">
                                      <img src="/slider/S3.png" class="card-imgr" alt="...">
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
</div>

<div class="container" id="kurs">
     <div class="cardin-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Получить консультацию</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">FREE <small class="text-muted"></small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                      <li>Заполните форму, подайте заявку и получите бесплатную онлайн консультацию</li>
                  </ul>
                      <a type="button" class="btn btn-lgr btn-block btn-primary" href="/site/contact">Подать заявку</a>
                </div>
          </div>

          <?php if(!empty($sites)):?>
          <?php foreach ($sites as $site):?>
              <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal"><?= $site->Headline ?></h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"><?= $site->Price ?><small class="text-muted"> $</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                          <li><?= $site->Text ?></li>
                      </ul>
                      <a type="button" class="btn btn-lgr btn-block btn-outline-primary"  href="<?= yii\helpers\Url::to(['site/view', 'id' => $site->id])?>">Подробнее</a>
                    </div>
              </div>
          <? endforeach; ?>
          <? endif; ?>
     </div>


<?php
use yii\widgets\LinkPager;

echo LinkPager::widget([
    'pagination' => $pages,
]);?>

</div>
</body>