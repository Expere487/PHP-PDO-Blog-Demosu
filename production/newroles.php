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
                $roles = $con->prepare("select * from role where roleId=?");
                $roles->execute(array($id));
                foreach ($roles as $role) {
                  echo '
                  <form id="" method="GET" action="function.php" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Rol ID <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" readonly value="' . $role["roleId"] . '" name="roleId" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Rol Adı <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" value="' . $role["roleName"] . '" name="roleName" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Rol Açıklaması <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" value="' . $role["roleSummary"] . '" name="roleSum" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                      <button class="btn btn-danger" type="button">İptal</button>
                      <button class="btn btn-primary" type="reset">Temizle</button>
                      <button type="submit" name="Urole" class="btn btn-success">Kaydet</button>
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
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Rol Adı <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="roleName" class="form-control ">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Rol Açıklaması <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="Title" required="Bu alanı doldurmak zorunludur" name="roleSum" class="form-control ">
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                    <button class="btn btn-danger" type="button">İptal</button>
                    <button class="btn btn-primary" type="reset">Temizle</button>
                    <button type="submit" name="Nrole" class="btn btn-success">Kaydet</button>
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