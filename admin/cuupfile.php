<?php require_once('db.php'); ?>

<?php
  try{

    $query = "UPDATE `vegetable`.customer SET  `first_name` = :first, last_name = :last, date = :da WHERE customer_id = :vid";

    $stmt = $conn->prepare($query);


    $stmt->bindValue('first', $_GET['finame'] );
    $stmt->bindValue('last', $_GET['laname'] );
    $stmt->bindValue('da', $_GET['dat'] );
    $stmt->bindValue('vid', $_GET['customer_id'] );
    //print_r($_GET);
    $stmt->execute();
    //print_r ($query);

    header('location: cudisplay.php');

  }catch(PDOException $e){

  }
?>
