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
            <li role="presentation" class="active"><a href="#">Board</a></li>
            <li role="presentation"><a href="./faq.php">FAQ</a></li>
          </ul>
        </div>
        <div class="col-sm-9">
          <h3><strong>게시판글쓰기</strong></h3></br></br>
          <form class="form-horizontal" action="./update_board.php" method="get">
            <div class="form-group">
              <label for="title" class="col-sm-1 control-label">제목</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="title" name="title" placeholder="제목을 입력하세요" value="<?php echo $item[0]['title']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-sm-1 control-label">내용</label>
              <div class="col-sm-11">
                <textarea class="form-control" id="content" rows="10" name="content" placeholder="내용을 입력하세요"><?php echo $item[0]['content']?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="author" class="col-sm-1 control-label">작성자</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="author" name="author" placeholder="작성자를 입력하세요" value="<?php echo $item[0]['author']?>">
              </div>
            <div class="form-group">
              <label for="timestamp" class="col-sm-1 control-label">작성일</label>
              <div class="col-sm-11">
                <p id="timestamp"><?php echo $item[0]['timestamp']?></p>
              </div>
            <div class="form-group">
              <div class="col-sm-offset-9 col-sm-2">
                <button type="submit" class="btn btn-default">수정</button>
                <a class="btn btn-default" href="./board.php" role="button">목록</a>
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $item[0]['id']?>">
          </form>


    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="./js/scrip.js"></script> -->
  </body>
</html>
