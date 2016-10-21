<?php
  $board_id = $_GET['id'];
    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=test';
    $user = 'test';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('SELECT * FROM board WHERE id='.$board_id);
    /* Query 실행 */
    $stmt->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $item = $stmt->fetchAll();

    /* Data 조회를 위한 Query 작성 */
    $stmt_reply = $conn->prepare('SELECT * FROM reply WHERE board_id='.$board_id.' ORDER BY id DESC');
    /* Query 실행 */
    $stmt_reply->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $reply_list = $stmt_reply->fetchAll();

    /* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
    // foreach($list as $item) {
    //   echo $member['name']." / ".$member['year']." / ".$member['address']."<br>";
    // }
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>α M76-Board</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/navbar.css">

  </head>
  <body>
    <section class="container" style="padding-top: 70px">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="./index.php">Home</a></li>
            <li role="presentation"><a href="./making info.php">Making Info & Shop</a></li>
            <li role="presentation" class="active"><a href="./board.php">Board</a></li>
            <li role="presentation"><a href="./faq.php">FAQ</a></li>
          </ul>
        </div>
        <div class="col-sm-9">
          <section class="container-fruid">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo $item[0]['title']?></h3>
              </div>
              <div class="panel-body">
                <?php echo $item[0]['content']?>
              </div>
              <div class="panel-footer">
                <p><?php echo $item[0]['author']?> <?php echo $item[0]['timestamp']?>
                  <a class="btn btn-default" href="./board.php" role="button">목록</a>
                  <a class="btn btn-default" href="./board_modify.php?id=<?php echo $item[0]['id']?>">수정</a>
                  <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#smallModal">삭제</a>
                </p>
              </div>
            </div>
          </section>
          <br>
          <section class="container-fruid">
            <h3>댓글(REPLY)</h3>
            <form action="./insert_reply.php" method="get">
              <div class="row">
                <div class="col-sm-3">
                  <!-- 댓글 작성자 -->
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">작성자</span>
                    <input type="text" class="form-control" name="reply_author" placeholder="입력하세요" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="col-sm-8">
                  <!-- 댓글 작성자 -->
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">댓글</span>
                    <input type="text" class="form-control" name="reply_content" placeholder="입력하세요" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="col-sm-1">
                  <!-- 댓글 작성자 -->
                  <div class="input-group">
                    <button type="submit" class="btn btn-default" name="button">전송</button>
                  </div>
                </div>
              </div>
              <input type="hidden" name="board_id" value="<?php echo  $item[0]['id']?>">
            </form>
          </section>
          <br><br>
          <section class="container-fruid">
            <div class="row">
              <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                  <tr>
                    <td width="5%"></td>
                    <td width="10%">작성자</td>
                    <td width="60%">내용</td>
                    <td width="20%">작성일</td>
                  </tr>
                </thead>
                <tdody>
                  <?php if (count($reply_list) > 0) { ?>
                    <?php foreach($reply_list as $reply_item) { ?>
                    <tr>
                      <td><i class="fa fa-arrow-right" aria-hidden="true"></i></td>
                      <td><?php echo $reply_item['author']?></td>
                      <td class="text-left"><?php echo $reply_item['content']?></td>
                      <td><?php echo $reply_item['timestamp']?></td>
                    </tr>
                    <?php } ?>
                  <?php } else { ?>
                    <tr>
                      <td colspan="4" class="text-center">등록된 댓글이 없습니다</td>
                    </tr>
                  <?php } ?>
                </tdody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </section>



    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">삭제여부확인</h4>
          </div>
          <div class="modal-body">
            <p>정말로 삭제하시겠습니까?</p>
          </div>
          <div class="modal-footer">
            <form class="" action="./delete_board.php" method="get">
              <input type="hidden" name="id" value="<?php echo $item[0]['id']?>">
              <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
              <button type="submit" class="btn btn-primary">삭제</button>
            </form>
          </div>
        </div>
      </div>


    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="./js/script.js"></script> -->
  </body>
</html>
