<?php
// Database configuration
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your MySQL username
$password = "password";             // Replace with your MySQL password
$dbname = "cat1";           // Database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$form_username = $_POST['firstname'];
$form_password = $_POST['lastname'];
$form_password = $_POST['email'];

// Sanitize input to avoid SQL injection
$form_username = $conn->real_escape_string($form_firstname);
$form_username = $conn->real_escape_string($form_lastname);
$form_password = $conn->real_escape_string($form_email);

// Prepare the SQL query to insert data into the database
$sql = "INSERT INTO users (firstname,lastname, email) VALUES ('studentmiguel', 'munene','miguelmunene@gmail.com')";
$sql = "INSERT INTO users (firstname,lastname, email) VALUES ('studenthaggai', 'alpha','haggaialpha@gmail.com')";
// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
