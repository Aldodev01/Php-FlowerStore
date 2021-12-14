<head>
  <link rel="stylesheet" type="text/css" href="./CardCart.css">
  <link rel="stylesheet" type="text/css" href="./DetailProduct.css">

</head>
<?php

function component($productname, $productprice, $productimg){
    $element = "
    <div class=\"card-c\">
    <img src=\"$productimg\" class=\"card-c-image\" style=\"height: 220px\"/>
    <div class=\"card-c-container\">
      <h4 class=\"card-c-judul\" >$productname</h4>
      <br/>
      <br/>
      <br/>


    <div class=\"p-c-d-flex\">
      <p class=\"p-c-d-harga width-p\">Berat</p>
      <p class=\"p-c-d-harga\">:</p>
      <p class=\"p-c-d-harga\">300 gram</p>
    </div>
    <div class=\"p-c-d-flex\">
      <p class=\"p-c-d-harga width-p\">stock</p>
      <p class=\"p-c-d-harga\">:</p>
      <p class=\"p-c-d-harga\">13</p>
    </div>
    <p class=\"p-c-d-harga d-harga\">Rp. $productprice</p>
    <br/>

      <div class=\"flex\">
      <button class=\"button-asede p-c-d-button-plus\">
        <span class=\"material-icons\" style=\"margin-top: 5px;\">delete
        </span>
      </button>
      <button class=\"button-asede detail-p-p p-c-d-button-minus mqq\">
          <a href=\"Cart.php\" style=\"margin-top: 10px; color: white;\">Masukan Keranjang</a>
      </button>
      </div>
    </div>
    </div>
    ";
    echo $element;
} ?>

