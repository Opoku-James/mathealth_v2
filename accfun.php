<?php 
session_start();
if(isset($_POST["subbtn"])){
  include("db.php");
  $fname = $_POST["fname"];
  $cont = $_POST["cont"];
  $email = $_POST["email"];
   $rnak = $_POST["rnk"];
   $cpass = password_hash($_POST["cpass"], PASSWORD_DEFAULT);
   $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
   $passql = "SELECT * FROM user_acct WHERE EMAIL = '$email'";
   $passquery = mysqli_query($conn, $passql);
   if(mysqli_num_rows($passquery)> 0){
    $_SESSION["em"] = "Email already used, please try another";  
    header("Location: acct.php");
   }
   else{
    $log_sql = "INSERT INTO user_acct (USER_NAME, CONTACT, EMAIL, USER_PASSWORD, COM_PASSWORD, rnk)
                VALUES('$fname','$cont','$email','$password','$cpass','$rnak')";
    $log_run = mysqli_query($conn,$log_sql);
if($log_run){
    $_SESSION["acct"] = "Account for $fname created successfully";  
    header("Location: acct.php");
} 
   }
}
?>