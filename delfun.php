<?php 
 session_start();
require_once "db.php";
if(isset($_POST["delivery"])){
    $id       =       $_POST["paid"];
    $breath  =       $_POST["breath"] ;
    $rate    =       $_POST["rate"];
    $skin    =       $_POST["skin"];
    $resus   =       $_POST["resus"];
    $temp    =       $_POST["temp"];
    $feeding =       $_POST["feeding"];
    $outcome =       $_POST["outcome"];
    $genda   =       $_POST["genda"];
    $weight  =       $_POST["weight"];
    $lenght  =       $_POST["lenght"];
    $head_c  =       $_POST["hc"];
    $vita    =       $_POST["vitamin"];
    $infant  =       $_POST["infant"];
    $eye     =       $_POST["eye"];
    $cord    =       $_POST["cord"];
    $comp    =       $_POST["comp"];
    $oxy     =       $_POST["oxy"];
    $time_oxy=       $_POST["time_oxy"];
    $mode    =       $_POST["mode"];
    $time_pla =      $_POST["time_pla"];
    $state   =       $_POST["state"];
    $sql      =      "INSERT INTO delivery(ID,Breathing,Resp_rate,skin_contact,Resuscitation,Temp,Breastfeeding,Birth_outcome,Genda,Weight,Lenght,Head_circum,Vitamin_k1,Infant_ARV,Eye_care,Cord_care,	Complication,Oxytocin,Time_oxytocin_given,Mode_of_del,Time_placenta_del,State_of_placenta) 
                     VALUES('$id','$breath','$rate','$skin','$resus','$temp','$feeding','$outcome','$genda','$weight','$lenght','$head_c','$vita','$infant','$eye','$cord','$comp','$oxy','$time_oxy','$mode','$time_pla','$state')";
    $run   =       mysqli_query($conn, $sql);
     if($run){
         $_SESSION["deli"] = 'Success';
         header("Location:delivery.php");
     }else{
         header("location:del.php");
         $_SESSION["delivery1"] = "Sorry Patient not registered";
     }
 
}

?>