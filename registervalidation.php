<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$connect = mysqli_connect("localhost", "root", "", "signin");

$name = $_POST['name'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];

if ($cpassword != $password) {
    echo '<script>
            alert("Passwords do not match!");
	      window.location = "../login/registration.php";
        </script>';
} else {
   /*
    $createTableQuery = "CREATE TABLE IF NOT EXISTS users (
        UserName VARCHAR(50) NOT NULL,
        Password VARCHAR(100) NOT NULL,
        ConfirmPassword VARCHAR(100) NOT NULL,
        Email VARCHAR(100) NOT NULL
    )";
    mysqli_query($connect, $createTableQuery);*/

    // Insert data into the table
    $insertQuery = "INSERT INTO signin_data (name, password,cpassword, email) VALUES ('$name', '$password', '$cpassword', '$email')";
    $insert = mysqli_query($connect, $insertQuery);

    if ($insert) {
        echo '<script>
                alert("Registration successful!");
                  window.location = "../login/registration.php";
            </script>';
    }
}
?>

