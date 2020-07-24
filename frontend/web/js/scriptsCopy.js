

$('.popover-dismiss').popover({
  trigger: 'focus'
})

$(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})

$(function () {
  $('[data-toggle="popover"]').popover()
})