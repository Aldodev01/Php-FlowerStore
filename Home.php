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
  <link rel="stylesheet" type="text/css" href="./nav.css">
  <link rel="stylesheet" type="text/css" href="./main.css">
  <link rel="stylesheet" type="text/css" href="./Home.css">


</head>
<body>
    <?php require_once ('ProductCard.php') ?>
    <?php require_once ('Navbar.php') ?>

  
<!-- <?php 
      $username=$_POST['username'];
      $password=$_POST['password'];
    ?> -->
    <?php navbar(username: $username, photourl: "https://images.unsplash.com/photo-1635672540255-32be6349d02d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=761&q=80"); ?>
  

    <div class="wrapper fadeInDown wrapper-image">
        <img src="https://media.istockphoto.com/photos/hydrangea-flowers-in-the-garden-picture-id927499422?b=1&k=20&m=927499422&s=170667a&w=0&h=zmwoF7maovMCjNa3rgX8v02MVk5Rxzq1wn9kiTrM4YI=" alt="" srcset="" class="image-1">
       
    </div>

      <div class="wrapper fadeInDown">
        <h1 class="headline">FLASH SALE</h1>
          <div class="scroller-y">
            <?php 
              component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
              component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
              component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
              component(productname: "Eternal Monogram Box", productprice: "192.000", productimg: "https://images.unsplash.com/photo-1546842931-886c185b4c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"); 
              component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
              component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
              component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
              component(productname: "Eternal Monogram Box", productprice: "192.000", productimg: "https://images.unsplash.com/photo-1546842931-886c185b4c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"); 
              component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
              component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
              component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
              component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
              component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
              component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
            ?>
        </div>
      </div>

      <div class="wrapper fadeInDown">
        <h1 class="headline">DISCOUNT 30%</h1>
        <div class="scroller-y">
        <?php
        component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
        component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
        component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
        component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
        component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
        component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
            component(productname: "Eternal Monogram Box", productprice: "192.000", productimg: "https://images.unsplash.com/photo-1546842931-886c185b4c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"); 
            component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
            component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
            component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
            component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
            component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
            component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
          ?>
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
      <div class="wrapper fadeInDown">
        <h1 class="headline">MORE COLLECTION</h1>
        <div class="wrappered-container">
          <?php 
            component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
            component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
            component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
            component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
            component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
            component(productname: "Eternal Monogram Box", productprice: "192.000", productimg: "https://images.unsplash.com/photo-1546842931-886c185b4c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"); 
            component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
              component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
        component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
        component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
        component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
        component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
        component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
            component(productname: "Eternal Monogram Box", productprice: "192.000", productimg: "https://images.unsplash.com/photo-1546842931-886c185b4c8c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"); 
            component(productname: "Beauty & The Beast Rose", productprice: "160.000", productimg: "https://images.unsplash.com/photo-1447875569765-2b3db822bec9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
            component(productname: "Fairest of Them All", productprice: "570.000", productimg: "https://images.unsplash.com/photo-1455582916367-25f75bfc6710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=527&q=80"); 
            component(productname: "Rose Jewelry Box", productprice: "230.000", productimg: "https://images.unsplash.com/photo-1452827073306-6e6e661baf57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80");
            component(productname: "Rose Diffuser", productprice: "880.000", productimg: "https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80");
            component(productname: "Fairest of Them All", productprice: "460.000", productimg: "https://images.unsplash.com/photo-1556647944-11bc0d4e0c4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80");
            component(productname: "Beauty & The Beast Rose", productprice: "331.000", productimg: "https://images.unsplash.com/photo-1588477000993-460d2257f88a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
          ?>
        </div>
      </div>
  </body>
</html>

<!-- <?php $nilai = 90; if(($nilai <= 100) && ($nilai > 85)) {
  $grade = "A";
} elseif(($nilai <= 85) && ($nilai > 70)){
 $grade = "B";
} elseif(($nilai <= 70) && ($nilai > 55)){
  $grade = "C";
 }  elseif(($nilai <= 55) && ($nilai < 45)){
  $grade = "D";
 }  elseif(($nilai <= 45) && ($nilai < 30)){
  $grade = "E";
 } else {
   $grade = "Nilai Diluar Jangkauan";
 } echo " Nilai Anda : $nilai dan dikelompokkan menjadi $grade"?> -->
    

    <!-- <?php 
  echo"<form name=form1 method=post>";
  echo"Angka";
  echo"<select name=tanggal>";
for ($angka = 1; $angka <= 20; $angka++) {
  echo"<option value=".$angka.">".$angka.">
  </option>";
}
echo"</select>";
echo "</form>"

?> -->

<!-- <?php 
$warna = array ("merah", "putih", "hijau", "daun", "asede");
foreach($warna as $asede) {
  echo "$asede<br/>";
}
?> -->

<!-- <?php 
      $jumlah=1;
      while ($jumlah <=7)
      {
        echo $jumlah++;
        echo "<br/>";
      }
    ?> -->


 <!-- <?php include 'ProductCard.php' ?>
 <?php include 'ProductCard.php' ?>
   <?php include 'ProductCard.php' ?>
   <?php include 'ProductCard.php' ?>
   <?php include 'ProductCard.php' ?>
   <?php include 'ProductCard.php' ?>
   <?php include 'ProductCard.php' ?> -->


   <!-- <?php 
      $jumlah=10;
      do{
        echo $jumlah++;
        echo "<br/>";
      }
      while ($jumlah <= 1)
    ?> -->