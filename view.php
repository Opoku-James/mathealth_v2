<?php include("../MAT_V2/includs/head.php") ;
include("db.php");
include("delete.php");
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
<div class="main_bord_title bg-light fs-6">
    <p >Dashbord > View patient details</p>
</div>
<div class="table-responsive bt-5  bg-white  " style="width: 50%;height: 450px; overflow: auto;">
<div class="card">
  <div class="card-header">
    <h5>Clinical Details <ion-icon name="clipboard-outline"></ion-icon></h5>
  </div>
  <div class="card-body">
  <table class="table table-striped" style="text-align:left; font-size: 14px">
  <thead>
    <tr>
      
    </tr>
    
  </thead>
  <tbody>
    <?php 
    if(isset($_GET["velid"])){
      include("db.php");
      $get_velid  = $_GET["velid"];
      $velid_sql = "SELECT * FROM myview WHERE Anc = '$get_velid'";
      $velid_query = mysqli_query($conn, $velid_sql);
      $velid_rows = mysqli_fetch_array($velid_query);
      ?>
       <tr>
        <th>Anc Number</th>
        <td class="style1"><?php echo $velid_rows["Anc"]  ?></td>
      </tr>
      <tr>
        <th>Admission date</th>
        <td class="style1"><?php echo $velid_rows["date_register"]  ?></td>
      </tr>
      <tr>
        <th>Location</th>
        <td class="style1"><?php echo $velid_rows["loc"]  ?></td>
      </tr>
      <tr>
        <th>Education</th>
        <td class="style1"><?php echo $velid_rows["edu"]  ?></td>
      </tr>
      <tr>
        <th>Age</th>
        <td class="style1"><?php echo $velid_rows["age"]  ?></td>
      </tr>
      <tr>
        <th>Vitals</th>
        <td>
        <?php if($velid_rows["token"] == 1){
                                echo'<p  style="padding:1px; font-size:10px; border-radius: 40px; color:#fff; background-color:#f08080; width:20%; text-align:center">pending</p>';
                            } else echo'<p  style="padding:1px; font-size:10px; border-radius:  40px; color:#fff;background-color:#20b299;width:20%; text-align:center">checked</p>'
                            ?>
        </td>
      </tr>
      <tr>
        <th>Occupation</th>
        <td class="style1"><?php echo $velid_rows["ocu"]  ?></td>
      </tr>
      <tr>
        <th>Gravida</th>
        <td class="style1"><?php 
        if($velid_rows["gravida"] ==""){
          echo "Not avialable";
        }else{
        echo $velid_rows["gravida"] ;
        } 
        ?></td>
        
      </tr>
      <tr>
        <th>Parity</th>
        <td class="style1"><?php 
         if($velid_rows["Parity"] ==""){
          echo "Not avialable";
        }else{
        echo $velid_rows["Parity"] ;
        }   
        
        ?>
        </td>
      </tr>
      <tr>
        <th>ANC Visit</th>
        <td class="style1"><?php echo $velid_rows["anc_visit"]  ?></td>
      </tr>
      <tr>
        <th>Gestation</th>
        <td class="style1"><?php echo $velid_rows["gestation"]  ?></td>
      </tr>
      <tr>
        <th>Hb(g/dl)</th>
        <td><?php echo $velid_rows["hb"]  ?></td>
      </tr>
      <tr>
        <th>Blood Group</th>
        <td class="style1"><?php echo $velid_rows["blood_grp"]  ?></td>
      </tr>
      <tr>
        <th>Syphilis</th>
        <td class="style1"><?php echo $velid_rows["syphilis"]  ?></td>
      </tr>
      <tr>
        <th>HepB</th>
        <td class="style1"><?php echo $velid_rows["hebb"]  ?></td>
      </tr>
      <tr>
        <th>PMTCT</th>
        <td class="style1"><?php echo $velid_rows["pmtct"]  ?></td>
      </tr>
      <tr>
        <th>Lie & Presentation</th>
        <td class="style1"><?php echo $velid_rows["lie"]  ?></td>
      </tr>
      <tr>
        <th>Perineum</th>
        <td class="style1"><?php echo $velid_rows["perinium"]  ?></td>
      </tr>
      <tr>
        <th>Blood Pressure</th>
        <td class="style1"><?php echo $velid_rows["bp"]  ?></td>
      </tr>
      <tr>
        <th>Pules</th>
        <td class="style1"><?php echo $velid_rows["pulse"]  ?></td>
      </tr>
      <tr>
        <th>Temperature</th>
        <td class="style1"><?php echo $velid_rows["temp"]  ?></td>
      </tr>
      <tr>
        <th>Feotal Heart Rate</th>
        <td class="style1"><?php echo $velid_rows["fhr"]  ?></td>
      </tr>
      <tr>
        <th>Breathing</th>
        <td class="style1"><?php echo $velid_rows["Breathing"]  ?></td>
      </tr>
      <tr>
        <th>Resp.rate within 30mins</th>
        <td class="style1"><?php echo $velid_rows["Resp_rate"]  ?></td>
      </tr>
      <tr>
        <th>Skin Contact</th>
        <td class="style1"><?php echo $velid_rows["skin_contact"]  ?></td>
      </tr>
      <tr>
        <th>Resuscitation Provided</th>
        <td class="style1"><?php echo $velid_rows["Resuscitation"]  ?></td>
      </tr>
      <tr>
        <th>Birth Outcome</th>
        <td class="style1"><?php echo $velid_rows["Birth_outcome"]  ?></td>
      </tr>
      <tr>
        <th>Gender</th>
        <td class="style1"><?php echo $velid_rows["Genda"]  ?></td>
      </tr>
      <tr>
        <th>Weight(kg)</th>
        <td class="style1"><?php echo $velid_rows["Weight"]  ?></td>
      </tr>
      <tr>
        <th>Complication</th>
        <td class="style1"><?php echo $velid_rows["Complication"]  ?></td>
      </tr>
      <tr>
        <th>Mode of delivery</th>
        <td class="style1"><?php echo $velid_rows["Mode_of_del"]  ?></td>
      </tr>
      <tr>
        <th>State of placenter</th>
        <td class="style1"><?php echo $velid_rows["State_of_placenta"]  ?></td>
      </tr>
      <?php
    }
    
    ?>
 
  </tbody>
</table>     
  </div>
  <div class="card-footer">
  <button class="btn btn-success btn-sm " id="btn1">Print <ion-icon name="print-outline"></ion-icon></button> 
 <button class="btn btn-danger btn-sm">Download <ion-icon name="cloud-download-outline"></ion-icon></button> 
 <a href="patienttabel.php" class="btn btn-warning btn-sm">Back <ion-icon name="arrow-back-outline"></ion-icon></a>  
  </div>
</div>


</div>
<script>
  let print_doc =document.getElementById("btn1");
  print_doc.addEventListener('click', ()={
    window.Print
  })
</script>
</div>
<?php include("../MAT_V2/includs/footer.php") ?>