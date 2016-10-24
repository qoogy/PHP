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
          <h3><strong>게시판글쓰기</strong></h3></br></br>
          <form class="form-horizontal" action="./insert_board.php" method="get">
            <div class="form-group">
              <label for="title" class="col-sm-1 control-label">제목</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="title" name="title" placeholder="제목을 입력하세요">
              </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-sm-1 control-label">내용</label>
              <div class="col-sm-11">
                <textarea class="form-control" id="content" rows="10" name="content" placeholder="내용을 입력하세요"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="author" class="col-sm-1 control-label">작성자</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="author" name="author" placeholder="작성자를 입력하세요">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="notice" name="notice"> 공지사항
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-11 col-sm-0">
                <button type="submit" class="btn btn-default">등록</button>
              </div>
            </div>
          </form>


    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="./js/scrip.js"></script> -->
  </body>
</html>
