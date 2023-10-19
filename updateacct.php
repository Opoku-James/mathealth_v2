<?php 
session_start();
include("db.php");
$accupdate = $_POST["uid"];
$accname = $_POST["updatename"];
$accont = $_POST["cont"];
$accsql = "UPDATE user_acct SET USER_NAME ='$accname' WHERE CONTACT ='$accupdate'";
$accquery = mysqli_query($conn, $accsql);
if($accquery){
    $_SESSION["updateacct"] = '<div class="alert alert-warning" role="alert">
   Account '.$accname.' updated successfully
  </div>';
    header("Location:acct.php");
}


?>