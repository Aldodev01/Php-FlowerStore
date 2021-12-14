<html lang="en">
<head>
<meta charset="utf-8" />
    <link rel="icon" href="./assets/icon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <meta name="theme-color" content="#000000" /> -->
    <meta
      name="Flowe Store by Kelompok 6"
      content="This is Webisite e-commerce Flower Store "
    />
    <link rel="apple-touch-icon" href="./assets/icon.svg" />
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Flower Store</title>
  <link rel="stylesheet" type="text/css" href="./nav.css">
  <link rel="stylesheet" type="text/css" href="./main.css">
  <link rel="stylesheet" type="text/css" href="./ProductCard.css">

</head>

<?php 
  function navbar($username, $photourl){
    $element = "
      <nav class=\"navbar\">
      <div class=\"flex nav-logo\">
        <img src=\"./assets/icon.svg\" width=\"30\" alt=\"\" srcset=\"\">
        <h3>Flower Store</h3>
      </div>

        <ul class=\"flex menu\">
            <li>
              <a href=\"/Home.php\" style=\"color: black\">
                Home
              </a>
            </li>
            <li>
              <a href=\"/Cart.php\" style=\"color: black\">
                Cart
              </a>
            </li>
            <li>
              <a href=\"/Favorit.php\" style=\"color: black\">
                Favorit
              </a>
            </li>
            <li>
              <a href=\"/Category.php\" style=\"color: black\">
                Category
              </a>
            </li>
          <li>
            <a href=\"/Profile.php\" class=\"nav-profile\">
              <img src=\"$photourl\" class=\"avatar\" /> 
              <p class=\"nav-name\">$username</p> 
            </a> 
          </li>
        </ul>

    </nav>
    ";

    echo $element;
  } ?>