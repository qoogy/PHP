$(document).ready(function() {
  $('#submit').on('click', function() {
    $.ajax({
      url : './login.php',
      method : 'POST',
      data : {
        loginid : $('#loginid').val(),
        loginpw : $('#loginpw').val()
      }
      // datatype : 'json'
    }).done(function(response) {
      // 1.로그인 -> 회원정보
      // $('#log_info .panel-heading').html('회원정보');
      // // 2.로그인 폼 태크 -> 회원정보를 표시하는 태그
      // var userinfo = '<p>ID : ' + response.user_id +'</p>';
      // userinfo += '<p>권한 : ' + response.role + '</p>';
      // userinfo += '<a href="./logout.php" class="btn btn-danger">로그아웃</a>';
      // $('#log_info .panel-body').html(userinfo);

      // console.log(response);
    });
  });

});
