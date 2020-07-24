<?php 
    use yii\helpers\Html;
    use yii\bootstrap\Modal;
    use yii\widgets\ActiveForm;
    use yii\data\Pagination;
    use mihaildev\ckeditor\CKEditor;
    use mihaildev\elfinder\ELFinder;
?>

<body class = "" style = "background-image: url(/slider/fon1.png); background-repeat: repeat-y; background-attachment: fixed; background-size: 100%" >

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


  <div class="jumbotronn p-md-5 text-white rounded-v bg-dark">
    <div class="container">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Библиотека видеоуроков</h1>
      <p class="lead my-3">Крупная коллекция уроков от лучших преподавателей специально для Вас. Пройдите первые уроки бесплатно! Начните программировать всего через несколько занятий! </p>
      <p class="lead mb-0">Ознакомитесь с новой программой!</p>
    </div>
  </div>
</div>


<?php if(!empty($sites)):?>
<?php foreach ($sites as $site):?>

  <main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Видеокурс на тему:
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title"><?= $site->Title ?></h2>
        <p class="blog-post-meta"><?= $site->Data ?> by
        <a data-toggle="popover"  data-placement="top" data-content="<?= $site->AboutProfessor ?>">
                        <?= $site->Professor ?>                   
                    </a>
        </p>
        <h3><?= $site->NumberLesson ?></h3>
        <p><?= $site->InfoLesson ?></p>
        <iframe width="100%" height="380" src="<?= $site->VideoURL ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <blockquote>
          <p><strong>Домашнее задание! </strong><?= $site->Attention ?></p>
        </blockquote>
      </div><!-- /.blog-post -->


      <nav class="blog-place">
        <a class="btn btn-primary" href="/site/kurs">Другие курсы</a>
        <a class="btn btn-outline-primary" href="/site/contactmanager" >Связаться с менеджером</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-41 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Краткое содержание урока</h4>
        <p class="mb-0"><?= $site->AboutKurs ?></p>
      </div>

<? endforeach; ?>
<? endif; ?>



      <div class="p-4">
        <h4 class="font-italic">Другие уроки</h4>
              <? foreach ($query as $val):?>
                    <ol class="list-unstyled mb-0">
                      <li><a href="/admin/default/lesson?page=<?= $val['id'] ?>&per-page=1"><?= $val['Title'] ?></a></li>
                    </ol>
              <? endforeach; ?>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->





<div class="blog-post">
<!-- <?php
use yii\widgets\LinkPager;

echo LinkPager::widget([
    'pagination' => $pages,
]);?> -->
</div>
</main>
</body>