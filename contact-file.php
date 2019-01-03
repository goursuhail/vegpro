<?php require_once('db.php');
      require_once('header.php');



      try{
        $query = "INSERT INTO `customer_request`(`name`, `email`, `subject`, `message`) VALUES(:name, :email, :subject, :message)";

        $stmt = $conn->prepare($query);
        
        $stmt->bindValue('name', $_POST['nam'] );
        $stmt->bindValue('email', $_POST['mail'] );
        $stmt->bindValue('subject', $_POST['sub'] );
        $stmt->bindValue('message', $_POST['mess'] );


        $stmt->execute();

      }catch(PDOException $e){

      }
 ?>





 <?php require_once('footer.php'); ?>
