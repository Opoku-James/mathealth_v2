<?php include("../MAT_V2/includs/head.php");
include("vitalfun.php");
require_once "db.php";
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
    <p style="color: gray;">Dashbord > Patient Vitals</p>
</div>
<div class="card bg-whitey mt-3">
    <!-- <marquee behavior="" direction=""><h5 style="color: #8fbc8f">DELIVERIES DATA CAPTURING MANAGEMENT SYSTEM (DCMS)</h5></marquee> -->
<div class="card-header">
<a href="patienttabel.php" class="btn btn-warning btn-sm">View patient list</a>
</div>
<?php 
include("db.php");
if(isset($_GET["vitalid"]));
$getid = $_GET["vitalid"];
$getsql = "SELECT * FROM reg WHERE Anc = '$getid'";
$sql2 = mysqli_query($conn,$getsql);
$getrow = mysqli_fetch_assoc($sql2);
?>
<div class="card-body">
<form action="" id="vital" style="font-size: 13px" method="post">
       <div class="disabled_inputs" style="margin-bottom: 4%;">
       <label for="">Patient ID:</label>
       <input type="text" name="pid" value="<?php echo $getrow["Anc"]?>" readonly style="width: 15%;  height: 40px; border:none; padding:5px; font-weight: bold; color:darkgreen"  >
       <label for="">NHIS Number:</label>
       <input type="text" name="nhiss" value="<?php echo $getrow["nhis"]?>" readonly  style="width: 15%;  height: 40px; border:none; padding:5px; font-weight: bold;color:crimson" >
       </div>

        <table class="table table-bordere" ">
           <thead class="bg-light">
            <tr>
                <td style="width: 10%;">Gravida</td>
                <td style="width: 10%;">Parity</td>
                <td style="width: 10%;">ANC Visit</td>
                <td style="width: 10%;">Gestation</td>
                <td style="width: 10%;">IPT/SP</td>
                <td style="width: 10%;">Hb(g/dl)</td>
                <td>Blood Group</td>
                <td>ANC Cort</td>
              
                <!-- <th>FHR</th>
                <th>Temp</th> -->
               
            </tr>
            <tbody>
                <tr>
                    <td><input type="text" name="gravi" placeholder="0" class="form-control " style="width: 99%;font-size: 12px;" ></td>
                    <td><input type="text" name="parity" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="visite"  placeholder="0"class="form-control" style="width: 99%;font-size: 12px;" ></td>
                    <td><input type="text" name="gest" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="ipt" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="hb" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td>
                    <select name="bg" id="select1" class="form-select select2" style="width: 99%;font-size: 12px;">
                        <option value="">--select--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB">AB</option>
                        <option value="AB+">AB+</option>
                        <option value="O">O</option>
                        <option value="O+">O+</option>
                    </select>
                    </td>
                    <td><select name="cort" id="select2" class="form-select select2" style="width: 99%;font-size: 12px;">
                        <option value="">-select-</option>
                        <option value="Yes">YES</option>
                        <option value="No">NO</option>
                    </select></td>
                  
                    <!-- <td><input type="text"></td>
                    <td><input type="text"></td> -->
                   
                </tr>
            </tbody>
           </thead>
        </table>

        <table class="table table-bordere">
           <thead class="bg-light">
            <tr>
                <td>Syphilis</td>
                <td>HepB</td>
                <td>PMTCT</td>
                <td>Partograph</td>
                <td>Lie & Presentation</td>
                <td>Perineum</td>
                <td style="width: 5%;">BP</td>
                <td style="width: 5%;">Pules</td>
                <td style="width: 5%;">Temperature</td>
                <td style="width: 5%;">FHR/Min</td>
                <td style="width: 5%;">Cervical</td>
               
            </tr>
            <tbody>
                <tr>
                    <td>
                        <select name="syp" id="" class="form-select select2" style="width: 99%; font-size: 12px;">
                            <option value="">-select-</option>
                            <option value="Positive">POSITIVE</option>
                            <option value="Negative">NEGATIVE</option>
                            <option value="Not Done">NOT DONE</option>
                        </select>
                    </td>
                    <td><select name="hebb" id="" class="form-select select2" style="width: 99%;font-size: 12px;">
                            <option value="">-select-</option>
                            <option value="Postive">POSITIVE</option>
                            <option value="Negative">NEGATIVE</option>
                            <option value="Not Done">NOT DONE</option>
                        </select></td>
                    <td><select name="pm" id="" class="form-select select2" style="width: 99%; font-size: 12px;">
                            <option value="">-select-</option>
                            <option value="Postive">POSITIVE</option>
                            <option value="Negative">NEGATIVE</option>
                            <option value="Not Done">NOT DONE</option>
                        </select></td>
                    <td><select name="parto" id="" class="form-select select2" style="width: 99%;font-size: 12px;">
                            <option value="">-select-</option>
                            <option value="Yes">YES</option>
                            <option value="No">NO</option>
                           
                        </select></td>
                    <td>
                    <select name="lie" id="" class="form-select select2" style="width: 99%;font-size: 12px;">
                            <option value="">-select-</option>
                            <option value="Logitudinal">LOGITUDINAL</option>
                            <option value="Oblique">OBLIQUE</option>
                            <option value="Transvers">TRANSVERS</option>
                            <option value="Cephalus">CEPHALUS</option>
                            <option value="Breach">BREACH</option>
                        </select>
                    </td>
                    <td>
                   <select name="perinium" id="" class="form-select select2" style="width: 99%;font-size: 12px;">
                   <option value="">-select-</option>
                    <option value="Intact">INTACT</option>
                    <option value="Episiotomy">EPISIOTOMY</option>
                    <option value="Tear">TEAR</option>
                   </select>
                    </td>
                    <td><input type="text" name="bp" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="puls" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="temp" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="fhr" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                    <td><input type="text" name="cervical" placeholder="0" class="form-control" style="width: 99%;font-size: 12px;"></td>
                   
                </tr>
            </tbody>
           </thead>
        </table>
        <button type="submit" name="vit" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</button>
        <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-plusr"></i> Reset</button>
     </form>
</div>



</div>


</div>
<?php include("../MAT_V2/includs/footer.php") ?>