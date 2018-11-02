<?php require_once('db.php'); ?>

<?php
  try{

    $query = "UPDATE `vegetable`.category SET `category_name` = :gory WHERE category_id = :vid";

    $stmt = $conn->prepare($query);

    $stmt->bindValue('gory', $_GET['cate'] );
    $stmt->bindValue('vid', $_GET['category_id'] );
    //print_r($_GET);
    $stmt->execute();
    //print_r ($query);

    header('location: catdisplay.php');

  }catch(PDOException $e){

  }
?>
