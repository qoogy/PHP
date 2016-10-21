<?php

    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=test';
    $user = 'test';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('SELECT * FROM board ORDER BY id DESC LIMIT 0,5');
    /* Query 실행 */
    $stmt->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $list = $stmt->fetchAll();

    /* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
    // foreach($list as $item) {
    //     echo $member['name']." / ".$member['year']." / ".$member['address']."<br>";
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
            <li role="presentation" class="active"><a href="#">Board</a></li>
            <li role="presentation"><a href="./faq.php">FAQ</a></li>
          </ul>
        </div>
        <div class="col-sm-9">
          <section class="container-fruid">
            <ul class="nav nav-tabs" role="tablist" id="myTab">
              <li role="presentation" class="active"><a href="#home1" aria-controls="home1" role="tab" data-toggle="tab">공지</a></li>
              <li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">자유게시판</a></li>
              <li role="presentation"><a href="#boards1" aria-controls="boards" role="tab" data-toggle="tab">유머</a></li>
              <li role="presentation"><a href="#settings1" aria-controls="settings" role="tab" data-toggle="tab">잡설</a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home1">
                <div class="row">
                  <table class="table table-striped table-bordered table-hover text-center">
                    <thead>
                      <tr>
                        <th class="text-center col-md-1">No</th>
                        <th class="text-center col-md-7">제목</th>
                        <th class="text-center col-md-1">작성자</th>
                        <th class="text-center col-md-3">작성일</th>
                      </tr>
                    </thead>
                    <tdody>
                      <?php foreach($list as $item) { ?>
                      <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><a href="./board content.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a></td>
                        <td><?php echo $item['author'] ?></td>
                        <td><?php echo $item['timestamp'] ?></td>
                      </tr>
                      <?php } ?>

                    </tdody>
                  </table>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="profile1">
                <div class="row">
                  <table class="table table-striped table-bordered table-hover text-center">
                    <thead>
                      <tr>
                        <th class="text-center col-md-1">No</th>
                        <th class="text-center col-md-8">제목</th>
                        <th class="text-center col-md-1">작성자</th>
                        <th class="text-center col-md-2">작성일</th>
                      </tr>
                    </thead>
                    <tdody>
                      <tr>
                        <td>1</td>
                        <td>문의드립니다</td>
                        <td>꼴뚜기</td>
                        <td>2016-10-19</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>문의..</td>
                        <td>오징어</td>
                        <td>2016-10-15</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>안녕하세요</td>
                        <td>치타</td>
                        <td>2016-10-13</td>
                      </tr>
                    </tdody>
                  </table>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="boards1">
                <div class="row">
                  <table class="table table-striped table-bordered table-hover text-center">
                    <thead>
                      <tr>
                        <th class="text-center col-md-1">No</th>
                        <th class="text-center col-md-8">제목</th>
                        <th class="text-center col-md-1">작성자</th>
                        <th class="text-center col-md-2">작성일</th>
                      </tr>
                    </thead>
                    <tdody>
                      <tr>
                        <td>1</td>
                        <td>문의드립니다</td>
                        <td>꼴뚜기</td>
                        <td>2016-10-19</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>문의..</td>
                        <td>오징어</td>
                        <td>2016-10-15</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>안녕하세요</td>
                        <td>치타</td>
                        <td>2016-10-13</td>
                      </tr>
                    </tdody>
                  </table>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="settings1">
                <div class="row">
                  <table class="table table-striped table-bordered table-hover text-center">
                    <thead>
                      <tr>
                        <th class="text-center col-md-1">No</th>
                        <th class="text-center col-md-8">제목</th>
                        <th class="text-center col-md-1">작성자</th>
                        <th class="text-center col-md-2">작성일</th>
                      </tr>
                    </thead>
                    <tdody>
                      <tr>
                        <td>1</td>
                        <td>문의드립니다</td>
                        <td>꼴뚜기</td>
                        <td>2016-10-19</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>문의..</td>
                        <td>오징어</td>
                        <td>2016-10-15</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>안녕하세요</td>
                        <td>치타</td>
                        <td>2016-10-13</td>
                      </tr>
                    </tdody>
                  </table>
                </div>
              </div>
              <a class="btn btn-default" href="./board_write.php" role="button">글쓰기</a>
            </div>
          </section>
          <nav>
            <ul class="pagination">
              <li class="disabled">
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>

    </section>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
