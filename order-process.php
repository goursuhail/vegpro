<?php
session_start();
require_once('db.php');
require_once('mail.php');

try{

    if(! isset($_SESSION['user-front'])){
      // if user not logged in

      // check if email already registered
      $query = "SELECT * FROM `customer` where `email` = '".$_POST['email']."'";
      $stmt = $conn->query($query);
      $customer = $stmt->fetch(PDO::FETCH_ASSOC);
     /**echo '<pre>';
      print_r($customer);
      echo '</pre>';
      die();**/

     // redirect back if already registered
     if(is_array($customer)){
        header('Location:checkout.php?msg=user_exist');
        die();
     }

     // Add users if email is not registered
     $query = "INSERT INTO `customer`(`user_name`, `email`, `first_name`, `password`, `phone`) values(:uname, :mail, :name, :pass, :phne)";

      $stmt = $conn->prepare($query);

     //echo($query);

      $stmt->bindValue('uname', $_POST['usname'] );
      $stmt->bindValue('mail', $_POST['email'] );
      $stmt->bindValue('name', $_POST['nam'] );
      $stmt->bindValue('pass', $_POST['passwd'] );
      $stmt->bindValue('phne', $_POST['mobile'] );

      //print_r($_POST);

      $stmt->execute();



      $customer_id = $conn->lastInsertId();

   }else{

     $customer_id = $_SESSION['user-front']['customer_id'];

   }





    $query = "INSERT INTO `orders`(`status`,`billing_charges`, `shipping_charges`, `customer_id`,`address`, `state`, `pin_code`) values(:sta, :bill, :ship, :custom, :add, :states, :pinco)";

   $stmt = $conn->prepare($query);

   //echo($query);

   $total=0;

   foreach ($cart_products as $key => $od){

     $total+=$od['price'];
  }

   $stmt->bindValue('sta', '1');
   $stmt->bindValue('bill', $total );
   $stmt->bindValue('ship', 20.00 );
   $stmt->bindValue('states', $_POST['city'] );
   $stmt->bindValue('custom', $customer_id );
   $stmt->bindValue('add', $_POST['addr'] );
   $stmt->bindValue('pinco', $_POST['pinc'] );


  // print_r($customer_id);
  // print_r($total);
   $stmt->execute();





      $order_id = $conn->lastInsertId();
      //echo $order_id;


      foreach ($cart_products as $key => $oli) {

      $query = "INSERT INTO `order_line_items`(`order_id`, `product_id`, `qty`, `unit_price`) values(:ord, :proid, :quantity, :unipri)";

      $stmt = $conn->prepare($query);
      //echo($query);
      $stmt->bindValue('ord', $order_id );
      $stmt->bindValue('proid', $key );
      $stmt->bindValue('quantity', $oli['qty'] );
      $stmt->bindValue('unipri', $oli['unit_price'] );

      $stmt->execute();
      ?>
      //print_r($oli);
      //print_r($key);
      //print_r($order_id);





      <?php

      ob_start();
      ?>
      <h1>A new order has been received</h1>
      <table cellspacing="3" border="1px solid black" style='border-collapse="collapse";'>


        <tr>
          <th>Order Id</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Total price</th>
        </tr>
      <tr>

       <td><?php echo $order_id; ?></td>
         <td><?php echo $_POST['nam']; ?></td>
           <td><?php echo $oli['qty']; ?></td>
          <td><?php echo $oli['unit_price']; ?></td>
           <td><?php echo $total; ?></td>
      </tr>
      </table>

      <?php

      $mail_body = ob_get_contents();
      ob_end_clean();

      ?>



      <?php
      //$mail_body = "<h1>A new order has been received <br> Order ID ".$order_id." <br> Name $_POST['nam']; <br> Quantity ".$oli['qty']."; <br> Unit Price ".$oli['unit_price'].";  <br> Total Price ".$total."</h1>";
      $subject = "customer order has been recieved";
      mail_send('suhailgour143@gmail.com', $subject, $mail_body);



      }






      // remove products from CART
      unset($_SESSION['cart']);
      header('Location: thankyou.php?order_id='.$order_id);
      die();

}catch(PDOException $e){
  echo 'Error Occured';
}


?>
