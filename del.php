<?php include("../MAT_V2/includs/head.php");
include("delfun.php")
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
    <p style="color: gray;">Dashbord > Delivery</p>
</div>
<div class="table-responsive bg-white  p-2" style=" width: 95%;">
<a href="patienttabel.php" class="btn btn-warning btn-sm">View delivery list</a>
<?php 
include("db.php");
if(isset($_GET["delid"]));
$getdelid = $_GET["delid"];
$delgetsql = "SELECT * FROM reg WHERE Anc = '$getdelid'";
$sql2 = mysqli_query($conn,$delgetsql);
$getrow = mysqli_fetch_assoc($sql2);
?>
<form action="" id="vital" class="" method="post" style="font-size: 13px">
       <div class="disabled_inputs" style="margin-bottom: 0%;">
       <label for="">Patient ID</label>
       <input type="text" name="paid" class="bg-light" value="<?php echo $getrow["Anc"] ?>" readonly style="width: 15%;  height: 40px; border:none; padding:5px; font-weight: bold; color:darkgreen"  >
       <label for="">NHIS</label>
       <input type="text" name="pid" id="text" class="bg-light" value="<?php echo $getrow["nhis"] ?>" readonly style="width: 15%;  height: 40px; border:none; padding:5px; font-weight: bold;color:crimson" >
       </div>

        
        <table class="table table-bordere">
           <thead class="bg-light">
            <tr>
                <td>Breathing</td>
                <td>Resp.rate within 30mins</td>
                <td>Skin Contact</td>
                <td>Resuscitation Provided</td>
                <td>Temp within 90mins</td>
                <td>Breastfeeding</td>
                <td>Birth Outcome</td>
                <td>Gender</td>
              
                <!-- <th>FHR</th>
                <th>Temp</th> -->
               
            </tr>
            <tbody>
                <tr>
                    <td><select name="breath" id="" class="form-select " style="font-size: 12px;">
                        <option value="">select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></td>
                    <td><input type="text" name="rate" placeholder="0" class="form-control" style="font-size: 12px;"></td>
                    <td>
                    <select name="skin" id="" class="form-select " style="font-size: 12px;">
                        <option value="">select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    </td>
                    <td>
                    <select name="resus" id="" class="form-select " style="font-size: 12px;">
                        <option value="">select</option>
                        <option value="Non">Non</option>
                        <option value="Stimulation and Suction">STIMULATION AND SUCTION</option>
                        <option value="Bag and Mask Ventilation">BAG & MASK VENTILATION</option>
                        <option value="Chest Compression">CHEST COMPRESSION</option>
                        <option value="Endotracheal Tub Ventilation">ENDOTRACHEAL TUB VENTILATION</option>
                       
                    </select>
                    </td>
                    <td><input type="text" name="temp" placeholder="0" class="form-control " style="font-size: 12px;"></td>
                    <td> <select name="feeding" id="" class="form-select " style="font-size: 12px;">
                        <option value="">select</option>
                        <option value="Yes">YES</option>
                        <option value="No">NO</option>
                       
                    </select></td>
                    <td>
                    <select name="outcome" id="" class="form-select" style="font-size: 12px;">
                        <option value="">select</option>
                        <option value="Alive">ALIVE</option>
                        <option value="Single">SINGLE</option>
                        <option value="Dead">DEAD</option>
                        <option value="Multiple">MULTIPLE</option>
                        <option value="Birth Asphyxia">BIRTH ASPHYXIA</option>
                        <option value="Macerated SB">MACERATED SB</option>
                        <option value="Fresh SB">FRESH SB</option>
                    </select>
                    </td>
                    <td><select name="genda" id="" class="form-select" style="font-size: 12px;">
                        <option value="">select</option>
                        <option value="Male">MALE</option>
                        <option value="Female">FEMALE</option>
                        <option value="Ambigeous Genitalai">AMBIGIOUS GENITALIA</option>
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
                <td style="width: 10%;">Weight(kg)</td>
                <td style="width: 10%;">Lenght(cm)</td>
                <td style="width: 10%;">HC(cm)</td>
                <td>Vitamin K1</td>
                <td>Infant ARV</td>
                <td>Eye Care</td>
                <td>Cord Care</td>
                <td>Complication</td>
               
               
            </tr>
            <tbody>
                <tr>
                <td><input type="text" name="weight" placeholder="0" class="form-control" style="font-size: 12px;"></td>
                <td><input type="text" name="lenght" placeholder="0" class="form-control" style="font-size: 12px; "></td>
                <td><input type="text" name="hc" placeholder="0" class="form-control" style="font-size: 12px; "></td>
                    <td>
                        <select name="vitamin" id="" class="form-select " style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Yes">YES</option>
                            <option value="No">NO</option>
                           
                        </select>
                    </td>
                    <td><select name="infant" id="" class="form-select " style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Yes">YES</option>
                            <option value="No">NO</option>
                           
                        </select></td>
                    <td><select name="eye" id="" class="form-select " style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Chloramphenicol">CHLORAMPHENICOL</option>
                            <option value="Tetracycline">TETRACYCLINE</option>
                            <option value="None">NONE</option>
                        </select></td>
                    <td><select name="cord" id="" class="form-select " style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Chlorheidine">CHLORHEIDINE</option>
                            <option value="M.Spirit">M.Spirit</option>
                            <option value="None">NONE</option>
                        </select></td>
                    <td>
                    <select name="comp" id="" class="form-select " style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="PPH">PPH</option>
                            <option value="APH">APH</option>
                            <option value="Eclampsia">ECLAMPSIA</option>
                            <option value="Obstructed Labour">OBSTRUCTED LABOUR</option>
                            <option value="Reptured Uterus">RUPTURED UTERUS</option>
                            <option value="PIH">PIH</option>
                            <option value="PROM">PROM</option>
                            <option value="Not specified">NOT SPECIFIED</option>
                        </select>
                    </td>
                  
                   
                </tr>
            </tbody>
           </thead>
        </table>

        <table class="table table-bordere caption-top">
            <caption>3rd Stage (AMTSL)</caption>
           <thead class="bg-light">
            <tr>
                <td>Oxytocin(10 units)</td>
                <td>Time Oxytocin given</td>
                <td>Mode of delivery</td>
                <td>Time Placenta Delivered</td>
                <td>State of placenter</td>
               
               
            </tr>
            <tbody>
                <tr>
                    <td>
                        <select name="oxy" id="" class="form-select" style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Yes">YES</option>
                            <option value="No">NO</option>
                           
                        </select>
                    </td>
                    <td><input type="text" name="time_oxy" placeholder="0" class="form-control" style="font-size: 12px;"></td>
                    <td><select name="mode" id="" class="form-select" style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Normal">NORMAL</option>
                            <option value="Vacuum">VACUUM</option>
                            <option value="Forceps">FORCEPS</option>
                           
                        </select></td>
                    <td><input type="text" name="time_pla" placeholder="0" class="form-control" style="font-size: 12px;"></td>
                    <td><select name="state" id="" class="form-select" style="font-size: 12px;">
                            <option value="">select</option>
                            <option value="Complete">COMPLETE</option>
                            <option value="Incomplete">INCOMPLETE</option>
                           
                        </select></td>
                   
                  
                   
                </tr>
            </tbody>
           </thead>
        </table>
        <button type="submit" name="delivery" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</button>
        <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-plusr"></i> Reset</button>
     </form>

</div>


</div>
<?php include("../MAT_V2/includs/footer.php") ?>