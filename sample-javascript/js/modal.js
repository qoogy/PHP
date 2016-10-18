$(document).ready(function() {
  var option = {
    backdrop: 'static',
    keyboard: false
  };
  $('#callModal').click(function() {
    $('#myModal').modal(option);
  });

  // Javascript 기본함수 실습
  var obj = {name : 'Nick'};
  var int = 99;
  var str = 'Hello!';

  isType(obj);
  isType(int);
  isType(str);

  function isType(target) {
    // 입력변수(매개변수)인 Target의
    // 데이터 타입을 조사해서
    // Object, String, 그 외의 3가지 경우 분리해서
    // 각각에 대해 콘솔에 로그를 찍어보세요.
    if (typeof(target) == 'object') {
    console.log('Object 입니다');
    } else if (typeof(target) == 'string') {
    console.log('String 입니다');
    } else {
    console.log('기타 데이터 타입입니다');
    }
  }
});
