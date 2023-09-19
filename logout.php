<?php
session_start(); // Start or resume the session

if (isset($_SESSION['username'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Logged Out Successfully!",
                    text: "You have been logged out successfully.",
                    confirmButtonText: "OK",
                }).then(function() {
                    window.location = "../login/index.html";
                });
            });
        </script>';
} else {
    echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "info",
                    title: "Not Logged In",
                    text: "You are not currently logged in.",
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css"> <!-- Add this line -->
  <title>HASH TECHIE OFFICIAL</title>
</head>
<body>
    <!-- Your HTML content goes here -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script> <!-- Add this line -->
</body>
</html>

