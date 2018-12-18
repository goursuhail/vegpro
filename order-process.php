<?php

require_once('db.php');

try{

     $query = "SELECT * FROM `customer` where `email` = '".$_POST['email']."'";
     $stmt = $conn->query($query);
     $customer = $stmt->fetch(PDO::FETCH_ASSOC);
    /**echo '<pre>';
     print_r($customer);
     echo '</pre>';
     die();**/


    if(is_array($customer)){
     //header('Location:checkout.php?msg=user_exist');
     //die();
   }



   $query = "INSERT INTO `customer`(`user_name`, `email`, `first_name`, `password`) values(:uname, :mail, :name, :pass)";

    $stmt = $conn->prepare($query);

   //echo($query);

    $stmt->bindValue('uname', $_POST['usname'] );
    $stmt->bindValue('mail', $_POST['email'] );
    $stmt->bindValue('name', $_POST['nam'] );
    $stmt->bindValue('pass', $_POST['passwd'] );

    print_r($_POST);

    $stmt->execute();



    $customer_id = $conn->lastInsertId();

    $query = "INSERT INTO `order`(`status`,`billing_charges`, `shipping_charges`, `customer_id`,`address`, `state`, `pin_code`) values(:sta, :bill, :ship, :custom, :add, :states, :pinco)";

   $stmt = $conn->prepare($query);

   echo($query);

   $total=0;

   foreach ($cart_products as $key => $od){

     $total+=$od['price'];
  }

   $stmt->bindValue('sta', '1');
   $stmt->bindValue('bill', $total );
   $stmt->bindValue('ship', '20' );
   $stmt->bindValue('states', $_POST['city'] );
   $stmt->bindValue('custom', $customer_id );
   $stmt->bindValue('add', $_POST['addr'] );
   $stmt->bindValue('pinco', $_POST['pinc'] );

   echo '<pre>'; print_r($_POST); echo '</pre>';
  // print_r($customer_id);
  // print_r($total);
   $stmt->execute();



      $order_id = $conn->lastInsertId();
      echo $order_id; die();


            foreach ($cart_products as $key => $oli) {

      $query = "INSERT INTO `order_line_items`(`order_id`, `product_id`, `qty`, `unit_price`) values(:ord, :proid, :quantity, :unipri)";

      $stmt = $conn->prepare($query);
      //echo($query);
      $stmt->bindValue('ord', $order_id );
      $stmt->bindValue('proid', $key );
      $stmt->bindValue('quantity', $oli['qty'] );
      $stmt->bindValue('unipri', $oli['unit_price'] );

      $stmt->execute();
      print_r($oli);
      print_r($key);
      print_r($order_id);
      }

}catch(PDOException $e){
  echo 'Error Occured';
}
?>
