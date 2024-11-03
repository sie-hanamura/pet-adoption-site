<?php
$servername = "localhost";
$username = "root"; # change to your own local username
$password = ""; # change to your own password
$dbname = "pawfect_pawtrails"; # create the database and make appropriate tables from 'DB_Queries.txt' 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully."; // This will help you verify if the database connection is successful.
}

?>
