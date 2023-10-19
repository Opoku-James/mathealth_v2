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
            <p style="font-size:13px">Dashbord > Edit user account</p>
            <div class="container-fluid col-md-10 ">
                <div class="card rounded-0  style="height: 400px; overflow: auto;">
                    <div class="card-header d-flex justify-content-between"">
            <h6>Edite user account <ion-icon name=" create-outline"></ion-icon> </h6>


                        <a href="acct.php" class="btn btn-danger btn-sm"><i class='bx bx-arrow-back'></i> Back to
                            users</a>

                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET["eid"])) {
                            include("db.php");
                            $edid = $_GET["eid"];
                            $esql = "SELECT * FROM user_acct WHERE CONTACT = '$edid'";
                            $equery = mysqli_query($conn, $esql);
                            if ($equery) {
                                $userrow = mysqli_fetch_array($equery);
                                ?>
                                <form action="" method="">

                                    <div class="input_box mb-2">
                                        <label for="username">Full name</label>
                                        <input type="text" value="<?php echo $userrow["USER_NAME"] ?>" id="updatename"  class="form-control form-control-smm" style="font-size: 13px">
                                    </div>
                                    <div class="input_box mb-2">
                                        <label for="contact">Contact</label>
                                        <input type="text" name="cont" value="<?php echo $userrow["CONTACT"] ?>" class="form-control form-control-smm" style="font-size: 13px">
                                    </div>
                                    <div class="input_box mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" value="<?php echo $userrow["EMAIL"] ?>" name="email" class="form-control form-control-smm" style="font-size: 13px">
                                    </div>
                                    <div class="input_box mb-3">
                                        <label for="rnk">User Rank</label>
                                        <input type="text" value="<?php echo $userrow["rnk"] ?>" name="enk" class="form-control form-control-smm" style="font-size: 13px">
                                    </div>
                                    <input type="text" hidden id="hid" value="<?php echo $userrow["CONTACT"] ?>">
                                    <!-- <button type="submit" id="accbtn" class="btn btn-primary  w-100">Update</button> -->
                                    <a href="updateacct.php" class="btn btn-success btn-sm rounded-0 w-100 btn_update">UPDATE RECORDS</a>
                                </form>
                                <?php
                            }
                        }


                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include("../MAT_V2/includs/footer.php") ?>
<script src="js/jquery-3.6.0.min.js"></script>
