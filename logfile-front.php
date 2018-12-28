<?php require_once('db.php'); ?>
<?php
session_start();
try{

  $query = "SELECT * FROM `customer` WHERE user_name = :name and password = :my";
  $stmt = $conn->prepare($query);

  $stmt->bindValue('name', $_POST['uname'] );
  $stmt->bindValue('my', $_POST['pass'] );

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
