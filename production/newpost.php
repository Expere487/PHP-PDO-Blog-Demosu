<?php
include "inc/head.php";
include "inc/sidebar.php";
include "inc/nav.php";
?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>BLOG</h3>
      </div>


    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Blog Yazılımı</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php
            if (isset($_GET["durum"])) {
              $durum = $_GET["durum"];
              if ($durum == "ok") {
                echo '<div class="alert alert-success alert-dismissible " role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>Giriş Başarılı. Hoşgeldin</strong>
                    </div>';
              } elseif ($durum == "no") {
                echo '<div class="alert alert-danger alert-dismissible " role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>Silme Başarısız</strong>
                    </div>';
              }
            }
            ?>
            <?php
            if (isset($_GET["update"])) {
              if ($_GET["update"] == "true") {
                $id = $_GET["id"];
                $posts = $con->prepare("select * from post where postId=?");
                $posts->execute(array($id));
                foreach ($posts as $post) {
                  echo '
                  <form id="" method="GET" action="function.php" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Başlık <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="Title" readonly required="Bu alanı doldurmak zorunludur" value="' . $post["postId"] . '" name="postId" class="form-control ">
                  </div>
                </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Başlık <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" value="' . $post["postTitle"] . '" name="title" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="summary">Özet <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <textarea class="form-control" value="" style="width:100%" name="summary" id="summary">' . $post["postSummary"] . '</textarea>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label for="content" class="col-form-label col-md-3 col-sm-3 label-align">İçerik</label>
                    <div class="col-md-6 col-sm-6 ">
                      <textarea style="width:100%;" value="" class="form-control" name="content" id="" cols="30" rows="10">' . $post["postContent"] . '</textarea>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="author">Yazar <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                    ';
            ?>
                  <?php

                  $authors = $con->prepare("select * from users where username=?");
                  $authors->bindParam(1, $_SESSION["username"]);
                  $authors->execute();
                  foreach ($authors as $author) {
                    echo '<input type="text" id="author" name="author" readonly  value="' . $author["userFirstname"] . ' ' . $author["userSurname"] . " " . '(' . $author["username"] . ')" required="required" class="form-control ">
                        <input style="display:none" type="text" class="form-control " name="authorId"  value="' . $author["userId"] . '">';
                  }
                  ?>
                  <?php echo '
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Kategori <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select class="select2_single form-control" name="category" tabindex="-1">
                      '; ?>
                  <?php

                  $cats = $con->prepare("select * from category");
                  $cats->execute();
                  foreach ($cats as $cat) {
                    echo '<option value="' . $cat["catId"] . '">' . $cat["catName"] . '</option>';
                  }
                  ?>
              <?php echo '
                      </select>
                    </div>
    
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Yayınlanma Tarihi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="date" id="first-name" name="publish" class="form-control ">
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                      <button class="btn btn-danger" type="button">İptal</button>
                      <button class="btn btn-primary" type="reset">Temizle</button>
                      <button type="submit" name="Upost" class="btn btn-success">Kaydet</button>
                    </div>
                  </div>
    
                </form>
                  ';
                }
              }
            } else {
              echo '
              <form id="" method="GET" action="function.php" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="title" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="summary">Özet <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea class="form-control" style="width:100%" name="summary" id="summary"></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label for="content" class="col-form-label col-md-3 col-sm-3 label-align">İçerik</label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea style="width:100%;" class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="author">Yazar <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">'; ?>
              <?php

              $authors = $con->prepare("select * from users where username=?");
              $authors->bindParam(1, $_SESSION["username"]);
              $authors->execute();
              foreach ($authors as $author) {
                echo '<input type="text" id="author" name="author" readonly  value="' . $author["userFirstname"] . ' ' . $author["userSurname"] . " " . '(' . $author["username"] . ')" required="required" class="form-control ">
                    <input style="display:none" type="text" class="form-control " name="authorId"  value="' . $author["userId"] . '">';
              }
              ?>
              <?php echo ' 
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Kategori <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select class="select2_single form-control" name="category" tabindex="-1">
                  '; ?>
              <?php

              $cats = $con->prepare("select * from category");
              $cats->execute();
              foreach ($cats as $cat) {
                echo '<option value="' . $cat["catId"] . '">' . $cat["catName"] . '</option>';
              }
              ?>
            <?php echo '
                  </select>
                </div>

              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Yayınlanma Tarihi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="date" id="first-name" name="publish" class="form-control ">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-danger" type="button">İptal</button>
                  <button class="btn btn-primary" type="reset">Temizle</button>
                  <button type="submit" name="Npost" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form>
              ';
            }
            ?>
            <!-- <form id="" method="GET" action="function.php" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="title" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="summary">Özet <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea class="form-control" style="width:100%" name="summary" id="summary"></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label for="content" class="col-form-label col-md-3 col-sm-3 label-align">İçerik</label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea style="width:100%;" class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="author">Yazar <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <?php

                  $authors = $con->prepare("select * from users where username=?");
                  $authors->bindParam(1, $_SESSION["username"]);
                  $authors->execute();
                  foreach ($authors as $author) {
                    echo '<input type="text" id="author" name="author" readonly  value="' . $author["userFirstname"] . ' ' . $author["userSurname"] . " " . '(' . $author["username"] . ')" required="required" class="form-control ">
                    <input style="display:none" type="text" class="form-control " name="authorId"  value="' . $author["userId"] . '">';
                  }
                  ?> 
                  
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Kategori <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select class="select2_single form-control" name="category" tabindex="-1">
                    <?php

                    $cats = $con->prepare("select * from category");
                    $cats->execute();
                    foreach ($cats as $cat) {
                      echo '<option value="' . $cat["catId"] . '">' . $cat["catName"] . '</option>';
                    }
                    ?> 
                  </select>
                </div>

              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Yayınlanma Tarihi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="date" id="first-name" name="publish" class="form-control ">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-danger" type="button">İptal</button>
                  <button class="btn btn-primary" type="reset">Temizle</button>
                  <button type="submit" name="Npost" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php include "inc/footer.php"; ?>