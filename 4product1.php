<?php require "connection.php"; ?>
<?php require_once "controllerUserData.php"; ?>
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


 <!-- order database -->

<?php 

if(isset($_POST['corder'])){
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $t_number = mysqli_real_escape_string($con, $_POST['t_number']);
    $m_number = mysqli_real_escape_string($con, $_POST['m_number']);

    $insert_data = "INSERT INTO product_purchase (id, name, email, product, price,t_number,m_number,order_status)
                        values('$id','$name', '$email','$product', '$price','$t_number','$m_number','Pending')";


                        if ($con->query($insert_data) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


                        //header('Location: 7order_status.php');
    





    // if($password !== $cpassword){
    //     $errors['password'] = "Confirm password not matched!";
    // }
    // $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    // $res = mysqli_query($con, $email_check);
    // if(mysqli_num_rows($res) > 0){
    //     $errors['email'] = "Email that you have entered is already exist!";
    // }
    // if(count($errors) === 0){
    //     $encpass = password_hash($password, PASSWORD_BCRYPT);
    //     $code = rand(999999, 111111);
    //     $status = "notverified";
    //     $insert_data = "INSERT INTO usertable (name, email, password, code, status)
    //                     values('$name', '$email', '$encpass', '$code', '$status')";
    //     $data_check = mysqli_query($con, $insert_data);
    //     if($data_check){
    //         $subject = "Email Verification Code";
    //         $message = "Your verification code is $code";
    //         $sender = "From: ars.johnny@gmail.com";
    //         if(mail($email, $subject, $message, $sender)){
    //             $info = "We've sent a verification code to your email - $email";
    //             $_SESSION['info'] = $info;
    //             $_SESSION['email'] = $email;
    //             $_SESSION['password'] = $password;
    //             header('location: user-otp.php');
    //             exit();
    //         }else{
    //             $errors['otp-error'] = "Failed while sending code!";
    //         }
    //     }else{
    //         $errors['db-error'] = "Failed while inserting data into database!";
    //     }
    // }

}









 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <style type="text/css">
    	.all{

    		/*background-color: #191919;*/
    		/*background-color: #2980b9;*/
    	}
    	
     .container{
     	
     	color: white;

     }
     .pos{

     	position: relative;
     }


     .topright {
      position: absolute;
      top: 8px;
      right: 16px;
      font-size: 18px;
    }

    /*Slider */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    /*Service color*/

    .bg-dark{
     /* border-radius: 35%;*/

   }

   .servicecolor{

     color: white;
   }





   body, html {
    height: 100%;
  }

  .bg { 
    /* The image used */
   /* background-image: url("image/recent_work_bg.jpg");*/

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /*Recent works card*/

  .cards-wrapper {
    display: flex;
    justify-content: center;
  }
  .card img {
    max-width: 90%;
    max-height: 90%;
  }
  .card {
    margin: 0 0.5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
    border-radius: 0;
    width: 60%;
    height: 100%;
  }
  .carousel-inner {
    padding: 1em;
  }
  .carousel-control-prev,
  .carousel-control-next {
    background-color: #e1e1e1;
    width: 5vh;
    height: 5vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
  }
 /* @media (min-width: 768px) {
    .card img {
      height: 11em;
    }
    
  }*/





  /*skill*/
  * {box-sizing: border-box}

  .container1 {
    width: 100%;
    background-color: #ddd;
  }

  .skills {
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
    color: white;
  }

  .html {width: 90%; background-color: #04AA6D;}
  .css {width: 80%; background-color: #2196F3;}
  .js {width: 65%; background-color: #f44336;}
  .php {width: 60%; background-color: #808080;}


  /*contact*/

  .tg { 
    /* The image used */
    background-image: url("image/contact_bg.jpg");

    /* Full height */
    height: 1000px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }


  body{
    /*background-color: #25274d;*/
  }
  .contact{
    padding: 4%;
    height: 400px;
  }
  .col-md-3{
    background: #ff9b00;
    padding: 4%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;

  }
  .contact-info{
    margin-top:10%;
  }
  .contact-info img{
    margin-bottom: 15%;
  }
  .contact-info h2{
    margin-bottom: 10%;
  }
  .col-md-9{
    background: #fff;
    padding: 3%;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }
  .contact-form label{
    font-weight:600;
  }
  .contact-form button{
    background: #25274d;
    color: #fff;
    font-weight: 600;
    width: 100%;
  }
  .contact-form button:focus{
    box-shadow:none;
  }







  </style>

</head>
<body>

	<!-- Product -->
<div class="bg" id="work">


   <div class="container">
<div id="carouselExampleControls" class="container carousel slide cardbg" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
  <div class="cards-wrapper">
          <div class="card">
            <img src="image\p1.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">Flarum -Laravel project</h5>
              <!-- <p class="card-text" style="color: #4b4b4b;"><b>1. Flarum</b><br>
Flarum is the next-generation forum software that makes online discussion fun. It’s simple, fast, and free. Flarum is 100% free and open-source under the MIT license</p>
              <a href="#" class="btn btn-primary">Buy this Project</a>
               <a href="#" class="btn btn-warning">$5</a> -->
            </div>
          </div>
      </div>
      </div>
      </div>
      </div>
      </div>









   <!-- 
		<form action="" method="POST" class="login-email form-inline justify-content-center" >
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>

<br><br> -->

<!-- 
			<div id="cover-caption">
        <div id="container" class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 text-center">
                    <h1 class="display-3">Welcome to Bootstrap 4</h1>
                    <div class="info-form">
                        <form action="" class="form-inline justify-content-center">
                            <div class="form-group">
                                <label class="" style="color: red;">Name      :--</label> 
                                <p style="color: red;">Name <br></p>
                                <input type="text" class="form-control" placeholder="Jane Doe" value="Fahim" disabled="disabled">
                            </div><br>
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <label class="" style="color: red;">Amount  :--</label>
                                <input type="text" class="form-control" placeholder="jane.doe@example.com">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Price</label>
                                <input type="text" class="form-control" placeholder="jane.doe@example.com">
                            </div>
                            <button type="submit" class="btn btn-success">okay, go!</button>
                        </form>
                    </div>
                    <br>

                    <a href="#nav-main" class="btn btn-secondary-outline btn-sm" role="button">↓</a>
                </div>
            </div>
        </div>
    </div> -->

    <br> <br>

    <!-- <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
</form> -->





<!-- Product Form -->




<div class="container " style="background-color: gray;">

   <form class="container" action="4product1.php" method="POST" style="width: 80%;">
    <legend class="bg-success text-center">Product form</legend>

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="inputEmail" placeholder="" value="<?php echo $fetch_info['name'] ?>" >
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">User Id</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="id" id="inputEmail" placeholder="" value="<?php echo $fetch_info['id'] ?>" >
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text"  placeholder="" name="product" value="Flarum -Laravel project" >
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
            <input type="text"  placeholder="" value="5000" name="price" >
        </div>
    </div>


    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Bkash Marcent Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="" value="01021" >
            <p>Send Payment In this number</p>
        </div>
    </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Your Mobile Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="m_number" id="inputPassword" placeholder="">
        </div>
    </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Transaction Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="t_number" placeholder="" required="">
        </div>
    </div>


    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="" value="<?php echo $fetch_info['email'] ?> " >
        </div>
    </div>


    <!--  <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Gender</label>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
    </div>
 -->

    





  <div class=" text-center">
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <label class="form-check-label"><input type="checkbox"> I accept Terms and Condition</label>
        </div>
    </div>
    <div class="form-group row text-center">
        <div class="col-sm-10 offset-sm-2">
            <!-- <button type="submit" class="">Confirm</button> -->
             <input  type="submit" class="btn btn-success" name="corder" value="Confirm order"></input>
        </div>
    </div>
    <br>

</form>


  </div>

    






  </div>


  <br> <br>



	








</body>
</html>