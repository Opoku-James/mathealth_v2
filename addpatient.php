<?php include("../MAT_V2/includs/head.php");
include("addpfun.php")
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
    <p style="color: gray;">Dashbord > Patient registration</p>
</div>

<div class="card col-md-10 mt-4 ">
    <div class="card-header mb-2">
    PATIENT INFORMATION 
    </div>
    <div class="card-body">
    <form action="" method="post" class="regis_form">
        <!-- <div class="input_card mb-3">
            <input type="text" placeholder="Enter ANC Number" readonly value="<?php echo rand()  ?>" name="anc">
        </div> -->
        <div class="input_card mb-3">
            <input type="text" placeholder="Enter NHIS Number" name="nhis">
        </div>
        <div class="input_card mb-3">
            <input type="date" placeholder="Addimision date" name="doa">
        </div>
        <div class="input_card mb-3">
            <input type="text" placeholder="Location" name="loc">
        </div>
        <div class="input_card mb-3">
            <input type="text" placeholder="Education" name="edu">
        </div>
        <div class="input_card mb-3">
            <input type="text" placeholder="Age" name="age">
        </div>
       
        <div class="input_card mb-3">
            <input type="text" placeholder="Occupation" name="ocp">
        </div>
        <button type="submit" class="btn btn-danger btn-sm rounded-0" name="btn1">SUBMIT</button>
        <button type="button" id="bton" class="btn btn-primary btn-sm rounded-0">RESET</button>
        <a href="patienttabel.php" class="btn btn-warning btn-sm rounded-0">View patient list</a>
        </form>
    </div>
</div>

</div>

<?php include("../MAT_V2/includs/footer.php") ?>