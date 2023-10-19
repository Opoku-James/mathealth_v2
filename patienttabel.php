<?php 
session_start();
include("../MAT_V2/includs/head.php") ;
include("db.php");
include("delete.php");
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
<div class="main_bord">
<div class="main_bord_title bg-light fs-6">
    <p >Dashbord > Patient registration</p>
</div>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->
<div class="sess mt-3" style="width:95%">
<?php 
// session_start();
// if(isset($_SESSION["reg_message"])){
//     echo $_SESSION["reg_message"] ;
//     unset($_SESSION["reg_message"]);
// }

if(isset($_SESSION["del_mesage"])){
    echo $_SESSION["del_mesage"] ;
    unset($_SESSION["del_mesage"]);
}
?>
</div>


<div class="main_bord_title mb-4" style="text-align: center;">
<a href="addpatient.php" class="btn btn-primary btn-sm ">Add new registration <ion-icon name="add-outline"></ion-icon></a>
    <a href="dashbord.php" class="btn btn-danger btn-sm">Dashbord <ion-icon name="chevron-back-outline"></ion-icon></a>
    
    <a href="vitals.php" class="btn btn-warning btn-sm">Pending vitals 

    <?php 
    $sql_row = "SELECT * FROM reg where token = 1";
    $row_query =mysqli_query($conn, $sql_row);
    $row_num = mysqli_num_rows($row_query);
    echo $row_num
    ?>
    </a>
    
   
   
    <a href="delivery.php" class="btn btn-secondary btn-sm">Pending delivery

    <?php 
    $sql_row = "SELECT * FROM reg where token = 2";
    $row_query =mysqli_query($conn, $sql_row);
    $row_num = mysqli_num_rows($row_query);
    echo $row_num
    ?>
    </a>
</div>
<div class="card col-md-10 rounded-0  " style="width: 95%; height: 450px; overflow: auto;">
<div class="card-header">
    <h6>List of patient <i class='bx bx-user-plus '></i></h6>
</div>

      <div class="card-body card-md">
     
        <div class="card_form mb-1" style=" text-align:right">
            <form action="#" method="GET" style="height:inherit; ;padding: 0">
                <div class="card_inputs">
                    <input type="text" name="search" placeholder="Search here"
                    value="<?php if(isset($_GET["search"])){
                        echo $_GET['search'];
                    } ?>"
                    style="height:35px; border-radius:5pxx; padding-left:4px; border: 1px solid lightgray; font-size:14px">
                    <button type="submit" class="bg-secondary" style="height:35px; width: 5%; border: none; font-size: 13px">Search</button>
                </div>
            </form>
        </div>
      
      <table class="table table-hover table-stripedd  table-borderedt" style="font-size:13px" >
        <thead class="">
            <tr>
                <th><input class="form-check-input delckecked" type="checkbox" ></th>
                <th>SN</th>
                <th>ANC Number</th>
                <th>Admission Date</th>
                <th>Location</th>
                <th>Education</th>
                <th>Age</th>
                <th>Vitals</th>
                <th>Occupation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_GET["search"])){
                $filtervalue = $_GET["search"];
                $filterdata = "SELECT * FROM reg WHERE CONCAT(Anc,loc,edu, nhis, ocu) LIKE '%$filtervalue%'";
                $filterdata_run = mysqli_query($conn,$filterdata);
                $x = 0;
                if(mysqli_num_rows($filterdata_run)> 0){
                    while ($row=mysqli_fetch_assoc($filterdata_run)){
                        ?>
                        
                         <tr>
                         <td> <input class="form-check-input delckecked" type="checkbox" ></td>
                            <td><?php echo ++$x ?></td>
                            <td><?php echo $row["Anc"] ?></td>
                            <td><?php echo $row["Dob"] ?></td>
                            <td><?php echo $row["loc"] ?></td>
                            <td><?php echo $row["edu"] ?></td>
                            <td><?php echo $row["age"] ?></td>
                            <td><?php if($row["token"] == 1){
                                echo'<p  style="padding:1px; font-size:10px; border-radius: 40px; color:#fff; background-color:#f08080">pending</p>';
                            } else echo'<p  style="padding:1px; font-size:10px; border-radius:  40px; color:#fff;background-color:#20b299">checked</p>'
                            ?></td>
                            <td><?php echo $row["ocu"] ?></td>
                            <td>
                               
                                <a href="view.php?velid=<?php echo $row["Anc"] ?>" class="btn btn-primary btn-sm rounded-0" id="v1"><ion-icon name="eye-outline"></ion-icon> View</a>
                                <a href="edit.php?editid=<?php echo $row["Anc"] ?>"class="btn btn-warning btn-sm rounded-0"><ion-icon name="create-outline"></ion-icon> edit</a>
                                <a href="delete.php?delid=<?php echo $row["Anc"] ?>"class="btn btn-danger btn-sm rounded-0" onclick="return fun2()"><ion-icon name="close-circle-outline"></ion-icon> delete</a>
                    </td>
                </tr>
                        
                        <?php
                    }
                }
                else{
                    ?>
                    <tr  ><td colspan="10" class="animate__animated animate__shakeX animate__repeat-2" ><?php echo"<h6>No records found!!</h6>" ?></td></tr>
                    <?php
                }
            }

// NEW CODES
          
            
            ?>
           
            
        </tbody>
        </table>
        <div class="pagination" style="display:flex;flex-direction:column; font-size:12px; width:100%; background-color:redk; ">
            <p >Showing: 1 of 250</p>
            <!-- <div class="pagination_card" style="display:flex; width:50%; background-color:000; position: ">
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%; text-align: center">First</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:10%;text-align: center">Previous</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">1</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">2</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">3</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">4</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">5</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">Next</div>
                <div class="p_inputs" style="padding:1px; border: 1px solid gray; width:5%;text-align: center">Last</div>
            </div> -->
        </div>
      </div>
   
</div>
</div>


<script>
    function fun2() {
        var msg = confirm("Are you sure, you want to delete this record?");
        if(msg == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<?php include("../MAT_V2/includs/footer.php") ?>