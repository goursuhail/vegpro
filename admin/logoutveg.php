<?php
  session_start();

  session_destroy();
  header('location: loginveg.php?message=logout');
?>
