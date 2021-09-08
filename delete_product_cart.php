<?php 

include('connection.php');

$id=$_GET['id'];

$deleteQuery="delete from cart where cart_id=$id";

$query=mysqli_query($mysqli,$deleteQuery);


if ($query) {
    ?>
    <script>
    alert('Deleted item Successfully');  
    
    </script>

  <?php
  header('location:cart.php');  
  } else {
      ?>
      <script>
    alert('Not Deleted');  
      </script>

    <?php
  }


?>

