<?php 
session_start();
include("../MAT_V2/includs/head.php") ?>
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
    <p style="color: gray;">Dashbord > Patient Vitals</p>
</div>
<div class="card rounded-0 mt-2 " style="width: 75%; max-height: 450px; overflow: auto; ">
<?php 
// session_start();
// if(isset($_SESSION["vital"])){
//     echo $_SESSION["vital"];
//     unset($_SESSION["vital"]);
// }
?>
   <div class="card-header bg-light">
   <p >Total pending vitals <span style="font-size:bold">
            <?php 
            include("db.php");
            $sql_vitals = "SELECT * FROM reg where token = 1";
            $vitals_result = mysqli_query($conn, $sql_vitals);
            $vitals_row = mysqli_num_rows($vitals_result);
            echo $vitals_row;
            ?>

</span></p>
   </div>
    <div class="card-body">
    <table class="table table-hover table-stripedk " style="font-size:14px">
        <thead class="table-darkk">
            <tr>
                <th>SN</th>
                <th>ANC Number</th>
                <th>NHIS Number</th>
                <th>Registration Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             $sql_vitals1 = "SELECT * FROM reg where token = 1";
             $vitals_result2 =mysqli_query($conn,$sql_vitals1 );
             $sql_vitals_rows =mysqli_num_rows($vitals_result2);
             if($sql_vitals_rows < 1){
                 ?>
                 <tr><td colspan="5"><?php echo"<b>No Pending vitals!!</b>" ?></td></tr>
                 <?php
             }else{
                $vitals_sql = "SELECT * FROM reg where token = 1 ORDER BY date_register";
                $vitals_query =mysqli_query($conn,$vitals_sql);
                $x = 0 ;
                if($vitals_query){
                    while ($vital_row = mysqli_fetch_assoc($vitals_query)) {
                       ?>
                        <tr>
                        <td><?php echo ++$x ?></td>
                        <td><?php echo $vital_row["Anc"] ?></td>
                        <td><?php echo $vital_row["nhis"] ?></td>
                        <td><?php echo $vital_row["date_register"] ?></td>
                        <td>
                            <a href="checkvitals.php?vitalid=<?php echo $vital_row["Anc"] ?>" class="btn btn-warning btn-sm">Check vitails  <ion-icon name="thermometer-outline"></ion-icon></a>
                        </td>
                </tr>
                       <?php
                    }
                }
             }
            
            ?>
           
           
        </tbody>
    </table>
    <a href="patienttabel.php" class="btn btn-primary w-100 rounded-0 btn-sm">View patient list</a>
    </div>
</div>


</div>
<?php include("../MAT_V2/includs/footer.php") ?>