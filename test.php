<?php
include 'connect.php';

// Assuming you have obtained the region dynamically, for example from a form submission
$region_id = $_POST['region_id'];
$region_name = $_POST['region_name'];

// Sanitize user inputs to prevent SQL injection
$region_id = mysqli_real_escape_string($conn, $region_id);
$region_name = mysqli_real_escape_string($conn, $region_name);

// Debugging: Check the value of $region_id and $region_name
echo "Region ID: " . $region_id . "<br>";
echo "Region Name: " . $region_name . "<br>";

// Construct the table names with region-specific extensions
$house_measurements_table = "house_measurements_" . strtolower($region_name);
$cost_estimation_table = "cost_estimation_" . strtolower($region_name);
$building_materials_table = "building_materials_" . strtolower($region_name);

// SQL query to join tables using the constructed table names and region ID
$sql = "SELECT 
            HM.square_ft,
            HM.num_rooms,
            HM.region_id,
            BM.bags_of_cement,
            CE.cost_of_cement
        FROM 
            $house_measurements_table HM
        JOIN 
            $cost_estimation_table CE ON HM.hm_id = CE.cost_id
        JOIN 
            $building_materials_table BM ON CE.cost_id = BM.Bm_id
        WHERE 
            HM.region_id = $region_id";

// Debugging: Output the SQL query to see if it's constructed correctly
echo "SQL Query: " . $sql . "<br>";

$result = $conn->query($sql);

if (!$result) {
    // Query execution failed, display error message
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Process and display data as needed
            echo "Square Footage: " . $row["square_ft"]. "<br>";
            echo "Number of Bedrooms: " . $row["num_rooms"]. "<br>";
            // Other fields...
        }
    } else {
        echo "No results found for the given region.";
    }
}

$conn->close();
?>
