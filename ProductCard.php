<head>
  <link rel="stylesheet" type="text/css" href="./ProductCard.css">
</head>
<?php

function component($productname, $productprice, $productimg){
    $element = "
    <a href=\"/DetailProduct.php\">
    <div class=\"card\">
    <img src=\"$productimg\" class=\"product-card-img\"/>
    <div class=\"product-card-container\">
      <h4 class=\"product-card-judul\" >$productname</h4>
      <br/>
      <p class=\"product-card-harga\">Rp. $productprice</p>
    </div>
    </div>
    </a>
    ";
    echo $element;
} ?>

