<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Final project presenting an online store">
  <title></title>
  <link rel="stylesheet" href="styles-menu3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@1,500&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link src="script.js">
  </link>
</head>

<body>
  <header>
    <h1 class="company-name">ŁachmanSport</h1>

    <ul class="menu">
      <li><a href="./index.php" class="active">menu</a></li>
      <li><a href="./sklep.php">sklep</a></li>
      <li><a href="#kontakt">kontakt</a></li>
    </ul>

    <div class="login-icon">
      <?php
      if (!$_SESSION["username"]) {
        header("Location: ./login.php");
      }
      ?>
      <a href="./logout.php?logout=<?php echo $_SESSION["username"]; ?>"
        onclick="return confirm('Jesteś pewien, że chcesz się wylogować?');" class="delete-btn"><i
          class="ri-user-unfollow-fill"></i></a>
      <a href="#"><i class='bx bxs-cart'></i></a>
        <?php
        if (isset($_SESSION['id_role']) && $_SESSION['id_role'] != 1) {
            echo '<a href="./admin/include/users.crud.php"><i class="bx bx-menu" id="menu-icon"></i></a>';
        }
        ?>
    </div>
  </header class="sticky">
  <main>
    <section class="main-home">

      <div class="main-text">
        <h5>Summer Collection</h5>
        <h1>New Summer <br> Collection </h1>
        <p>There's Nothing like Trend</p>

        <a href="./sklep.php" class="main-shop">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
      </div>
    </section>

    <!-- trending-product-section -->
    <section id="sklep" class="trending-product" id="trending" aria-labelledby="sklep">
      <div class="center-text">

        <section class="main-promote">
          <div class="main-text2">
            <h5>Don't wait</h5>
            <h1>Discounts on<br> New shoes</h1>
            <p>Don't miss this </p>

            <a href="./sklep.php" class="main-shop">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
          </div>
          <div class="down-arrow">
            <a href="#sklep" class="down"><i class='bx bx-down-arrow-alt'></i></a>
          </div>
        </section>
    </section>

    <!-- contact-section -->

    <section class="contact" aria-labelledby="kontakt">
      <div class="contact-info">
        <div class="first-info">
          <h1 id="kontakt">ŁachmanSport</h1>

          <div class="social-icon">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
          </div>

          <div class="second-info">
            <h4>Contact us</h4>
            <p>Privacy</p>
          </div>
        </div>
      </div>
    </section>

    <div class="end-text">
      <p>©Copyright 2023 by nobody. All rights reversed.</p>
    </div>
  </main>
</body>

</html>