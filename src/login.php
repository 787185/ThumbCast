<?php 
  include 'connect.php'; //connection to the database
  $email = $pass = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

  }
?>


<style>
  html, body {
    display: flex;
    justify-content: center;
    align-items: center;  
    padding: 20px;
    background-image: linear-gradient(to right, #ffffff 50%, #F2F2F2 50%);
  }
  img{
    height: 110%;
    width: 80%;

  }
  
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--enables responsiveness of the site o any device-->
    <!-- <link rel="stylesheet" href="stylessheet.css"> -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body>
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
          <h6>Not yet registerred?<a href="register.php">Register</a></h6>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>