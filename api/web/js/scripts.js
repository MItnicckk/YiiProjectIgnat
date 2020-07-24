$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
});

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

    // После загрузки DOM-дерева (страницы)
    $(function() {
        //при нажатии на ссылку, содержащую Thumbnail
        $('a.thumbnail').click(function(e) {
            //отменить стандартное действие браузера
            e.preventDefault();
            //присвоить атрибуту scr элемента img модального окна
            //значение атрибута scr изображения, которое обёрнуто
            //вокруг элемента a, на который нажал пользователь
            $('#image-modal .modal-body img').attr('src', $(this).find('img').attr('src'));
            //открыть модальное окно
            $("#image-modal").modal('show');
        });
        //при нажатию на изображение внутри модального окна
        //закрыть его
        $('#image-modal .modal-body img').on('click', function() {
            $("#image-modal").modal('hide')
        });
    });