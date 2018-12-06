<?php require_once('db.php'); ?>

<?php
try{
  $query = "INSERT INTO `product` (name, price, stock, category_id, description) VALUES(:nick, :pay, :stk, :cat, :des)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('nick', $_POST['usname'] );
  $stmt->bindValue('pay', $_POST['pric'] );
  $stmt->bindValue('stk', $_POST['stoc'] );
  $stmt->bindValue('cat', $_POST['category'] );
  $stmt->bindValue('des', $_POST['desc'] );

  //print_r($_GET);
  $stmt->execute();





  $target = 'uploads/';

  $pathinfo = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  $product_id = $conn->lastInsertId();
  $filename = 'product_item'.$product_id;

  $target_file = $target.$filename.'.'.$pathinfo;

  echo $target_file;

  move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

  $query = "UPDATE `vegetable`.product SET  `product_image` = :pimg  WHERE product_id = :vid";

  $stmt = $conn->prepare($query);
  //print_r($query);

  $stmt->bindValue('pimg', $target_file );
  $stmt->bindValue('vid', $product_id );

//  print_r($_POST);
  $stmt->execute();

 header('location: prodisplay.php');
}catch(PDOException $e){

}
?>
