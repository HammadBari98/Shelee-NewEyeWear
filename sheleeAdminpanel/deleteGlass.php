<?php 

include('connection.php');

$id=$_GET['id'];

$deleteQuery="delete from glasses_table where glass_id=$id";

$query=mysqli_query($mysqli,$deleteQuery);


if ($query) {
    ?>
    <script>
    alert('Deleted Glass Successfully');  
    
    </script>

  <?php
  header('location:glassList.php');  
  } else {
      ?>
      <script>
    alert('Not Deleted');  
      </script>

    <?php
  }


?>
