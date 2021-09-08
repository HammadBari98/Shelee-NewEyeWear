<?php 

include('connection.php');

$id=$_GET['id'];

$deleteQuery="delete from lense_table where lense_id=$id";

$query=mysqli_query($mysqli,$deleteQuery);


if ($query) {
    ?>
    <script>
    alert('Deleted Lense Successfully');  
    
    </script>

  <?php
  header('location:lenseList.php');  
  } else {
      ?>
      <script>
    alert('Not Deleted');  
      </script>

    <?php
  }


?>
