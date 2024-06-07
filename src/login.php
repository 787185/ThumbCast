<?php 
  include 'connect.php'; //connection to the database
  $email = $pass = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--enables responsiveness of the site o any device-->
    <link rel="stylesheet" href="stylessheet.css">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body class="body">
<?php include 'logo.php'; ?>
  <div class="row">
    <div class="col-md-6">
      <img id="f-img" src="../Resources/login 2.png" alt="Image 4">
    </div>
    <div class="col-md-6 " id="column2" >
      <div id="form" >
        <form class="form-container" action="" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
          <h6 class="p-1 fst-italic">Not yet registerred?<a data-bs-target="#myModal" data-bs-toggle="modal" href=""> Register</a></h6>
          <div class="d-flex justify-content-center">
            <button type="submit" class="rounded-pill btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Registration form in the form of a modal -->
  <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="myModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content ">
        <!-- <div class="modal-header d-flex justify-content-center align-items-center">
          <h1 class="modal-title fs-5" id="myModal">Registration</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
                <!-- <img src="../Resources/Register.png" alt="Image 4" class="d-block w-2 p-2 bd-highlight"> -->
            </div>
            <div class="col-md-6">
                <form action="register.php" method="post" class="form-container" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="DOB">Date of Birth:</label>
                        <input type="date" class="form-control" id="DOB" placeholder="Enter date of birth" name="DOB" require>
                    </div>
                    <div class="form-group">
                      
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" require>
                    </div>
                    <!-- <div class="form-group">
                        <label for="contact">Contact No:</label>
                        <input type="text" class="form-control" id="tel" placeholder="Enter contact number" name="tel" require>
                    </div> -->
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" require>
                    </div>
                    <div class="form-group">
                        <label for="cpwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpwd" require>
                    </div>
                    <h6 class="fst-italic p-1">Already registerred?<a href="login.php"> LogIn</a></h6>
                    <div class="d-flex justify-content-between">
                      <button type="reset" class="btn btn-danger">Clear Form</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>

<script>
  function validateForm() {
    // Add your form validation logic here (optional)
    // Example: Check if name and email are filled in

    const name = document.getElementById('name').value;
    const DOB = document.getElementById('DOB').value;
    const email = document.getElementById('email').value;
    const pwd = document.getElementById('pwd').value;
    const cpwd = document.getElementById('cpwd').value;
    sendData(name, DOB, email, pwd, cpwd);
  }

  function sendData(name, DOB, email, tel, pwd, cpwd) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'register.php'); // Replace with your actual PHP script
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Build form data string dynamically
    let formData = '';
    formData += `name=${name}`;
    formData += `&DOB=${DOB}`;
    formData += `&email=${email}`;
    formData += `&pwd=${pwd}`;
    formData += `&cpwd=${cpwd}`;
    xhr.onload = function() {
      if (xhr.status === 200) {
        // loading

      } else {
        alert('Error sending data: ' + xhr.statusText);
      }
    };

    xhr.send(formData);
  }
</script>