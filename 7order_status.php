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



<?php 
/*
   // $email = $_SESSION['email'];

   // $query="SELECT * FROM product_purchase WHERE email = '$email'";
   // $query_run = mysqli_query($con,$query);

   // while ($row = mysqli_fetch_array($query_run )) {


   //   # code...
   // }

$email = $_SESSION['email'];

  $query="select * from product_purchase WHERE email= '$email' "; // Fetch all the data from the table customers
  $result=mysqli_query($con,$query);
  $singleRow = mysqli_fetch_row($result); //form single row 

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo ($row['name']);  // The number
    echo ($row['order_status']);  // The customer

      $temp=($row['order_status']); 
}





include 'mydbCon.php';
$query="select * from customers limit 1"; // Fetch all the data from the table customers
$result=mysqli_query($dbCon,$query);
$singleRow = mysqli_fetch_row($result);





  */





 ?>

    




<!DOCTYPE html>
<html>
<head>
	<title></title>


	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

<style type="text/css">
	



	.jumbotron.text-center {
    height: 17em;
}

input.form-control.col-md-6 {
    width: 50%;
    margin-right: 1em;
    display: inline;
}

div#notes {
    margin-top: 2%;
    width: 98%;
    margin-left: 1%;
}

@media (min-width: 991px) {
	.col-md-9.col-sm-12 {
    	margin-left: 12%;
	}
}
</style>



</head>
<body>
<div class="container">
	<form action="user-otp.php" method="POST">
  <!-- Instructions -->
  <div class="row">
    <div class="alert alert-success col-md-12" role="alert" id="notes">
      <h4>NOTES</h4>
      <ul>
        <li>Thank You for pursuing your project</li>
      </ul>
    </div>
  </div>
  <!-- Verification Entry Jumbotron -->
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron text-center">
        <h2>We are now verifying your Order</h2>
        <h3>Your Order Status</h3>
        <form method="post" action="confirm" role="form">
          <div class="col-md-9 col-sm-12">
            <div class="form-group form-group-lg">
              <input class="btn btn-primary btn-lg col-md-2 col-sm-2" type="submit" value="" name="" href="" disabled="disabled">
              <h1 style="color: red;">Status:   <?php //echo $singleRow['9']; ?></h1>
              <h1><?php //echo $temp; ?></h1> <br> <br>
              <p style="border: 1px;" style="border-color:red;"><?php 

   // $email = $_SESSION['email'];

   // $query="SELECT * FROM product_purchase WHERE email = '$email'";
   // $query_run = mysqli_query($con,$query);

   // while ($row = mysqli_fetch_array($query_run )) {


   //   # code...
   // }

$email = $_SESSION['email'];

  $query="select * from product_purchase WHERE email= '$email' "; // Fetch all the data from the table customers
  $result=mysqli_query($con,$query);
  $singleRow = mysqli_fetch_row($result);
   $count=0;
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo "Order No:".++$count;
    echo "<br>";
    echo "Name:".($row['name']);
    echo "<br>";  // The number
    echo "Status:".($row['order_status']);
    echo "<br>";  // The customer
    echo "Time:".($row['reg_date']);
    echo "<br>";
    echo "<br>";
    echo "<br>"; 


    


      //$temp=($row['order_status']); 
}



 ?>  </p>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </form>
</div>




</body>
</html>