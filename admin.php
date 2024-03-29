<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="production/function.php">
            <h1>Giriş Yap</h1>
            <?php
            if (isset($_GET["durum"])) {
              $durum = $_GET["durum"];
              if ($durum == "no") {
                echo '<div class="alert alert-danger alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <strong>Giriş Başarısız Lütfen Bilgilerini Kontrol Et.</strong>
                          </div>';
              }
            }
            ?>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" name="username" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" name="pass" required="" />
            </div>
            <div>
              <button class="btn btn-primary submit">Giriş Yap</button>
            </div>
            <div>
              <div class="sex" style="display: flex; justify-content: space-around;">
                <div class="radio">
                  <label>
                    <input type="radio" class="flat" value="1" name="role"> Admin
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" class="flat" value="3" name="role"> Yazar
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" class="flat" value="2" name="role"> Editör
                  </label>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>


    </div>
  </div>
</body>

</html>