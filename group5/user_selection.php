<?php
session_start(); // Start session

include 'connect.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $region = $_POST['region'];
    $square_ft = $_POST['square_ft'];
    $num_rooms = $_POST['num_rooms'];
    
    // Generate a unique identifier for the user (session ID)
    $user_id = session_id();

    // Perform database operation (insert data into the table)
    $sql = "INSERT INTO user_selections (user_id, region, square_ft, num_rooms) 
            VALUES ('$user_id', '$region', '$square_ft', '$num_rooms')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Close database connection
}
?>
