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
                $users = $con->prepare("select * from users where userId=?");
                $users->execute(array($id));
                foreach ($users as $user) {
                  echo '
                  <form id="" method="GET" action="function.php" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">İsim <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" readonly id="Title" value="' . $user["userId"] . '" required="Bu alanı doldurmak zorunludur" name="userId" class="form-control ">
                    </div>
                  </div>
                  
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">İsim <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" value="' . $user["userFirstname"] . '" required="Bu alanı doldurmak zorunludur" name="name" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Soyisim <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" value="' . $user["userSurname"] . '" required="Bu alanı doldurmak zorunludur" name="surname" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">E-Posta Adresi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="email" id="Title" value="' . $user["userMail"] . '" required="Bu alanı doldurmak zorunludur" name="email" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Kullanıcı Adı <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" value="' . $user["username"] . '" required="Bu alanı doldurmak zorunludur" name="username" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Parola <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="password" id="Title" value="' . $user["userPass"] . '" required="Bu alanı doldurmak zorunludur" name="pass" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Rol <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <select class="select2_single form-control" name="role" tabindex="-1">
                      '?>
                      <?php
                        $roles = $con->prepare("select * from role");
                        $roles->execute();
                        foreach ($roles as $role) {
                          echo '<option value="' . $role["roleId"] . '">' . $role["roleName"] . '</option>';
                        }
                        ?>
                        <?php echo'
                      </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                      <button class="btn btn-danger" type="button">İptal</button>
                      <button class="btn btn-primary" type="reset">Temizle</button>
                      <button type="submit" name="Uuser" class="btn btn-success">Kaydet</button>
                    </div>
                  </div>
    
                </form>
                    ';
                }
              }
            }
            else{
              echo '
              <form id="" method="GET" action="function.php" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">İsim <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="name" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Soyisim <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="surname" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">E-Posta Adresi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="Title" required="Bu alanı doldurmak zorunludur" name="email" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Kullanıcı Adı <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="username" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Parola <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="password" id="Title" required="Bu alanı doldurmak zorunludur" name="pass" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Parola <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select class="select2_single form-control" name="role" tabindex="-1">
                  '?>
                    <?php

                    $roles = $con->prepare("select * from role");
                    $roles->execute();
                    foreach ($roles as $role) {
                      echo '<option value="' . $role["roleId"] . '">' . $role["roleName"] . '</option>';
                    }
                    ?>
                    <?php echo'
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-danger" type="button">İptal</button>
                  <button class="btn btn-primary" type="reset">Temizle</button>
                  <button type="submit" name="Nuser" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form>
              ';
            }
            ?>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php include "inc/footer.php"; ?>