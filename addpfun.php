<?php 
// session_start();
if(isset($_POST["btn1"])){
    include("db.php");
    // $anc    =   mysqli_real_escape_string($conn, $_POST["anc"]);
    $nhis   =   mysqli_real_escape_string($conn, $_POST["nhis"]);
    $addm_date   =   mysqli_real_escape_string($conn, $_POST["doa"]);
    $loc   =   mysqli_real_escape_string($conn, $_POST["loc"]);
    $edu   =   mysqli_real_escape_string($conn, $_POST["edu"]);
    $age   =   mysqli_real_escape_string($conn, $_POST["age"]);
    $ocp   =   mysqli_real_escape_string($conn, $_POST["ocp"]);
    $dup    =  "SELECT * FROM reg WHERE nhis = $nhis";
    $dup_run = mysqli_query($conn, $dup);
    $check_dup = mysqli_num_rows($dup_run);
    if($check_dup == 1){
      
      $_SESSION["msg1"] = "Patient with NHIS number $nhis already exist";
      header('addpatient.php');
     
    }else
    {
      $sql_query = "INSERT INTO reg( nhis, dob,loc, edu, age, ocu) 
      VALUES($nhis,'$addm_date','$loc','$edu',$age,'$ocp')";
        $result = mysqli_query($conn, $sql_query);
        if($result == true){
          session_start();
        $_SESSION["reg_message"] = '
        Inserted successfully';
        header("location: patienttabel.php");
}
}
    }
   


?>