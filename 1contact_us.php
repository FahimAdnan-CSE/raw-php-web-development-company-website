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



























<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style type="text/css">
    	.all{

    		/*background-color: #191919;*/
    		background-color: #2980b9;
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
    background-image: url("image/recent_work_bg.jpg");

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
    max-width: 100%;
    max-height: 100%;
  }
  .card {
    margin: 0 0.5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
    border-radius: 0;
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
  @media (min-width: 768px) {
    .card img {
      height: 11em;
    }
    
  }

  @media only screen and (max-width: 600px) {
   .bg{
     height: 1200px;
   }
  }




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
    background-color: #25274d;
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


	
 <!-- Heading -->
  <div class="">

   <div class=" pos" >

    <h1 class="container text-center">MyTchnoBD</h1>
    <h2 class="container text-center">Work today, befits tomorrow</h2>



<!-- Nav Bar -->

  </div>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav justify-content-center" id=".nav">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#work">Our Works</a>
      </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#">Registration</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="login-user.php">View Our Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="index.php#about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active " href="#">Contact Us</a>
    </li>
  </ul>
</nav>

<br><br><br>

<!-- COntact -->


  <div class="tg" >
    <br>
    <h1 class="container text-dark text-center">LET'S GET STARTED</h1>
    <h3 class="container text-dark text-center">We would Love to Hear from You.</h3>

    <div class="container contact">
     <div class="row">
      <div class="col-md-3">
       <div class="contact-info">
        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
        <h2>Contact Us</h2>
        <h4>We would love to hear from you !</h4>
      </div>
    </div>   
    <form action="1contact_us.php" method="POST">
    <div class="col-md-9">
     <div class="contact-form">
      <div class="form-group">
        <label class="control-label col-sm-2" for="fname">First Name:</label>
        <div class="col-sm-10">          
         <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required style="width: 200px;">
       </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name:</label>
      <div class="col-sm-10">          
       <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" style="width: 200px;">
     </div>
   </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
     <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required style="width: 200px;">
   </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="comment">Comment:</label>
    <div class="col-sm-10">
     <textarea class="form-control" rows="5" id="comment" name="message" style="width: 300px;" required ></textarea>
   </div>
  </div>
  <div class="form-group">        
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-default" name="contact_submit">Submit</button>
     <p class="container text-secondary"><b><?php 

if(isset($_POST['contact_submit'])){

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // $price = mysqli_real_escape_string($con, $_POST['price']);
    // $t_number = mysqli_real_escape_string($con, $_POST['t_number']);
    // $m_number = mysqli_real_escape_string($con, $_POST['m_number']);

    $insert_data = "INSERT INTO contact_us (fname, lname, email, message)
                        values('$fname','$lname','$email','$message')";


                        if ($con->query($insert_data) === TRUE) {
  echo "Your contact information recorded successfully. We will contact with you soon";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


                        //header('location: 7order_status.php');
    





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
</b></p>


   </div>
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>

  </div>   <br>

  <script>
function myFunctionc() {
  alert("Your Contact us from successfully record.We Will Contact With You Soon");
}
</script>
</body>
</html>