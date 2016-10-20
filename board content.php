<?php
  $id = $_GET['id'];
    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=test';
    $user = 'test';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('SELECT * FROM board WHERE id='.$id);
    /* Query 실행 */
    $stmt->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $item = $stmt->fetchAll();

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
    <title>Bootstrap</title>
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
                  <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#smallModal">삭제</a>
                </p>
              </div>
            </div>

          </section>
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
            <button type="button" class="btn btn-default" data-dismiss="modal">예</button>
            <button type="button" class="btn btn-primary">아니오</button>
          </div>
        </div>
      </div>


    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
