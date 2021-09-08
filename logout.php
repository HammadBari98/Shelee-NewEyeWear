<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["login_user"]);
header("Location:index.php");
?>