<head>
  <link rel="stylesheet" type="text/css" href="./CardCart.css">
</head>
<?php

function component($productname, $productprice, $productimg){
    $element = "
    <div class=\"card-c\">
    <img src=\"$productimg\" class=\"card-c-image\"/>
    <div class=\"card-c-container\">
      <h4 class=\"card-c-judul\" >$productname</h4>
      <br/>
      <p class=\"card-c-price\">Rp. $productprice</p>
      <div class=\"flex\">
      <button class=\"p-c-d-button p-c-d-button-plus\"> <span class=\"material-icons\" style=\"margin-top: 5px;\">add</span></button>
        <p>3</p>
        <button class=\"p-c-d-button p-c-d-button-minus\">
        <span class=\"material-icons\" style=\"margin-top: 5px;\">remove</span>
      </button>
      </div>
    </div>
    </div>
    ";
    echo $element;
} ?>

