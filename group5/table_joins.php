<?php
include 'connect.php';
$num_rooms = $_POST['num_rooms']; 
$square_ft = $_POST['square_ft']; 
$region = $_POST['region']; 
            
$square_ft_range = explode("-", $square_ft);
$min_square_ft = intval($square_ft_range[0]); // Convert to integer
$max_square_ft = intval($square_ft_range[1]); // Convert to integer
                
                // Prepare SQL query to retrieve cost estimation
$sql = "SELECT HM.square_ft, HM.num_rooms, HM.region, HM.cost, BM.roofing_cost, BM.labor_cost, BM.bags_of_cement, BM.bags_of_sand, BM.lorries_of_stones  
FROM housemeasurements HM
JOIN costestimation CE ON HM.id = CE.house_id
JOIN buildingmaterials BM ON CE.material_id = BM.id
WHERE HM.num_rooms = $num_rooms 
AND HM.region = '$region' 
AND HM.square_ft BETWEEN $min_square_ft AND $max_square_ft";
                
?>
