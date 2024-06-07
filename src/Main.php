


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="stylessheet.css">
  </head>
  <body> <!--class="p-3 m-0 border-0 bd-example m-0 border-0"-->
    <!-- navigation bar -->
    <div class="container-fluid p-2">
      <div class="container p-2">
        <div class="container-fluid">
          <div class="container-fluid align-items-center">
            <nav class="navbar bg-body-tertiary align-items-center rounded-pill">
              <div class="container">
                <!-- <a class="navbar-brand" href="#">
                  <img src="../Resources/LOGO1.png" class="p-2 bd-highlight" alt="Bootstrap" style="width:60px;">
                </a> -->
                  <span>
                    <div class="container d-flex justify-content-center">
                      <ul class="nav nav-pills" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="Main.php">Home</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#about">About</a>
                        </li>
                        <li class="nav-item">                               
                          <a class="nav-link" data-toggle="tab" href="login.php">LogIn</a>
                        </li>
                      </ul>
                    </div>
                  </span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  <!-- The Login page as a Modal
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">LogIn</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="../Resources/login 2.png" alt="Image 4">
            </div>
            <div class="col-md-6" id="column2" >
              <div id="form">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                  </div>
                  <p class="fs-6 fst-italic">Not yet registerred?<a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" href=""> Register</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger">Clear Form</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div> -->

<!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button> -->
    <!-- carousel codes -->
    <div class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container d-flex justify-content-between">
            <img src="../Resources/Slide1.png" class="d-block w-50 p-2 bd-highlight" alt="...">
            <img src="../Resources/Slide2.png" class="d-block w-50 p-2 bd-highlight" alt="...">
          </div>
        </div>
        <div class="carousel-item">
          <div class="container d-flex justify-content-between">
            <img src="../Resources/Slide3.png" class="d-block w-50 p-2 bd-highlight" alt="...">
            <img src="../Resources/Slide4.png" class="d-block w-50 p-2 bd-highlight" alt="...">
          </div>
        </div>
        <div class="carousel-item">
          <div class="container d-flex justify-content-between">
            <img src="../Resources/Slide5.png" class="d-block w-50 p-2 bd-highlight" alt="...">
            <img src="../Resources/normal.jpg" class="d-block w-50 p-2 bd-highlight" alt="...">
          </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    </div>

    <!-- body information codes -->
    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <!-- footer codes -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-body-tertiary p-6 bd-highlight">
      <div class="col-md-6 d-flex align-items-center">
        <img src="../Resources/LOGO1.png" alt="Bootstrap" style="width:70px;">
        <span class="text-body-secondary">© 2024 ThumbCast, BTech</span>
      </div>

      <ul class="col-md-6 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-primary" href="#"><i class="bi bi-whatsapp"></i></a></li>
        <li class="ms-3"><a class="text-body-primary" href="#"><i class="bi bi-twitter-x"></i></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"></i></a></li>
      </ul>
    </footer>
  </body>
</html>