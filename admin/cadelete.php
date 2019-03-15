<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<?php

try{

  $query = "DELETE FROM `category` WHERE `category_id` = ".$_GET['id'];
  $conn->exec($query);
  

header('location: catdisplay.php');

}catch(PDOException $e){

}
?>
