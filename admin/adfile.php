<?php require_once('db.php'); ?>

<?php
try{
  $query = "INSERT INTO `admin_user` (user_name, first_name, last_name, password) VALUES(:user, :fname, :lname, :pass)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('user', $_GET['usname'] );
  $stmt->bindValue('fname', $_GET['finame'] );
  $stmt->bindValue('lname', $_GET['laname'] );
  $stmt->bindValue('pass', $_GET['passw'] );

  $stmt->execute();

  header('location: addisplay.php');
}catch(PDOException $e){

}
?>
