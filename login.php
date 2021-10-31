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
</head>
<body>

  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>


    <!-- Login Form -->
    <form action="Home.php" method="POST">
      <br/>
      <br/>
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      
      <br/>
      <br/>
      <br/>

       <a href="home.php">
         <button type="submit" class="fadeIn fourth" >SIGN IN</button>
       </a>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>

