<?php
session_start();
include("../MAT_V2/includs/head.php"); ?>
<div class="head_title">
    <div class="logo"><img src="images/downloadfile.bin.png" alt=""></div>
    <div class="right_links">
        <p>Wellcome:
            <?php
            //  session_start();
            if (isset($_SESSION["username"])) {
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
<div class="pre_loader">
    <img src="images/loading-gif.gif" alt="">

</div>
<div class="acct_body">
    <div class="card position-fixed h-100" style="width:240px">

        <div class="card-header h-20">Math Health</div>
        <div class="card-body">
            <ul class="nav_ul">
                <li><a href="#"><i class='bx bx-user-plus'></i><span>Creat user account</span></a></li>
                <li><a href=""><i class='bx bx-user-x'></i><span>View block users</span></a></li>

            </ul>
        </div>
        <div class="card-footer h-50">

        </div>
    </div>
    <div class="right_card">
        <div class="main_bord_title bg-light ">
            <p style="font-size:13px">Dashbord > Reset user password</p>
            <div class="container-fluid col-md-10 ">
                <div class="card rounded-0  style="height: 400px; overflow: auto;">
                    <div class="card-header d-flex justify-content-between"">
            <h6>Reset password <ion-icon name=" create-outline"></ion-icon> </h6>


                        <a href="acct.php" class="btn btn-danger btn-sm"><i class='bx bx-arrow-back'></i> Back to
                            users</a>

                    </div>
                    <div class="card-body">
                       
                                <form action="reset.php" method="post" style="font-size: 12px">
                                <div class="col-md-12 d-flex justify-content-between" >
                               <div class="reset_card w-25">
                               <input type="password" class="form-control" name="opass" style="font-size: 13px;"  placeholder="Enter old password">
                              
                               </div>

                               <div class="reset_card w-25">
                               <input type="password" class="form-control" name="npass" style="font-size: 13px" placeholder="Enter new password">
                               
                               </div>
                               
                               <div class="reset_card w-25">
                               <input type="password" class="form-control " name="npass2" style="font-size: 13px" placeholder="Confirm new password">
                              
                               </div>
                              
                                <button type="submit" name="resetbtn"  class="btn btn-primary btn-sm">Reset</button>
                                </div>
                                   
                                </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include("../MAT_V2/includs/footer.php") ?>
<script src="js/jquery-3.6.0.min.js"></script>