<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform data validation here

    // Create a database connection
    $conn = new mysqli("localhost", "root", "", "data");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the user table
    $sql = "INSERT INTO data (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === true) {
        echo '<p class="success-message">Form submitted successfully! Your order is confirmed. </p>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

