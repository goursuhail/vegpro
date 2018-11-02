<?php require_once('db.php'); ?>

<?php
try{
  $query = "INSERT INTO `customer` (first_name, last_name, date) VALUES(:user, :fname, :lname, :da)";

  $stmt = $conn->prepare($query);


  $stmt->bindValue('fname', $_GET['finame'] );
  $stmt->bindValue('lname', $_GET['laname'] );
  $stmt->bindValue('da', $_GET['dat'] );

  $stmt->execute();
}catch(PDOException $e){

}
?>
