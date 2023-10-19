<?php 
 session_start();
if(isset($_POST["vit"])){
    include("db.php");
   global $conn;
   $pid         =  $_POST["pid"] ;
//    $nhis        =   $_POST["nhiss"];
   $gravida     =   $_POST["gravi"];
   $parity      =   $_POST["parity"];
   $visit       =   $_POST["visite"];
   $gest        =   $_POST["gest"];
   $ipt         =   $_POST["ipt"];
   $hb          =   $_POST["hb"];
   $blood       =   $_POST["bg"];
   $cort        =   $_POST["cort"];
   $syp         =   $_POST["syp"];
   $hebb        =   $_POST["hebb"];
   $pmtct       =   $_POST["pm"];
   $parto       =   $_POST["parto"];
   $lie         =   $_POST["lie"];
   $perin       =   $_POST["perinium"];
   $bp          =   $_POST["bp"];
   $puls        =   $_POST["puls"];
   $temp        =   $_POST["temp"];
   $fhr         =   $_POST["fhr"];
   $cerv        =   $_POST["cervical"];
   $sql         =   "INSERT INTO vitals(Patient_id, gravida,Parity,anc_visit,gestation,ipt,hb,blood_grp,anc_count,syphilis,hebb,pmtct,partograph,lie,perinium,bp,pulse,temp,fhr,cervical) 
   VALUES('$pid',$gravida,$parity,$visit,$gest,$ipt,'$hb','$blood','$cort','$syp','$hebb','$pmtct','$parto','$lie','$perin','$bp','$puls','$temp','$fhr','$cerv')";
   $run        =  mysqli_query($conn, $sql);
   if($run == TRUE){
      $_SESSION["vital"] = 'Vitals checked';
      header("Location:vitals.php");
   }
}