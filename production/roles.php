<?php
include "inc/head.php";
include "inc/sidebar.php";
include "inc/nav.php";
include "inc/conn.php";
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
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>İçerikler <small>Roller</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <a href="newroles.php" style="float: right;" class="btn btn-app">
                    <i class="fa fa-plus"></i> Yeni Ekle
                  </a> 
                  </ul>
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
                      <strong>Silme Başarılı</strong>
                    </div>';
                    }
                    if ($durum == "eklendi") {
                      echo '<div class="alert alert-success alert-dismissible " role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>Kategori Başarı İle Eklendi</strong>
                    </div>';}
                    if ($durum == "Güncellendi") {
                      echo '<div class="alert alert-success alert-dismissible " role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>Kategori Başarı İle Güncellendi</strong>
                    </div>';
                    }
                     elseif ($durum == "no") {
                      echo '<div class="alert alert-danger alert-dismissible " role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>Silme Başarısız</strong>
                    </div>';
                    }
                  }
                  ?>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <p class="text-muted font-13 m-b-30">
                          Haberler
                        </p>
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Başlık</th>
                              <th>Açıklama</th>
                              <th>İşlemler</th>
                            </tr>
                          </thead>


                          <tbody>
                            <?php
                            $roles = $con->prepare("select * from role");
                            $roles->execute();
                            foreach ($roles as $role) {
                              echo '
                              <tr>
                              <td>' . $role["roleId"] . '</td>
                              <td>' . $role["roleName"] . '</td>
                              <td>' . $role["roleSummary"] . '</td>
                              <td><a href="newroles.php?update=true&id='. $role["roleId"] .'"><i style="padding-right:15px;" class="fa fa-pencil"></i></a> <a href=""><i style="padding-right:15px;" class="fa fa-eye"></i></a> <a href="function.php?islem=roleSil&id='.$role["roleId"].'"><i class="fa fa-trash"></i></a> </td>
                            </tr>';
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php include "inc/footer.php"; ?>