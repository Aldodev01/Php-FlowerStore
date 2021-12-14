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




</head>
  <body>
  <?php require_once ('ProductCard.php') ?>
  <?php require_once ('Navbar.php') ?>
<!-- <?php 
      $username=$_POST['username'];
      $password=$_POST['password'];
    ?>  -->
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
                <p class="p-c-d-harga width-p">Status</p>
                <p class="p-c-d-harga">:</p>
                <p class="p-c-d-harga">Ready</p>
              </div>
              <div class="p-c-d-flex">
                <p class="p-c-d-harga width-p">Berat</p>
                <p class="p-c-d-harga">:</p>
                <p class="p-c-d-harga">300 gram</p>
              </div>
              <div class="p-c-d-flex">
                <p class="p-c-d-harga width-p">stock</p>
                <p class="p-c-d-harga">:</p>
                <p class="p-c-d-harga">13</p>
              </div>
              <p class="p-c-d-harga d-harga">Rp. 15.000</p>

              <div class="p-c-d-flex">
                <div class="p-c-d-order">
                <p class="p-c-d-harga width-p">Pesan </p> <p>:</p>
                   
                    <button class="p-c-d-button p-c-d-button-plus"> <span class="material-icons" style="margin-top: 5px;">add</span></button>
                      <p>3</p>
                      <button class="p-c-d-button p-c-d-button-minus">
                        <span class="material-icons" style="margin-top: 5px;">remove</span>
                      </button>
                  
                </div>
              </div>
              <div class="p-c-d-flex" style="gap: 10px !important;">
              <button class="button-asede p-c-d-button-plus"> <span class="material-icons detail-p-g" style="margin-top: 5px;">shopping_cart</span></button>
              <button class="button-asede p-c-d-button-minus"> <span class="material-icons detail-p-g" style="margin-top: 5px;">favorite</span></button>
              <button class="button-asede detail-p-p p-c-d-button-plus mqq"><a href="Checkout.php" style="color: white;">Pesan Sekarang</a> </button>
            </div>
            </div>
        </div>
      <div class="p-c-d-wrap desc">
      <div class="p-c-d-container">
        <h1 class="p-c-d-judul" style="margin-bottom: 30px;" >Description</h1>
          <p class="p-c-d-harga d-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
            doloremque. Quaerat provident commodi consectetur veniam similique ad 
            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
            quasi aliquam eligendi, placeat qui corporis!
          </p>
      </div>
        </div>

        <div class="wrapper fadeInDown">
        <h1 class="headline">YOUR STYLE</h1>
        <div class="scroller-y">
          <?php 
            component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
            component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
            component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
            component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
            component(productname: "Eternal Monogram Box", productprice: "192.000", productimg: "https://images.unsplash.com/photo-1546842931-886c185b4c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"); 
            component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
            component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
          ?>
        </div>
      </div>
      </div>
  </body>
</html>
