<?php
// Replace these with your actual database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "db_11";

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "connected succesfully!!";
}
/*
// Create a table using a prepared statement
$tableQuery = "CREATE TABLE IF NOT EXISTS database (
   name VARCHAR(100))";
$result=mysqli_query($conn,$tableQuery);

if ($result) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
/*
// Insert data into the table using a prepared statement
$username = $_POST['first_name'];


$insertQuery = "INSERT INTO database (name ) VALUES ( ?)";

$stmt = $conn->prepare($insertQuery);

$stmt->bind_param("s", $username);

if ($stmt->execute()) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . $stmt->error . "<br>";
}

// Close the prepared statement
$stmt->close();

// Close the connection
$conn->close();*/
?>

