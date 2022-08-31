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
                      Hoşgeldiniz...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include "inc/footer.php"; ?>