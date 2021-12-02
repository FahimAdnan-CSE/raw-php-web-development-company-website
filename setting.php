<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style type="text/css">
        
   .form-group{

    text-align: center;
   }


    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    
                    <?php /*
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    } */
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?><br><br>
                    <div class="form-group">
                        <label>User Name:</label>
                        <input class="form-control" type="text" name="password" placeholder="" value="<?php echo $fetch_info['name'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>User ID:</label>
                        <input class="form-control" type="text" name="password" placeholder="" value="<?php echo $fetch_info['id'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>User Email:</label>
                        <input class="form-control" type="text" name="password" placeholder="" value="<?php echo $fetch_info['email'] ?>" disabled>
                    </div>
                    <h2 class="form-group">New Password</h2>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-homepassword" value="Change">
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>