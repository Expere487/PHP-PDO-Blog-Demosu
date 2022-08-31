<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">Hakkında</h4>
                <p class="text-muted">Blog Yazılımı Demosu</p>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">İletişim</h4>
                <ul class="list-unstyled">
                  <li><a href="https://www.linkedin.com/in/onur-alp-karakaya/" class="text-white">LinkedIn</a></li>
                  <li><a href="mailto:alpkrky1@gmail.com" class="text-white">Email</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
              
              <strong>Blog Sitesi</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </header>
      
      <main>
      
       
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
              include 'production/inc/conn.php';
              $posts=$con->prepare("select * from post inner join users on post.postAuthor=users.userId inner join category on post.postCat=category.catId");
              $posts->execute();
              foreach ($posts as $post) {echo '
              <div class="col">
                <div class="card shadow-sm">      
                  <div class="card-body">
                  <h5 class="card-title">'.$post["postTitle"].' <small class="text-muted">('.$post["catName"].')</small> </h5>
                    <p class="card-text">'.$post["postSummary"].'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="postdetail.php?id='.$post["postId"].'" class="btn btn-sm btn-outline-secondary">View</a>
                      </div>
                      <small class="text-muted">'.$post["postDate"].'</small>
                      <small class="text-muted">'.$post["username"].'</small>
                    </div>
                  </div>
                </div>
              </div>';
              }?>

            </div>
          </div>
        </div>
      
      </main>
      
      <footer class="text-muted py-5">
        <div class="container">
          <p class="float-end mb-1">
            <a href="#">Back to top</a>
          </p>
          <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
          <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.2/getting-started/introduction/">getting started guide</a>.</p>
        </div>
      </footer>
      
      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

</body>

</html>