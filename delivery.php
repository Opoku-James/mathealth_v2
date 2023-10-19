<?php 
session_start();
include("../MAT_V2/includs/head.php") ?>
<div class="head_title">
    <div class="logo"><img src="images/downloadfile.bin.png" alt=""></div>
    <div class="right_links">
        <p>Wellcome: 
            <?php 
            
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
    <p style="color: gray;">Dashbord > Delivery list</p>
</div>
<div class="card  mt-5 rounded-0" style="width: 80%; max-height:500px; overflow: auto;">

   <div class="card-header">
   <p >Total pending delivery <span>
            <?php 
            include("db.php");
            $sql1_vitals = "SELECT * FROM reg where token = 2";
            $vitals1_result = mysqli_query($conn, $sql1_vitals);
            $vitals_row1 = mysqli_num_rows($vitals1_result);
            echo $vitals_row1;
            ?>

    </span></p>
   </div>
    <div class="card-body">
    <table class="table table-hover table-stripedh  table-bordere" style="font-size:13px">
        <thead class="table-darkh">
            <tr>
                <th>SN</th>
                <th>ANC Number</th>
                <th>NHIS Number</th>
                <th>Registration Date</th>
                <th>Vitals status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             $sql_vitals1 = "SELECT * FROM reg where token = 2";
             $vitals_result2 =mysqli_query($conn,$sql_vitals1 );
             $sql_vitals_rows =mysqli_num_rows($vitals_result2);
             if($sql_vitals_rows < 1){
                 ?>
                 <tr><td colspan="6"><?php echo"<b>No Pending deliveries!!</b>" ?></td></tr>
                 <?php
             }else{
                $del_sql = "SELECT * FROM reg where token = 2 ORDER BY date_register";
                $del_query =mysqli_query($conn,$del_sql);
                $x = 0 ;
                if($del_query){
                    while ($del_row = mysqli_fetch_assoc($del_query)) {
                       ?>
                        <tr>
                        <td><?php echo ++$x ?></td>
                        <td><?php echo $del_row["Anc"] ?></td>
                        <td><?php echo $del_row["nhis"] ?></td>
                        <td><?php echo $del_row["date_register"] ?></td>
                        <td><?php if($del_row["token"] == 1){
                                echo'<p  style="padding:1px; font-size:10px; border-radius: 40px; color:#fff; background-color:#f08080; width:40%;">pending</p>';
                            } else echo'<p  style="padding:1px; font-size:10px; border-radius:  40px; color:#fff;background-color:#20b299; width:40%;">checked</p>'
                            ?></td>
                        <td>
                            <a href="del.php?delid=<?php echo $del_row["Anc"] ?>" class="btn btn-danger btn-sm">Conduct delivery  <ion-icon name="thermometer-outline"></ion-icon></a>
                        </td>
                </tr>
                       <?php
                    }
                }
             }
            
            ?>
           
           
        </tbody>
    </table>
    <a href="patienttabel.php" class="btn btn-info  btn-sm w-100 rounded-0">View patient list</a>
    </div>
   
</div>


</div>
<?php include("../MAT_V2/includs/footer.php") ?>