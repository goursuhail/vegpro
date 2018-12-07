<?php session_start();

 require_once('header.php');

require_once('db.php');
?>


<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';
?>
<table>
  <tr>
    <th>name</th>
    <th>image</th>
    <th>unit_price</th>
    <th>qty</th>
    <th>price</th>
  </tr>
  <tr>

    <td><?php echo $cart_products[$row['product_id']]['name']; ?></td>
    <td><?php  echo  $cart_products['image']; ?></td>
    <td><?php echo   $cart_products['price']; ?></td>


  </tr>
</table>

<?php require_once('footer.php'); ?>
