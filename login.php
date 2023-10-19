<?php 
session_start();
include("../MAT_V2/includs/head.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #f8f9fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="card login_card card1 shadowe bg-white">
        <h5 style="width:100%; text-align: center">Signin here</h5>
        <?php 
       if(isset($_SESSION["login_msg"])){
        echo $_SESSION["login_msg"] ;
        // unset( $_SESSION["login_msg"]);
       } 
       ?>
        <form action="" method="post">
            <div class="input_card">
                <input type="text" placeholder="Username" name="user">
            </div>

            <div class="input_card">
                <input type="password" placeholder="Password" name="pass">
                <ion-icon name="eye-off-outline"></ion-icon>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_log">Login</button>
           <a href="">Forgot password ?</a>
           <div class="or_acct">
            <p>OR</p>
           </div>
           <div class="google_input">
           <ion-icon name="logo-google"></ion-icon>
           <h6>Login with google accounts</h6>
           </div>
           <div class="footer_msg">
            <p>Powered by Cloudsoft Technology</p>
            <p>&copy; allright reserved</p>
            <p><?php echo date("Y") ?></p>
           </div>
        </form>
    </div>
    <?php 
    if(isset($_POST["btn_log"])){
        include("db.php");
        $username   =    $_POST["user"];
        $password   =    $_POST["pass"];
        $login_sql  =   "SELECT * FROM login WHERE user_name = '$username' AND access_code ='$password'";
        $login_query =  mysqli_query($conn, $login_sql);
        $login_run = mysqli_fetch_array( $login_query);
        if($login_run){
        if($login_run["user_rank"] == "adm"){
        }
        header("location:dashbord.php");
        }else{
            
            $_SESSION["username"] = $username ;
            $_SESSION["login_msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           Invalid login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        
        
    }
    
    ?>
    
</body>
</html>
<?php include("../MAT_V2/includs/footer.php") ?>