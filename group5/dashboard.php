<?php
include 'connect.php'; // Include database connection

// Count the number of regions selected along with the total number of rooms and square footage per region
$sql_regions = "SELECT region, COUNT(*) as total_users_per_region, SUM(num_rooms) as total_rooms, SUM(square_ft) as total_square_ft 
                FROM user_selections 
                GROUP BY region";
$result_regions = $conn->query($sql_regions);

// Count the number of regions selected along with the number of users who selected each room configuration and square footage range
$sql_regions_detail = "SELECT 
                        region,
                        num_rooms,
                        COUNT(DISTINCT user_id) AS num_of_users,
                        square_ft,
                        COUNT(*) AS num_of_selections
                    FROM 
                        user_selections
                    GROUP BY 
                        region, num_rooms, square_ft";
$result_regions_detail = $conn->query($sql_regions_detail);

// Retrieve user selections
$sql_user_selections = "SELECT * FROM user_selections";
$result_user_selections = $conn->query($sql_user_selections);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Dashboard</h2>

    <h3>Number of Regions Selected and Totals</h3>
    <table>
        <tr>
            <th>Region</th>
            <th>User per Region</th>
        </tr>
        <?php
        if ($result_regions->num_rows > 0) {
            while ($row = $result_regions->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["region"] . "</td>";
                echo "<td>" . $row["total_users_per_region"] . "</td>";
                echo "<td>" . $row["total_rooms"] . "</td>";
                echo "<td>" . $row["total_square_ft"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No regions selected yet.</td></tr>";
        }
        ?>
    </table>

    <h3>Number of Users per Room Configuration and Square Footage Range</h3>
    <table>
        <tr>
            <th>Region</th>
            <th>Number of Rooms</th>
            <th>Number of Users</th>
            <th>Square Footage Range</th>
            <th>Number of Selections</th>
        </tr>
        <?php
        if ($result_regions_detail->num_rows > 0) {
            while ($row = $result_regions_detail->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["region"] . "</td>";
                echo "<td>" . $row["num_rooms"] . "</td>";
                echo "<td>" . $row["num_of_users"] . "</td>";
                echo "<td>" . $row["square_ft"] . "</td>";
                echo "<td>" . $row["num_of_selections"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No selections made yet.</td></tr>";
        }
        ?>
    </table>

    <h3>User Selections</h3>
    <table>
        <tr>
            <th>User ID</th>
            <th>Region</th>
            <th>Number of Rooms</th>
            <th>Square Footage</th>
        </tr>
        <?php
        if ($result_user_selections->num_rows > 0) {
            while ($row = $result_user_selections->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["region"] . "</td>";
                echo "<td>" . $row["num_rooms"] . "</td>";
                echo "<td>" . $row["square_ft"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No user selections yet.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
