<?php include("db.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>

 <?php require('meta_link.php')?>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">E-Sports News</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Volver al inicio</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="post.html">Publicacion</a>
          </li>!-->
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/csgo.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>CS:GO</h1>
            <p>Todo lo que necesitas saber sobre la escena nacional e internacional en un solo lugar.</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <?php  
    $query = "SELECT * FROM  noticias WHERE tipo='csgo' ORDER BY idNoticia DESC LIMIT 4";
    $result_items = mysqli_query($conn, $query) or die ( "Algo ha ido mal en la consulta a la base de datos");
  ?>
  <div class="container">
    <div class="row">
    <?php  while($row = mysqli_fetch_array($result_items)) { ?>
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.php?id=<?php echo $row['idNoticia']?>">
            <?php echo '<h2 class="post-title">'.$row['titulo'].'</h2>'?>
            <?php echo '<h3 class="post-subtitle">'.$row['descripcion'].'</h3>'?>
          </a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; E-Sports News 2021</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>