<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<?php

try{

  $query = "DELETE FROM `product` WHERE `product_id` = ".$_GET['id'];
  $conn->exec($query);
  //print_r($_GET);

header('location: prodisplay.php');

}catch(PDOException $e){

}
?>
