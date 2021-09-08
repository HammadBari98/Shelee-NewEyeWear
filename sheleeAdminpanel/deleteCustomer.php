<?php 

include('connection.php');

$id=$_GET['id'];

$deleteQuery="delete from customers where customer_id=$id";

$query=mysqli_query($mysqli,$deleteQuery);


if ($query) {
    ?>
    <script>
    alert('Deleted customer Successfully');  
    
    </script>

  <?php
  header('location:customerList.php');  
  } else {
      ?>
      <script>
    alert('Not Deleted');  
      </script>

    <?php
  }


?>

