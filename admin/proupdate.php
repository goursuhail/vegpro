<?php require_once('db.php'); ?>

<?php
print_r($_POST);
  try{

    $query = "UPDATE `vegetable`.product SET `name` = :nam, price = :pay, stock = :stk, category_id = :cat  WHERE product_id = :vid";

    $stmt = $conn->prepare($query);

    $stmt->bindValue('nam', $_POST['usname'] );
    $stmt->bindValue('pay', $_POST['pric'] );
    $stmt->bindValue('stk', $_POST['stoc'] );
      $stmt->bindValue('cat', $_POST['category'] );
    $stmt->bindValue('vid', $_POST['product_id'] );
    //print_r($_GET);
    $stmt->execute();
    //print_r ($query);


    echo '<pre>';
    print_r($_FILES);


    $target = 'uploads/';

    $pathinfo = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

    $filename = 'product_item'.$_POST['product_id'];

    $target_file = $target.$filename.'.'.$pathinfo;

    echo $target_file;

    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

    $query = "UPDATE `vegetable`.product SET  `product_image` = :pimg  WHERE product_id = :vid";

    $stmt = $conn->prepare($query);
    //print_r($query);

    $stmt->bindValue('pimg', $target_file );
    $stmt->bindValue('vid', $_POST['product_id'] );

  //  print_r($_POST);
    $stmt->execute();




  header('location: prodisplay.php');

  }catch(PDOException $e){

  }
?>
