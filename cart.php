<?php session_start();

require_once('db.php');
require_once('header.php');


?>


<?php

/**echo '<pre>';
print_r($cart_products);
echo '</pre>';
**/
?>
<div class="container">
<table>
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Unit Price</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Remove item</th>


  </tr>

  <?php
    $total=0;
    //$cart_products = array_keys($_SESSION['cart']);
      foreach ($cart_products as $key => $c_p) {
        $total+=$c_p['price'];


        ?>
  <tr>

    <td><?php echo $c_p['name']; ?></td>
    <td><img src="assests/<?php echo $c_p['image']; ?>" height="25%" width="25%"</td>
    <td><?php echo   $c_p['unit_price']; ?></td>
    <td><?php echo   $c_p['qty']; ?></td>
    <td><?php echo   $c_p['price']; ?></td>
    <td><a href="cart-remove.php?id=<?php echo $key; ?>"><strong>click here</strong></a></td>



  </tr>


<?php
}
?>

<tr>

  <td colspan="5" align="right">Total-price=<?php echo $total; ?></td>
</tr>



</table>
<div class="buttons cart-button">
    <a class="btn btn-primary" href="Checkout.php">Checkout</a>
</div>

</div>





<?php require_once('footer.php'); ?>
