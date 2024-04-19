<?php
include 'connect.php';

 $sql="SELECT 
    HM.square_ft,
    HM.num_rooms,
    HM.region,
    HM.cost,
    BM.bags_of_cement,
    CE.cost_of_cement
FROM 
    house_measurements_nyeri HM
JOIN 
    cost_estimation_nyeri CE ON HM.id = CE.house_id
JOIN 
    building_materials_nyeri BM ON CE.material_id = BM.id";

?>