<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>



    <?php


    if(isset($_POST['email'])){

    header('location: Checkout.php');

    }

    else {

    ?>

    <?php

      try{

  $query = "INSERT INTO `customer`(`email`, `first_name`, `password`, `date`) values(:mail, :name, :pass, :da)";

  $stmt = $conn->prepare($query);


  $stmt->bindValue('mail', $_POST['email'] );
  $stmt->bindValue('name', $_POST['nam'] );
  $stmt->bindValue('pass', $_POST['passwd'] );
  $stmt->bindValue('da', $_POST['date'] );

  //echo($query);

  $stmt->execute();

  //print_r($_POST);


  $customer_id = $conn->lastInsertId();

  $query = "INSERT INTO `order`(`status`, `billing_charges`, `Shipping_charges`, `customer_id`, `address`, `state`, `pin_code`) values(:sta, :bill, :ship, :custom, :add, :state, :pin)";

  $stmt = $conn->prepare($query);


  //echo($query);

  $stmt->bindValue('sta', '5' );
  $stmt->bindValue('bill', '50' );
  $stmt->bindValue('ship', '20' );
  $stmt->bindValue('custom', $customer_id );
  $stmt->bindValue('add', $_POST['addr'] );
  $stmt->bindValue('state', $_POST['city'] );
  $stmt->bindValue('pin', $_POST['pinc'] );

  $stmt->execute();

  //print_r($_POST);

}catch(PDOException $e){

}


?>

<?php

  }

  ?>

<?php require_once('footer.php'); ?>
