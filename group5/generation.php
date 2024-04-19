<?php
include 'table_joins.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuildCostCompany &mdash; We construct with Elegance and Class 💯</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles.css" />

    <!-- Development CSS -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->

    <!-- Deployable CSS -->
    <link rel="stylesheet" href="css/style.min.css" />
  </head>
  <body>
    <header class="header">
      <div class="header__menu-bar">
        <div class="header__logo-box">
          <!--<svg class="logo">
            <use xlink:href="img/sprite.svg#buildco-logo-green"></use>
          </svg>-->
        </div>

        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="index.html" class="header__nav-link header__nav-link--active"
                >Home</a
              >
            </li>
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">About Us</a>
            </li>
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">Building Cost Calculator</a>
            </li>
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">Projects</a>
            </li>
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">Gallery</a>
            </li>
            <li class="header__nav-item">
              <a href="#" class="header__nav-link">Contact Us</a>
            </li>
          </ul>
        </nav>

      </div>
      <div class="header__content u-margin-bottom-big">
        <section style="background-image: url(Screenshot2510.png);">
            <div class="box">
              <div class="square" style="--i: 0"></div>
              <div class="square" style="--i: 1"></div>
              <div class="square" style="--i: 2"></div>
              <div class="square" style="--i: 3"></div>
              <div class="square" style="--i: 4"></div>
              <div class="container">
                <div class="form">
                 
                  <h2 style="color: white;">Budget Breakdown</h2>
              <form id="houseCalculator" style="color: white;">
                <?php             
                
        
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                      
                        echo "Square Footage: " . $row["square_ft"]. "<br>";
                        echo "Number of Bedrooms: " . $row["num_rooms"]. "<br>";
                        echo "Region: " . $row["region"]. "<br>";
                        echo "House Cost: Ksh " . $row["cost"]. "<br>";
                        echo "Roofing Cost:Ksh " . $row["roofing_cost"]. "<br>";
                        echo "Bag of cements: " . $row["bags_of_cement"]. "<br>";
                        echo "Bag of sand: " . $row["bags_of_sand"]. "<br>";
                        echo "Number of lorries: " . $row["lorries_of_stones"]. "<br>";
                        echo "Labor Cost: Ksh" . $row["labor_cost"]. "<br>";
                        $total_cost = $row["cost"] + $row["roofing_cost"] + $row["labor_cost"];
                        echo "Total Cost: Ksh " . $total_cost . "<br>";
                    }
                } else {
                    echo "<script type=\"text/javascript\">alert(\"No data found\"); window.location.href='calculator.html';</script>";
                }
                $conn->close();
                ?>
                
                  <!-- <div class="form-group">
                      <label for="region" style="color: white;">Region:</label>
                      
                  </div>
                  <div class="form-group">
                      <label for="squareFeet" style="color: white;">Square Feet:</label>
                  </div>
                  <div class="form-group radio-group">
                      <label style="color: white;">Finishing:</label>
                      
                  </div>
                  <div class="form-group">
                      <label for="bedrooms" style="color: white;">Number of Bedrooms:</label>

                  </div>-->
                  <div class="form-group" style="margin-top:50px;">
                      <a href="calculator.html" style="color: black; padding: 5px 30px; background-color: white;
                  margin-top:50px; border-radius:6px; border: none;">Backing</a>
                      
                  </div>
                  <!--<button onclick="window.location.href='calculator.html'">Back</button>-->
                  <!--<a href="calculator.html" style="color: black; padding: 5px 30px; text-underline:none; background-color: white;
                  margin-top:50px; border-radius:6px; border: none;">Back</a>-->
              </form>
                </div>
              </div>
            </div>
          </section>
      </div>
    </header>


    <footer class="footer">
      <div class="footer__row-1">
        <div class="footer__box">
          <h4 class="footer__title">Company</h4>
          <ul class="footer__list">
            <li class="footer__item">
              <a href="#" class="footer__link">About Us</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Estates</a>
            </li>
            <li class="#footer__item">
              <a href="" class="footer__link">Projects</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Gallery</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Contact</a>
            </li>
          </ul>
        </div>

        <div class="footer__box">
          <h4 class="footer__title">Support</h4>
          <ul class="footer__list">
            <li class="footer__item">
              <a href="#" class="footer__link">Get Help</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">FAQs</a>
            </li>
            <li class="#footer__item">
              <a href="" class="footer__link">Privacy Policy</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Terms of Operation</a>
            </li>
          </ul>
        </div>

        <div class="footer__box">
          <h4 class="footer__title">Offices</h4>
          <ul class="footer__list">
            <li class="footer__item">
              <a href="#" class="footer__link">Nairobi</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Kisumu</a>
            </li>
            <li class="#footer__item">
              <a href="" class="footer__link">Murang'a</a>
            </li>
            <li class="footer__item">
              <a href="#" class="footer__link">Eldoret</a>
            </li>
          </ul>
        </div>

        <div class="footer__box">
          <label for="language" class="footer__title">Language</label>
          <select name="language" id="language" class="footer__dropdown">
            <option class="footer__dropdown-item">English</option>
            <option class="footer__dropdown-item">French</option>
            <option class="footer__dropdown-item">Spanish</option>
            <option class="footer__dropdown-item">Arabic</option>
          </select>
        </div>
      </div>

      <div class="footer__row-2 u-margin-top-small">
        <p class="copyright">&copy; 2024 Group 5. All Rights Reserved.</p>

        <div class="footer__social-icons-box">
          <a href="#" class="footer__social-link">
            <svg class="social-icon">
              <use xlink:href="img/sprite.svg#facebook"></use>
            </svg>
          </a>
          <a href="#" class="footer__social-link">
            <svg class="social-icon">
              <use xlink:href="img/sprite.svg#instagram"></use>
            </svg>
          </a>
          <a href="#" class="footer__social-link">
            <svg class="social-icon">
              <use xlink:href="img/sprite.svg#twitter"></use>
            </svg>
          </a>
        </div>
      </div>

      <div class="footer__row-3 u-margin-top-small">
        <!--<svg class="logo">
          <use xlink:href="img/sprite.svg#buildco-logo-white"></use>
        </svg>-->
        <p class="developer-text">Made with 🤍 && 🔥 by Group 5 IT</p>
      </div>
    </footer>
  </body>
</html>
