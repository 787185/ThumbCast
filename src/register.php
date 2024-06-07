<?php
include 'connect.php'; // Assuming 'connect.php' establishes the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Initialize variables and error flags
  $name = $_POST['name'];
  $DOB = $_POST['DOB'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $pwd = $_POST['pwd'];
  $cpwd = $_POST['cpwd'];

  $hasError = false; // Flag to track validation errors

  // Validation checks
  if (empty($name)) {
    $hasError = true;
    $errorMessage['name'] = 'Please enter your name.';
  }

  if (empty($DOB)) {
    $hasError = true;
    $errorMessage['DOB'] = 'Please enter your date of birth.';
  }

  // Add more validation checks as needed
  // - Email format validation (e.g., using filter_var() with FILTER_VALIDATE_EMAIL)
  // - Minimum password length check (adjust as needed)

  // Password confirmation check
  if ($pwd !== $cpwd) {  // Use != for inequality comparison
    $hasError = true;
    $errorMessage['cpwd'] = 'Passwords do not match.';
  }

  // Process data if no errors
  if (!$hasError) {
    $stmt = $conn->prepare("INSERT INTO voters (names, date_of_birth, email, passwords) VALUES (?, ?, ?, ?)");

    // Check for connection errors
    if ($conn->connect_error) {
      echo "Connection failed: " . $conn->connect_error;
      exit(); // Stop script execution
    }

    if ($stmt === false) {
      echo "Error: Could not prepare statement (" . $conn->error . ")";
      exit(); // Stop script execution on prepare error
    }

    $stmt->bind_param("ssss", $name, $DOB, $email, password_hash($pwd, PASSWORD_DEFAULT));

    if ($stmt->execute()) {
      header("Location: login.php");
    } else {
      echo "Error: " . $conn->error; // Display error message for debugging
    }

    $stmt->close(); // Close the prepared statement
  } else {
    // Send error messages back to JavaScript (optional)
    echo json_encode($errorMessage); // Send errors as JSON
  }

  $conn->close(); // Close the database connection
} else {
  echo 'Invalid request method.';
}
?>


