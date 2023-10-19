<?php 
session_start();
include("db.php");
$del_id = $_GET["deacct"];
$del_sql = "DELETE  FROM user_acct WHERE CONTACT = '$del_id'";
$del_run = mysqli_query($conn, $del_sql);
if($del_run){
    $_SESSION["delacct"] = '<div class="alert alert-danger" role="alert">
    Account deleteted successfully
   </div>';
    header("Location:acct.php");
}

?>