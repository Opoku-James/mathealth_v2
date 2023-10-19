<?php 
session_start();
include("../MAT_V2/includs/head.php"); 
include("db.php");

?>
<div class="pre_loader" >
   <img src="images/loading-gif.gif" alt="">
        
        </div>
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
<div class="main_bord">
    <h5 style="padding-top: 15px;">Wellcome to mathealth management system</h5>
    <h5>SYSTEM DASHBORD</h5>
   <div class="new_links">
   <a href="patienttabel.php" class="btn btn-primary btn-sm">Add new patient <i class="fa fa-plus"></i></a>
   <a href="acct.php" class="btn btn-success btn-sm">Create new account <i class='bx bx-user-plus'></i></a>
   <a href="passwordreset.php" class="btn btn-danger btn-sm">Reset password <i class='bx bx-user-plus'></i></a>
   </div>
<div class="main_bord_cards">
    <div class="cards_1 shadow ">
  
   <!-- <ion-icon name="clipboard-outline"></ion-icon> -->
   <i class='bx bx-first-aid bx-lg' style="color:gray"></i>
   
    <a href=""><p>Data CS <span>0</span></p></p></a>
    </div>
    <div class="cards_1 shadow">
    
    <!-- <ion-icon name="people-outline" style=" font-size: 70px;"></ion-icon> -->
    <i class='bx bx-user-plus bx-lg' style="color:gray"></i>
    <a href=""><p >Total Registration <span>
    <?php 
    include("db.php");
    $sql_row = "SELECT * FROM reg";
    $row_query =mysqli_query($conn, $sql_row);
    $row_num = mysqli_num_rows($row_query);
    echo $row_num 
    ?>

    </span></p></a>
    </div>
    <div class="cards_1 shadow">
    <!-- <ion-icon name="copy-outline"></ion-icon> -->
    <i class='bx bx-bed bx-lg' style="color:gray"></i>
    <a href=""><p>Total delivery <span>0</span></p> </a>
    </div>
</div>

<div class="main_bord_cards">
    <div class="cards_1 shadow">
    <ion-icon name="medkit-outline"></ion-icon>
    <a href=""><p>Maternal Deaths <span>0</span></p></p></a>
    </div>
    <div class="cards_1 shadow">
    <ion-icon name="book-outline"></ion-icon>
    <a href=""><p>Total Stillbirths <span>0</span></p></p></a>
    </div>
    <div class="cards_1 shadow">
    
    <ion-icon name="flask-outline"></ion-icon>
    <a href=""><p>Total referals <span>0</span></p></a>
    </div>
</div>
</div>
<?php include("../MAT_V2/includs/footer.php") ?>