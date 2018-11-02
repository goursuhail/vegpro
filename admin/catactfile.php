<?php require_once('db.php'); ?>
<?php
try{

  $query = "INSERT INTO `category` (category_name) VALUES(:catgor)";

  $stmt = $conn->prepare($query);

  $stmt->bindValue('catgor', $_GET['cate'] );

  $stmt->execute();
  header('location: catdisplay.php');
}catch(PDOException $e){

}

?>
