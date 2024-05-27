<?php 
include 'connect.php';

$name = $email = $DOB = $tel = $pwd = $cpwd = $pass = $name_error =  $email_error =  $DOB_error =  $tel_error =  $pwd_error =  $cpwd_error = "";


// trimming and storing data from input fields
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
  
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
  
    if (empty($_POST["DOB"])) {
        $DOB_error = "Date of birth is required";
    } else {
      $DOB = test_input($_POST["DOB"]);
    }
  
    if (empty($_POST["tel"])) {
        $tel_error = "Contact is required";
    } else {
      $tel = test_input($_POST["tel"]);
    }
  
    if (empty($_POST["pwd"])) {
        $pwd_error = "Pasword is required";
    } else {
        $pwd = test_input($_POST["pwd"]);
    }

    if (empty($_POST["cpwd"])) {
        $cpwd_error = "Paswords don't match";
    } else {
        $cpwd = test_input($_POST["cpwd"]);
        if($pwd != $cpwd){
            $cpwd_error = "Paswords don't match"; 
        }else{
            $pass = $pwd;
        }
    }
}
// insertion into the database


$sql = "INSERT INTO voters (names,date_of_birth,email,mobile_no,passwords) VALUES ('$name','$DOB','$email','$tel','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
mysqli_close($conn);
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
    <link rel="stylesheet" href="../stylessheet.css">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <title>ThumCast</title>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <img src="../Resources/Register.png" alt="Image 4" >
        </div>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    <span class="error"> <?php echo $name_error;?></span>
                </div>
                <div class="form-group">
                    <label for="DOB">Date of Birth:</label>
                    <input type="date" class="form-control" id="DOB" placeholder="Enter date of birth" name="DOB">
                            <span class="error"> <?php echo $DOB_error;?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <span class="error"> <?php echo $email_error;?></span>
                </div>
                <div class="form-group">
                    <label for="contact">Contact No:</label>
                    <input type="text" class="form-control" id="tel" placeholder="Enter contact number" name="tel">
                            <span class="error"> <?php echo $tel_error;?></span>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    <span class="error"> <?php echo $pwd_error;?></span>
                </div>
                <div class="form-group">
                    <label for="cpwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpwd">
                    <span class="error"> <?php echo $cpwd_error;?></span>
                </div>
                <h6>Already registerred?<a href="login.php"> LogIn</a></h6>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>