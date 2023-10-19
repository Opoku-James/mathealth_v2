<?php 
session_start();
if(isset($_POST["resetbtn"])){
    include("db.php");
    $old_password   =   $_POST["opass"];
    $new_password   =   $_POST["npass"];
    $conf_new_pasword = $_POST["npass2"];
    $check_old_password = "SELECT * FROM user_acct WHERE USER_PASSWORD = '$old_password'";
    $chech_run = mysqli_query($conn , $check_old_password);
    if($chech_run){
        $check_row = mysqli_fetch_array($chech_run);
        if($old_password){
        if(password_verify($old_password , $check_row["USER_PASSWORD"])){
        }
            $_SESSION["checked"] = "Incorret old passward!!";
            header("Location: passwordreset.php");
        };
    if($new_password != $conf_new_pasword){
        $_SESSION["passnot"] = "Old and new Password did not matched!!";
            header("Location: passwordreset.php"); 
    }
    }
}

?>