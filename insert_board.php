<?php
  $title = $_GET['title'];
  $content = $_GET['content'];
  $author = $_GET['author'];
  // (조건식) ? TRUE : FALSE;
  $notice = (isset($_GET['notice'])) ? $_GET['notice'] : '' ;

  if ($notice == 'on') {
    $notice = 1;
  } else {
    $notice = 0;
  }

  // echo $title.'<br>'.$content.'<br>'.$author;
  /* Database 연결 */
  $host = 'mysql:host=localhost;dbname=test';
  $user = 'test';
  $password = '1234';
  $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

  /* Data 삽입을 위한 Query 작성 */
  $sql = 'INSERT INTO board (title, content, author, notice) VALUES ("'.$title.'", "'.$content.'", "'.$author.'", "'.$notice.'")';
  // echo $sql;
  $stmt = $conn->prepare($sql);
  /* Query 실행 */
  $stmt->execute();

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
          <section class="container-fruid">
            <h3><strong>성공적으로 등록되었습니다</strong></h3>
            <a class="btn btn-default" href="./board.php" role="button">목록</a>

          </section>

    <script src=".ajax.googleapis.com/ajax/lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="./js/script.js"></script> -->
  </body>
</html>
