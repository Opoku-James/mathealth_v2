<?php include("../MAT_V2/includs/head.php");
include("addpfun.php");

?>
<div class="head_title">
    <div class="logo"><img src="images/downloadfile.bin.png" alt=""></div>
    <div class="right_links">
        <p>Wellcome: 
            <?php 
            //  session_start();
           if(isset($_SESSION["username"])){
            echo $_SESSION["username"];
           }
            
            ?>
        </p>
        <ul>
            <li><a href="">Data links</a>
               
        </li>
            <li><a href="">Logout</a>
            <ul class="sub_menu_2 shadow-sm bg-white">
                    <li><a href=""><ion-icon name="person-outline"></ion-icon> <span>Users profile</span></a></li>
                    <li><a href="logout.php"><ion-icon name="log-out-outline"></ion-icon> <span>Logout</span></a></li>
                </ul>
        </li>
        </ul>
    </div>
</div>
<div class="pre_loader" >
   <img src="images/loading-gif.gif" alt="">
        
        </div>
<div class="main_bord">
  
<div class="main_bord_title">
    <p style="color: gray;">Dashbord > Patient Information</p>
</div>

<div class="table-responsive bt-5  bg-white  " style="width: 70%;height: 450px; overflow: auto;">
<div class="card  " >
   
   <div class="card-header">
   EDIT PATIENT INFORMATION <ion-icon name="create-outline"></ion-icon>
   </div>
   <?php 
   if(isset($_GET["editid"])){
       include("db.php");
       $edit_id = $_GET["editid"];
       $editsql = "SELECT * FROM reg WHERE Anc = '$edit_id'";
       $editquery = mysqli_query($conn,$editsql);
       $edit_row = mysqli_fetch_array($editquery);
       ?>
       <div class="card-body">
   <form action="update.php" method="post" class="updateform" >
       <div class="input_card mb-3 " >
       <label for="">ANC Number</label>
           <input type="text" class="bg-light text-secondary" style=" border: none;"  readonly value="<?php echo $edit_row["Anc"] ?>" name="anc">
       </div>
       <div class="input_card mb-3">
       <label for="">NHIS Number</label>
           <input type="text"  value="<?php echo $edit_row["nhis"] ?>" name="nhis">
       </div>
       <div class="input_card mb-3">
       <label for="">Date of Admission</label>
           <input type="date"  value="<?php echo $edit_row["Dob"] ?>" name="doa">
       </div>
       <div class="input_card mb-3">
       <label for="">Location</label>
           <input type="text"  name="location" value="<?php echo $edit_row["loc"] ?>" >
       </div>
       <div class="input_card mb-3">
       <label for="">Education</label>
           <input type="text" name="edu" value="<?php echo $edit_row["edu"] ?>" >
       </div>
       <div class="input_card mb-3">
       <label for="">Age</label>
           <input type="text"  name="age" value="<?php echo $edit_row["age"] ?>" >
       </div>
      
       <div class="input_card mb-3">
       <label for="">Occupation</label>
           <input type="text"  name="ocp" value="<?php echo $edit_row["ocu"] ?>" >
       </div>
       <input type="text" hidden name="hiden_text"   value="<?php echo $edit_row["Anc"] ?>" >
       <button type="submit" name="btn4" class="btn btn-danger btn-sm">UPDATE RECORDS</button>
       <!-- <a href="update.php?upid=<?php echo $edit_row["Anc"] ?>" name="btn4" class="btn btn-danger btn-sm update_1"><button  name="btn4"  type="submit">submit</button></a> -->
       
       <a href="patienttabel.php" class="btn btn-primary btn-sm">VIEW PATIENT LIST</a>
       </form>
      
   </div>
       
       <?php
   }
   ?>


   
   
</div>
</div>



</div>
<?php include("../MAT_V2/includs/footer.php") ?>