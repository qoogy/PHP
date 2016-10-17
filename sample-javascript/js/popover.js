$(document).ready(function() {
  $('button').popover();
  $('a#example').popover();

  var option = {
    title: 'Hello!',
    content: 'Hi, Popover!',
    placement: 'top',
    trigger: 'hover',
    delay: {
      show: 1000,
      hide: 1000
    }
  };

  $('a#withOptions').popover(option);

  // $('a#example').popover('destroy');

  $('a#withOptions').on('show.bs.popover', function() {
    console.log('popover가 나타나도록 실행했습니다');
  })
  $('a#withOptions').on('shown.bs.popover', function() {
    console.log('popover가 나타나도록 실행을 완료했습니다');
  })
  $('a#withOptions').on('hide.bs.popover', function() {
    console.log('popover가 사라지도록 실행했습니다');
  })
  $('a#withOptions').on('hidden.bs.popover', function() {
    console.log('popover가 사라지도록 실행을 완료했습니다');
  })
});
