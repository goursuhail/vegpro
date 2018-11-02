<?php

function get_categories($conn){

    $query = 'SELECT * FROM `category`';

    $stmt = $conn->query($query);

    while($row = $stmt->fetch()){
      $categories[$row['category_id']] = $row['category_name'];
    }

    return $categories;

}
?>
<?php
  function get_status($conn){

    $query = 'SELECT * FROM `status`';

    $stmt = $conn->query($query);

    while($row = $stmt->fetch()){
      $status[$row['id']] = $row['status_type'];
    }

    return $status;

}

?>
