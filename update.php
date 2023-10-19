<?php 
   if(isset($_POST["btn4"])){
    include("db.php"); 
    global $conn;
        $update = $_POST["hiden_text"];
        $loc1 = $_POST["location"];
        $updatesql = "UPDATE reg SET loc = '$loc1' WHERE Anc = '$update'";
        $updatequ = mysqli_query($conn,$updatesql); 
        if($updatequ){
            echo "records updated";
        }
        // header("location:edit.php")
   }
  
    
?> 