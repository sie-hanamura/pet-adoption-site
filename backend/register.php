<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root"; // change to your own local username
$password = ""; // change to your own password
$dbname = "pawfect_pawtrails"; // create the database and make appropriate tables from 'DB_Queries.txt' 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully.<br>"; // This will help you verify if the database connection is successful.
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted<br>"; // Add this line to indicate the form is submitted
    
    // Gather form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $termsAccepted = isset($_POST["terms"]);

    // Perform validation...
    $errors = []; // Initialize an empty errors array for validation

    // Basic validation example (you should add more)
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if (!$termsAccepted) {
        $errors[] = "You must accept the terms and conditions.";
    }

    // If no errors, proceed with registration
    if (empty($errors)) {
        // Insert user data into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        
        // Echo the SQL query for debugging purposes
        echo "SQL Query: $sql<br>";
        
        if ($conn->query($sql) === TRUE) {
            // Automatically log in the user after registration
            $_SESSION['user_id'] = $conn->insert_id;
            header("Location: ../home.php"); // Redirect to home page
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            error_log("Error: " . $sql . " - " . $conn->error . PHP_EOL, 3, "error_log.txt");
        }
    } else {
        // If there are errors, display them
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

// Close connection
$conn->close();
?>
