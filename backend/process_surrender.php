error_reporting(E_ALL);
ini_set('display_errors', 1);

<?php
// Include database connection
include 'db_connect.php';

// Initialize response array
$response = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $petName = $_POST["pet-name"];
    $petType = $_POST["pet-type"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $spayedNeutered = $_POST["spayed-neutered"];
    $vaccinationStatus = $_POST["vaccination-status"];
    $healthIssues = $_POST["health-issues"];
    $behavioralTraits = $_POST["behavioral-traits"];
    $reason = $_POST["reason"];
    $ownerName = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $contactMethod = $_POST["contact-method"];
    $adoptionConditions = $_POST["adoption-conditions"];
    $additionalNotes = $_POST["additional-notes"];

    // Insert form data into the database
    $sql = "INSERT INTO pet_surrender_data 
            (pet_name, pet_type, breed, age, gender, spayed_neutered, vaccination_status, health_issues, behavioral_traits, reason, 
            owner_name, owner_email, owner_phone, owner_address, contact_method, adoption_conditions, additional_notes) 
            VALUES 
            ('$petName', '$petType', '$breed', '$age', '$gender', '$spayedNeutered', '$vaccinationStatus', '$healthIssues', '$behavioralTraits', '$reason', 
            '$ownerName', '$email', '$phone', '$address', '$contactMethod', '$adoptionConditions', '$additionalNotes')";
    
    if ($conn->query($sql) === TRUE) {  
        // Set success response
        $response['success'] = true;
    } else {
        // Set error response
        $response['success'] = false;
        $response['error'] = $conn->error;
    }
}

// Close connection
$conn->close();
