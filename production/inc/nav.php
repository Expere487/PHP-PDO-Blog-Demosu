<?php include "head.php"; ?>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <?php 
                  
                    $users=$con->prepare("select * from users where username='".$_SESSION["username"]."'");
                    $users->execute();
                    foreach ($users as $user) {
                      echo '
                      <li class="nav-item dropdown open" style="padding-left: 15px;">
                      <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt="">'.$user["userFirstname"]. " ".$user["userSurname"].'
                      </a>
                      <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      
                        <a class="dropdown-item"  href="function.php?islem=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                      </div>
                    </li>
                      ';
                    }
                  ?>
                  
  
                 
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->