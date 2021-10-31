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
  <link rel="stylesheet" type="text/css" href="./main.css">
 
<body>
<?php 
      $username=$_POST['username'];
      $password=$_POST['password'];
      
    ?>
  <nav class="navbar">
      <img src="./assets/icon.svg" width="30" alt="" srcset="">

      <ul class="flex">
        <li>
          Home
        </li>
        <li>
          Cart
        </li><li>
          Favorit
        </li><li>
          Category
        </li>
        <li> <img src="https://images.unsplash.com/photo-1635672540255-32be6349d02d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=761&q=80" class="avatar" /> <?php echo $username; ?> </li>
      </ul>

    </nav>

  <div class="wrapper fadeInDown">
  <div id="formContent">
  
    

   
    <a href="login.php">Login Lagi</a>

  </div>
</div>
</body>
</html>

