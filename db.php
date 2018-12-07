<?php

$db_server = 'localhost';
$db_user = 'root';
$db_password = 'mysql';
$db_name = 'vegetable';

$conn = new PDO('mysql:host='.$db_server.';dbname='.$db_name, $db_user, $db_password);


// Cart products

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
  $cart_products = array_keys($_SESSION['cart']);

  $cart_products_string = implode(',', $cart_products);
  $query = "SELECT * FROM `product` WHERE product_id IN (". $cart_products_string . " )";
  echo $query; die();
  $stmt = $conn->query($query);
  $cart_products = [];
  while($row = $stmt->fetch()){
      $cart_products[$row['product_id']] = [

          'name' => $row['name'],
          'image' => $row['product_image'],
          'unit_price' => $row['price'],
          'qty' => $_SESSION['cart'][$row['product_id']],
          'price' => $_SESSION['cart'][$row['product_id']] *  $row['price']
      ];
  }




}
?>
