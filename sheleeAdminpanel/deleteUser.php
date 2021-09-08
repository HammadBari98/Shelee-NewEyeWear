<?php 

include('connection.php');

$id=$_GET['id'];

$deleteQuery="delete from users where user_id=$id";

$query=mysqli_query($mysqli,$deleteQuery);


if ($query) {
    ?>
    <script>
    alert('Deleted User Successfully');  
    
    </script>

  <?php
  header('location:userList.php');  
  } else {
      ?>
      <script>
    alert('Not Deleted');  
      </script>

    <?php
  }


?>
