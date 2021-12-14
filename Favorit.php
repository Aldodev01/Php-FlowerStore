<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="./DetailProduct.css">
  <link rel="stylesheet" type="text/css" href="./main.css">
  <link rel="stylesheet" type="text/css" href="./Cart.css">

</head>
<body>
<?php require_once ('CardFavorit.php') ?>
<?php require_once ('Navbar.php') ?>
    <!-- <?php 
      $username=$_POST['username'];
      $password=$_POST['password'];
    ?>  -->
<?php navbar(username: $username, photourl: "https://images.unsplash.com/photo-1635672540255-32be6349d02d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=761&q=80"); ?>


  <div class="wrapper-center fadeInDown" >
  <div class="cart-wrapper">
    <!-- Tabs Titles -->
    <div class="cart-container">
      <h2 class="active">My Favorit</h2>
      <br/>
      <?php 
              component(
                productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"
              );
              component(
                productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"
              );
              component(
                productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80", 
              );
              component(
                productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"
              );
            ?>
    </div>
   </div>

   


  </div>
</div>
</body>
</html>

