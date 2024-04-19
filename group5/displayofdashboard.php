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

    <button onclick="showUserSelections()">User Selections</button>
    <button onclick="showNumUsersPerRoom()">Number of Users per Room Configuration and Square Footage Range</button>
    <button onclick="showNumRegionsSelected()">Number of Regions Selected and Totals</button>

    <div id="userSelections" style="display: none;">
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
    </div>

    <div id="numUsersPerRoom" style="display: none;">
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
    </div>

    <div id="numRegionsSelected" style="display: none;">
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
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No regions selected yet.</td></tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function showUserSelections() {
            document.getElementById("userSelections").style.display = "block";
            document.getElementById("numUsersPerRoom").style.display = "none";
            document.getElementById("numRegionsSelected").style.display = "none";
        }

        function showNumUsersPerRoom() {
            document.getElementById("userSelections").style.display = "none";
            document.getElementById("numUsersPerRoom").style.display = "block";
            document.getElementById("numRegionsSelected").style.display = "none";
        }

        function showNumRegionsSelected() {
            document.getElementById("userSelections").style.display = "none";
            document.getElementById("numUsersPerRoom").style.display = "none";
            document.getElementById("numRegionsSelected").style.display = "block";
        }
    </script>
</body>
</html>
