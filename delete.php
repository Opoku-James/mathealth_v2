<?php 
if(!empty($_GET["delid"])){
    include("db.php");
    $del    =  $_GET["delid"];
    $delsql = "DELETE FROM reg WHERE Anc = '$del'" ;
    $del_query = mysqli_query($conn,$delsql);
    if($del_query){
        session_start();
        $_SESSION["del_mesage"] = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
   
        Patient with <b>'.$del.'</b> has been deleted successfully .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      header("location:patienttabel.php");
    }
}

?>