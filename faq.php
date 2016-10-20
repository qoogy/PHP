<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/tabnav.css">
  </head>
  <body>
    <section class="container" style="padding-top: 70px">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="./index.php">Home</a></li>
            <li role="presentation"><a href="./making info.php">Making Info & Shop</a></li>
            <li role="presentation"><a href="./board.php">Board</a></li>
            <li role="presentation" class="active"><a href="#">FAQ</a></li>
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
                        <th class="text-center col-md-8">제목</th>
                        <th class="text-center col-md-1">작성자</th>
                        <th class="text-center col-md-2">작성일</th>
                      </tr>
                    </thead>
                    <tdody>
                      <tr>
                        <td>1</td>
                        <td><a href="./board content.php">문의드립니다</a></td>
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
            </div>
          </section>
      </div>
    </section>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
