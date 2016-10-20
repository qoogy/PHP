$(document).ready(function() {
  $('#loadingBtn').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    setTimeout(function() {
      $btn.button('reset');
    }, 2000);
  });
});

$('#checkboxes label.btn.active').removeClass('btn-primary').addClass('btn-success');
// 체크박스 버튼그룹 클릭이벤트 코드
$('#checkboxes label.btn').on('click', function() {
  if($(this).hasClass('active')) {
    $(this).removeClass('btn-success').addClass('btn-primary');
  } else {
    $(this).removeClass('btn-primary').addClass('btn-success');
  }
});

$('#radios label.btn.active').removeClass('btn-primary').addClass('btn-success');
// 라디오 버튼그룹 클릭이벤트 코드
$('#radios label.btn').on('click', function() {
  // 이미 기존에 활성화 된 버턴의 클래스를 원래대로 만들어준다
  $('#radios label.btn.btn-success').removeClass('btn-success').addClass('btn-primary');
  // 선택한 버튼의 색 클래스를 활성화 색 클래스로 바꿔준다
  $(this).removeClass('btn-primary').addClass('btn-success');
});
