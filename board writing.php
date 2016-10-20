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
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">제목</span>
              <input type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">내용</span>
              <textarea name="name" rows="10" cols="110" placeholder="  Write"></textarea>
              </textarea>
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">작성자</span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>

          </section>
      </div>
    </section>


    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
