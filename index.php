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
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="post.html">Publicacion</a>
          </li>!-->
          <li class="nav-item">
            <a class="nav-link" href="csgo.php">CSGO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fornite.php">FORTNITE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lol.php">LOL</a>
          </li>
          <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
              <li><a class="dropdown-item" href="#">CSGO</a></li>
              <li><a class="dropdown-item" href="#">LOL</a></li>
              <li><a class="dropdown-item" href="#">FORNITE</a></li>
            </ul>
          </li>
          -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <?php  
    $query = "SELECT * FROM  noticias ORDER BY idNoticia DESC LIMIT 1";
    $result_items = mysqli_query($conn, $query) or die ( "Algo ha ido mal en la consulta a la base de datos");
  ?>
  <header class="masthead" style="background-image: url('img/backgroundimage.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
      <?php  while($row = mysqli_fetch_array($result_items)) { ?>
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <!--<h1>Historico 9z</h1>-->
            <?php echo '<h1>'.$row['titulo'].'</h1>'?>
            <!--<span class="subheading">A Blog Theme by Start Bootstrap</span>-->
            <!--<p>El equipo Argentino de CS:GO logro derrotar a Vitality por el Showdown de la Blast Premier.</p>-->
            <?php echo '<p>'.$row['descripcion'].'</p>'?>
            <!--<a class="btn btn-primary" href="post.html" role="button">Ver nota completa</a>-->
            <a href="post.php?id=<?php echo $row['idNoticia']?>" class="btn btn-primary">Ver nota completa</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <?php  
    $query = "SELECT * FROM  noticias ORDER BY idNoticia DESC LIMIT 4";
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
          <!--<p class="post-meta">Posted by
            <a href="#">Pablo Reyes</a>
            on September 24, 2019
          </p>-->
        </div>
        
        
        <!-- Pager 
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Publicaciones anteriores &rarr;</a>
        </div>-->
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
              <a href="https://twitter.com/GeroSchmidtt" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/geronimo.schmidt.731/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/geroschmidt" target="_blank">
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