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
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <title>Flower Store</title>
  <link rel="stylesheet" type="text/css" href="./nav.css">
  <link rel="stylesheet" type="text/css" href="./main.css">
  <link rel="stylesheet" type="text/css" href="./DetailProduct.css">
  <link rel="stylesheet" type="text/css" href="./Home.css">
  <link rel="stylesheet" type="text/css" href="./Checkout.css">




</head>
  <body>
    <?php require_once ('Navbar.php') ?>
<!-- <?php 
      $username=$_POST['username'];
      $password=$_POST['password'];
    ?> -->
  <?php navbar(username: $username, photourl: "https://images.unsplash.com/photo-1635672540255-32be6349d02d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=761&q=80"); ?>

      <div class="wrapper fadeInDown">

      <div class="p-c-d-wrap">
            <img src="https://images.unsplash.com/photo-1558350315-8aa00e8e4590?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80" class="p-c-d-img"/>
            <div class="p-c-d-container">
              <h1 class="p-c-d-judul" >Roseline Duluxe Pink Salmon Roses Bouquet</h1>
              <br/>
              
              <div class="p-c-d-flex">
                <p class="p-c-d-harga width-p">Kategori</p>
                <p class="p-c-d-harga">:</p>
                <p class="p-c-d-harga">Rosemary</p>
              </div>
              <div class="p-c-d-flex">
                <p class="p-c-d-harga width-p">Berat</p>
                <p class="p-c-d-harga">:</p>
                <p class="p-c-d-harga">300 gram</p>
              </div>
            
              <p class="p-c-d-harga d-harga">Rp. 45.000</p>

              <div class="p-c-d-flex">
                <div class="p-c-d-order">
                <p class="p-c-d-harga width-p">Pesan </p> &Tab; <p>: &Tab;</p> 
                  <p>3</p>
                </div>
              </div>
              
            </div>
        </div>

        <!--  -->
        <div class="checkout-w-i">
          <div class="checkout-container">
            <div class="p-c-d-wrap checkout-wrap">
              <div class="checkout-c">
                <div class="checkout-container">
                    <div class="checkout-w-i">
                      <p class="checkout-input">Nama Penerima</p>
                      <p class="checkout-input">:</p>
                    </div>
                    <input type="text" class="checkout-input" placeholder="Nama Penerima">
                </div>
                <div class="checkout-container">
                    <div class="checkout-w-i">
                      <p class="checkout-input">No. Telp</p>
                      <p class="checkout-input">:</p>
                    </div>
                    <input type="text" class="checkout-input" placeholder="No. Telp">
                </div>
              </div>
              <div class="checkout-c">
                <div class="checkout-container">
                    <div class="checkout-w-i">
                      <p class="checkout-input">Alamat Lengkap</p>
                      <p class="checkout-input">:</p>
                    </div>
                    <input type="text" class="checkout-input" placeholder="Alamat Lengkap">
                </div>
                <div class="checkout-container">
                    <div class="checkout-w-i">
                      <p class="checkout-input">Ekspedisi</p>
                      <p class="checkout-input">:</p>
                    </div>
                    <select class="checkout-input" placeholder="Ekspedisi">
                      <option value="jne">JNE</option>
                      <option value="tiki">TIKI</option>
                      <option value="pos">POS</option>
                    </select>
                </div>
              </div>
            </div>
        </div>
        <div class="checkout-inputer width-z">
          <div class="p-c-d-flex">
            <p class="p-c-d-harga width-p">Fee Service</p>
            <p class="p-c-d-harga">:</p>
            <p class="p-c-d-harga">Rp. 2.000</p>
          </div>
          <div class="p-c-d-flex">
            <p class="p-c-d-harga width-p">Ongkir</p>
            <p class="p-c-d-harga">:</p>
            <p class="p-c-d-harga">Rp. 9.000</p>
          </div>
          <div class="p-c-d-flex">
            <p class="p-c-d-harga width-p">Total</p>
            <p class="p-c-d-harga">:</p>
            <p class="p-c-d-harga"><b>Rp. 56.000</b></p>
          </div>
          <h3>Pembayaran via</h3>
            <select class="p-c-d-select">
              <option value="bca">bca</option>
              <option value="mandiri">mandiri</option>
              <option value="qris">qris</option>
          </div>
        </div>
       
        

       
          
        
     
      </div>
  </body>
</html>

<!--  -->