<?php
// Database connection settings
$servername = getenv('AZURE_MYSQL_HOST');     // The hostname of the database server
$username = getenv('AZURE_MYSQL_USERNAME');   // The username to connect to the database
$password = getenv('AZURE_MYSQL_PASSWORD');   // The password to connect to the database
$dbname = getenv('AZURE_MYSQL_DBNAME');       // The name of the database to connect to

// Create a new MySQLi object to establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    // If there is a connection error, output the error message and terminate the script
    die("Connection failed: " . $conn->connect_error);
}
?>
