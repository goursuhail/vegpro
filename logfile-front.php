<?php
session_start();
require_once('db.php');

try{


  $query = "SELECT * FROM `customer` WHERE user_name = :name and password = :my";
  $stmt = $conn->prepare($query);
//print_r($_POST);
  $pwd_md5 = md5($_POST['pass']);
  //echo $pwd_md5; die();
  $stmt->bindValue('name', $_POST['uname'] );
  $stmt->bindValue('my', $pwd_md5 );

  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($row != false){
    echo 'login success';
    $_SESSION['user-front'] = $row;
    header('location: index.php');
  }else{
    header('location: login-front.php?message=fail');
  }

}catch(PDOException $e){

}
?>
