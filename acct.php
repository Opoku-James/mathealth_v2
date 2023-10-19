<?php 
session_start();
include("../MAT_V2/includs/head.php") ; 

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
            <ul class="sub_menu_2  bg-white">
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
<div class="acct_body">
    <div class="card position-fixed h-100" style="width:240px">
        
    <div class="card-header h-20">Math Health</div>
    <div class="card-body">
        <ul class="nav_ul">
            <li><a href="#"><i class='bx bx-user-plus' ></i><span>Creat user account</span></a></li>
            <li><a href=""><i class='bx bx-user-x'></i><span>View block users</span></a></li>
            
        </ul>
    </div>
    <div class="card-footer h-50">
        
    </div>
    </div>
    <div class="right_card">
    <div class="main_bord_title bg-light ">
    <p style="font-size:13px">Dashbord > Create user accounts</p>
    <div class="container w-100" >
    <div class="card rounded-0" style="; overflow: auto;">
        <div class="card-header d-flex justify-content-between"">
            <h6>Create new user account <i class='bx bx-user-plus'></i></h6>
            <!-- <button type="button" >TEXT</button> -->
            <button type="button" class="btn btn-primary btn-sm rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add new user <i class='bx bx-user-plus' ></i> 
</button>
            <a href="patienttabel.php" class="btn btn-danger btn-sm"><i class='bx bx-arrow-back'></i> Back to dashbord</a>

        </div>
        <div class="card-body">
            <?php 
            if(isset($_SESSION["updateacct"])){
                echo $_SESSION["updateacct"] ;
                unset($_SESSION["updateacct"]);
            };

            if(isset($_SESSION["delacct"])){
                echo $_SESSION["delacct"] ;
                unset($_SESSION["delacct"]);
            }
            ?>
           <table id="acct_table" class="table table-hover table-stripedd">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ckecked</th>
                    <th>Image</th>
                    <th>Full name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Rank</th>
                    <th>Status</th>
                    <th>
                       Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include("db.php");
                $accq = "SELECT * FROM user_acct";
                $accrun = mysqli_query($conn, $accq);
                $y = 1;
                if($accrun){
                if(mysqli_num_rows($accrun) < 1){
                    ?> <tr><td colspan="9"><?php echo "<strong>No records found</strong>"?></td></tr><?php 
                } else{
                    while($result = mysqli_fetch_assoc($accrun)){
                        ?>
                        <tr>
                    <td><?php echo $y++ ?></td>
                    <td> <input class="form-check-input delckecked" type="checkbox" ></td>
                    <td>image</td>
                    <td><?php echo $result["USER_NAME"] ?></td>
                    <td><?php echo $result["CONTACT"] ?></td>
                    <td><?php echo $result["EMAIL"] ?></td>
                    <td><?php echo $result["rnk"] ?></td>
                    <td>Active</td>
                    <td>
                    <a href="edituseracct.php?eid=<?php echo $result["CONTACT"] ?>" class="btn btn-success btn-sm rounded-0"><ion-icon name="create-outline"></ion-icon> Edite</a>
                    <a href="" class="btn btn-warning btn-sm rounded-0"><ion-icon name="eye-outline"></ion-icon>View</a>
                    <!-- <button type="submit" value="<?php echo $result["CONTACT"] ?>" class="btn btn-danger btn-sm rounded-0"><ion-icon name="close-outline"></ion-icon>Block</button> -->
                    <a href="deleteacct.php?deacct=<?php echo $result["CONTACT"] ?>" class="btn btn-danger btn-sm rounded-0 delid"><ion-icon name="close-outline"></ion-icon> Block</a>
                    </td>
                </tr>
                        <?php
                    }
                }
                    
                }
                
                ?>
                
               
            </tbody>
           </table>
           <button id="delbtn1" class="btn btn-secondary btn-sm rounded-0"><ion-icon name="close-outline"></ion-icon>Delete seleted</button>
        </div>
    </div>
    </div>
</div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade rounded-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">New users account details <i class='bx bx-group'></i></h6>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <form action="accfun.php" id="myform" method="post">
      <div class="modal-body">
        
            <div class="acc_inputs mb-2">
                <label for="fullname" class="fs-9">Fullname</label>
                <input type="text"  placeholder="Enter fullname" id="fname" name="fname" class="form-control form-control-sm  border-lightgray">
                <span class="msg" style="font-size: 11px; color:red;"></span>
            </div>
            <div class="acc_inputs mb-2">
                <label for="contact" class="fs-9">Contact</label>
                <input type="text" placeholder="Enter contact" name="cont" class="form-control form-control-sm  border-lightgray">
            </div>
            <div class="acc_inputs mb-2">
                <label for="email" class="fs-9">Email Adrress</label>
                <input type="email" placeholder="Enter email " name="email" class="form-control form-control-sm  border-lightgray">
            </div>
            <div class="acc_inputs mb-2">
                <label for="rank" class="fs-9">Rank</label>
                <input type="text" placeholder="Enter rank " name="rnk" class="form-control form-control-sm  border-lightgray">
            </div>
            <div class="acc_inputs mb-2">
                <label for="password" class="fs-9">Password</label>
                <input type="password" placeholder="Enter password " name="pass" class="form-control form-control-sm  border-lightgray">
            </div>
            <div class="acc_inputs mb-2">
                <label for="cpass" class="fs-9">Confirm password</label>
                <input type="password" placeholder="Confirm password " name="cpass" class="form-control form-control-sm  border-lightgray">
            </div>
        
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close <ion-icon name="close-outline"></ion-icon></button>
        <button type="submit" id="btn11" name="subbtn" class="btn btn-primary btn-sm rounded-0">Submit <ion-icon name="save-outline"></ion-icon></button>
        <button type="reset" class="btn btn-danger btn-sm rounded-0" >Reset <i class='bx bx-reset'></i></button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include("../MAT_V2/includs/footer.php") ?>


