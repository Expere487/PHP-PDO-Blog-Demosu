<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <?php

          $users = $con->prepare("select * from users where username='" . $_SESSION["username"] . "'");
          $users->execute();
          foreach ($users as $user) {
            echo '
                    <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldin,</span>
                <h2>' . $user["userFirstname"] . '</h2>
              </div>
              <div class="clearfix"></div>
            </div>
                    ';
          }
          ?>

          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <?php 
                if($_SESSION["role"]==3){
                  echo'
                  <li><a href="index.php"><i class="fa fa-laptop"></i> Anasayfa</a></li>
                  <li><a href="posts.php"><i class="fa fa-rectangle-list"></i> Haberler</a></li>  
                  ';
                } 
                elseif($_SESSION["role"]==2){
                  echo'
                  <li><a href="index.php"><i class="fa fa-laptop"></i> Anasayfa</a></li>
                  <li><a href="posts.php"><i class="fa fa-rectangle-list"></i> Haberler</a></li>
                  <li><a href="category.php"><i class="fa fa-hashtag"></i> Kategoriler</a></li>  
                  ';
                }
                elseif($_SESSION["role"]==1){
                  echo'
                  
                <li><a href="index.php"><i class="fa fa-laptop"></i> Anasayfa</a></li>
                <li><a href="posts.php"><i class="fa fa-rectangle-list"></i> Haberler</a></li>
                <li><a href="category.php"><i class="fa fa-hashtag"></i> Kategoriler</a></li>
                <li class="active"><a><i class="fa fa-user"></i>Kullanıcı İşlemleri <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: block;">
                    <li><a href="users.php">Kullanıcılar</a></li>
                    <li><a href="roles.php">Roller</a></li>
                    </li>
                  </ul>
                </li>
                
                </li>
              </ul>
              </li>';
                }
                ?>

              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="function.php?islem=logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>