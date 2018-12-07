<?php
session_start();
require_once('db.php');


$_SESSION['cart'][$_POST['pid']]  = $_POST['qty'];


header('Location: cart.php');
?>
