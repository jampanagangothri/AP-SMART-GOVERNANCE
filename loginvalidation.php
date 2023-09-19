<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$connect = mysqli_connect("localhost", "root", "", "signin");

$username = $_POST['name'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM signin_data WHERE name='$username' AND password='$password' ");

if (mysqli_num_rows($check) > 0) {
    // Store relevant data in session
    $_SESSION['username'] = $username;

    echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Login Successful!",
                    text: "You have been logged in successfully.",
                    confirmButtonText: "OK",
                }).then(function() {
                    window.location = "../login/project.php";
                });
            });
        </script>';
} else {
    echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "Invalid Credentials",
                    text: "Please check your username and password.",
                    confirmButtonText: "OK",
                }).then(function() {
                    window.location = "../login/index.html";
                });
            });
        </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
  <title>HASH TECHIE OFFICIAL</title>
</head>
<body>
    <!-- Your HTML content goes here -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
</body>
</html>

