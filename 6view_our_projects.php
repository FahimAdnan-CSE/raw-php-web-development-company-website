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



<!DOCTYPE html>
<html>
<head>
	<title>View Our Project</title>

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

     <h1 class="container text-center" id="javascriptcolor1"> User: <?php echo $fetch_info['name'] ?></h1>
    <h2 class="container text-center">Work today, befits tomorrow</h2>

<div class="topright"><a href="logout-user.php" class="btn btn-light btn-lg " role="button" aria-pressed="true" target="_blank" onclick="myFunction()" >Logout</a></button></div>

<!-- Nav Bar -->

  </div>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav justify-content-center" id=".nav">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html#work">Our Works</a>
      </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#">Registration</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link active" href="#">View Our Projects</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="1contact_us.php" target="_blank">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="7order_status.php" target="_blank">Order Status</a>
      </li>
  </ul>
</nav>

<br><br><br>


<!-- Recent Work -->


  <div class="bg" id="work">


   <div class="container">

     <h1 class="container text-center">Recent Work</h1>
     <h3 class="container text-center text-muted">We don't just talk big. Our work says it all</h3>
     <h4 class="container text-center text-muted">Click below to see our works</h4>

     <nav class="navbar navbar-expand-sm  navbar-dark nav justify-content-center" id=".nav">
      <ul class="navbar-nav ">
        <li class="nav-item  ">
          <a class="nav-link" href="#">Web</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">App</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#work">Logo</a>
        </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">Registration</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link " href="#">Hosting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Desktop App</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Mac App</a>
      </li>
    </ul>
  </nav>



  <!-- Recnet Work card -->

  <div id="carouselExampleControls" class="container carousel slide cardbg" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card">
            <img src="image\p1.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">Flarum -Laravel project</h5>
              <p class="card-text" style="color: #4b4b4b;"><b>1. Flarum</b><br>
Flarum is the next-generation forum software that makes online discussion fun. It’s simple, fast, and free. Flarum is 100% free and open-source under the MIT license</p>
              <a href="4product1.php" class="btn btn-primary" target="_blank">Buy this Project</a>
               <a href="6view_our_projects.php" class="btn btn-warning">5000 tk</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\p3.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">Password Manager</h5>
              <p class="card-text" style="color: #4b4b4b;"><b>2. Notes & Password Manager</b><br>Note taking is a very good habit to organize our daily life. This is an online android application which helps to take notes at anytime. </p>
              <a href="#" class="btn btn-primary">Buy this Project</a>
               <a href="#" class="btn btn-warning">5000 tk</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\p2.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">React js Native App</h5>
              <p class="card-text" style="color: #4b4b4b;"><b>3. React js Native App</b><br>This is one of the easiest projects on the list, and given the fact that tutorials on productivity apps are abundant, this project should be relatively easy for a beginner.</p>
              <a href="#" class="btn btn-primary">Buy this Project</a>
              <a href="#" class="btn btn-warning">5000 tk</a>
            </div>
          </div>
        </div>
      </div>

       <div class="carousel-item">
         <div class="cards-wrapper">
          <div class="card">
            <img src="image\p1.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">Flarum -Laravel project</h5>
              <p class="card-text" style="color: #4b4b4b;"><b>1. Flarum</b><br>
Flarum is the next-generation forum software that makes online discussion fun. It’s simple, fast, and free. Flarum is 100% free and open-source under the MIT license</p>
              <a href="4product1.php" class="btn btn-primary" target="_blank">Buy this Project</a>
               <a href="6view_our_projects.php" class="btn btn-warning">5000 tk</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\p3.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">Password Manager</h5>
              <p class="card-text" style="color: #4b4b4b;"><b>2. Notes & Password Manager</b><br>Note taking is a very good habit to organize our daily life. This is an online android application which helps to take notes at anytime. </p>
              <a href="#" class="btn btn-primary">Buy this Project</a>
               <a href="#" class="btn btn-warning">5000 tk</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\p2.gif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #34495e;">React js Native App</h5>
              <p class="card-text" style="color: #4b4b4b;"><b>3. React js Native App</b><br>This is one of the easiest projects on the list, and given the fact that tutorials on productivity apps are abundant, this project should be relatively easy for a beginner.</p>
              <a href="#" class="btn btn-primary">Buy this Project</a>
              <a href="#" class="btn btn-warning">5000 tk</a>
            </div>
          </div>

        
      </div> 




    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  </div>



  </div>

  <br> <br>

























</body>
</html>