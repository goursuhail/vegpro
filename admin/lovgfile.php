<?php require_once('db.php'); ?>
<?php
session_start();
try{

  $query = "SELECT * FROM `admin_user` WHERE user_name = :name and password = :my";
  $stmt = $conn->prepare($query);

  $stmt->bindValue('name', $_POST['uname'] );
  $stmt->bindValue('my', $_POST['pass'] );

  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($row != false){
    echo 'login success';
    $_SESSION['user'] = $row;
    header('location: index.php');
  }else{
    header('location: loginveg.php?message=fail');
  }

}catch(PDOException $e){

}
?>
