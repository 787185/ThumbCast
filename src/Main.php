<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--enables responsiveness of the site o any device-->
    <link rel="stylesheet" href="stylessheet.css">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <title>ThumCast</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">
  
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">  <div class="col-md-6">  <img src="../Resources/Slide1.png" alt="Image 1" width="100%" height="200">
        </div>
        <div class="col-md-6">
          <img src="../Resources/Slide2.png" alt="Image 2" width="100%" height="200">
        </div>
      </div>
    </div>
    <div class="carousel-item ">
    <div class="row">
      <div class="col-md-6">
        <img src="../Resources/Slide2.png" alt="Image 4" width="100%" height="200">
      </div>
      <div class="col-md-6">
        <img src="../Resources/Slide3.png" alt="Image 5" width="100%" height="200">
      </div>
    
    </div>
    </div>
    <div class="carousel-item ">
      <div class="row">
      <div class="col-md-6">
        <img src="../Resources/Slide3.png" alt="Image 4" width="100%" height="200">
      </div>
      <div class="col-md-6">
        <img src="../Resources/Slide4.png" alt="Image 5" width="100%" height="200">
      </div>
    
    </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container" style="float: left;">
      <h2>
        Features
      </h2>
    </div>
    <div class="container">
      <div class="container">
        
      </div>        
      <div class="container">
        
      </div>
      <div class="container">
        
      </div>
      <div class="container">
        
      </div>
    </div>
  </div>
  <footer>

  </footer>
</body>
</html>