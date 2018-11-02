<?php require_once('db.php'); ?>

<?php
try{
  $query = "INSERT INTO `orders` (status, billing_charges, Shipping_charges, phone, customer_name) VALUES(:stu, :pay, :pays, :no, :cus)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('stu', $_GET['status'] );
  $stmt->bindValue('pay', $_GET['billchar'] );
  $stmt->bindValue('pays', $_GET['shipchar'] );
  $stmt->bindValue('no', $_GET['mobile'] );
  $stmt->bindValue('cus', $_GET['cust'] );
  //print_r($_GET);
  $stmt->execute();

 header('location: orddisplay.php');
}catch(PDOException $e){

}
?>
