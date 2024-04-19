<?php
include '../connect.php'; // Include database connection

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
<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Group 5</title>

  <!-- Bulma is included -->
  <link rel="stylesheet" href="css/main.min.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      <div class="navbar-item has-control">
        <div class="control"><input placeholder="Search everywhere..." class="input"></div>
      </div>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
      </a>
    </div>
    <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
          <a class="navbar-link is-arrowless">
            <span class="icon"><i class="mdi mdi-menu"></i></span>
            <span>Sample Menu</span>
            <span class="icon">
            <i class="mdi mdi-chevron-down"></i>
          </span>
          </a>
          <div class="navbar-dropdown">
            <a href="profile.html" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>My Profile</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-settings"></i></span>
              <span>Settings</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-email"></i></span>
              <span>Messages</span>
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Log Out</span>
            </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
          <a class="navbar-link is-arrowless">
            <div class="is-user-avatar">
              <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
            </div>
            <div class="is-user-name"><span>John Doe</span></div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
          </a>
          <div class="navbar-dropdown">
            <a href="profile.html" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>My Profile</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-settings"></i></span>
              <span>Settings</span>
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-email"></i></span>
              <span>Messages</span>
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Log Out</span>
            </a>
          </div>
        </div>
        <a href="#" title="About" class="navbar-item has-divider is-desktop-icon-only">
          <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
          <span>About</span>
        </a>
        <a title="Log out" class="navbar-item is-desktop-icon-only">
          <span class="icon"><i class="mdi mdi-logout"></i></span>
          <span>Log out</span>
        </a>
      </div>
    </div>
  </nav>
  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div class="aside-tools-label">
        <span><b>Admin</b> Group 5 IT</span>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="index.html" class="is-active router-link-active has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Examples</p>
      <ul class="menu-list">
        <li>
          <a href="#" class="has-icon">
            <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Chat</span>
          </a>
        </li>
        <li>
          <a href="#" class="has-icon">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Team</span>
          </a>
        </li>
        <li>
          <a href="#" class="has-icon">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Projects</span>
          </a>
        </li>
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Submenus</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Sub-item One</span>
              </a>
            </li>
            <li>
              <a href="#void">
                <span>Sub-item Two</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="menu-label">About</p>
      <ul class="menu-list">
        <li>
          <a href="#" target="_blank" class="has-icon">
            <span class="icon"><!--<i class="mdi mdi-github-circle"></i>--></span>
            <span class="menu-item-label">Contact</span>
          </a>
        </li>
        <!--<li>
          <a href="#" class="has-icon">
            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
            <span class="menu-item-label">About</span>
          </a>
        </li>-->
      </ul>
    </div>
  </aside>
  <section class="section is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Admin</li>
            <li>Dashboard</li>
          </ul>
        </div>
      </div>
      <div class="level-right">
        <div class="level-item">
          <div class="buttons is-right">
            <a href="#" target="_blank" class="button is-primary">
              <span class="icon"><i class="mdi mdi-github-circle"></i></span>
              <span>Group</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item"><h1 class="title">
            Dashboard
          </h1></div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section is-main-section">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Clients
                </h3>
                  <h1 class="title">
                     </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-primary is-large"><i
                    class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Regions
                </h3>
                  <h1 class="title">
                    5 regions
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-info is-large"><!--<i
                    class="mdi mdi-cart-outline mdi-48px"></i>--></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label"><h3 class="subtitle is-spaced">
                  Performance
                </h3>
                  <h1 class="title">
                    
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-success is-large"><i
                    class="mdi mdi-finance mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="card has-table has-mobile-sort-spaced">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            
          <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
              
            
   
<tbody>
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
</tbody>
<div class="card has-table has-mobile-sort-spaced">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Number of Regions Selected and Totals
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            
          <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">

          <tbody>
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
  <footer class="footer">
    <div class="container-fluid">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            © 2024, Group 5 IT
          </div>
          <div class="level-item">
            <a href="#" style="height: 20px">
              <img src="https://img.shields.io/github/v/release/vikdiesel/admin-one-bulma-dashboard?color=%23999">
            </a>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <div class="logo">
              <a href="#"><img src="img/justboil-logo.svg" alt="JustBoil.me"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<div id="sample-modal" class="modal">
  <div class="modal-background jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Confirm action</p>
      <button class="delete jb-modal-close" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>This will permanently delete <b>Some Object</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button jb-modal-close">Cancel</button>
      <button class="button is-danger jb-modal-close">Delete</button>
    </footer>
  </div>
  <button class="modal-close is-large jb-modal-close" aria-label="close"></button>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="js/chart.sample.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>
