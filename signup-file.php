<?php require_once('db.php'); ?>
<?php

try{

  $query = "INSERT INTO `customer`(`email`, `password`, `first_name`, `user_name`, `phone`) VALUES(:email, :pass, :name, :username, :phone)";
  echo($query);
  $stmt = $conn->prepare($query);
  $pass = md5($_POST['passwd']);
  $stmt->bindValue('email', $_POST['mail'] );
  $stmt->bindValue('pass', $pass );
  $stmt->bindValue('name', $_POST['nam'] );
  $stmt->bindValue('username', $_POST['uname'] );
  $stmt->bindValue('phone', $_POST['mobile'] );


  print_r($_POST);

  $stmt->execute();

  //header('location: index.php');

}catch(PDOException $e){

}
?>
