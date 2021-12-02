

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
        <li>Account Verification is Succesfull</li>
      </ul>
    </div>
  </div>
  <!-- Verification Entry Jumbotron -->
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron text-center">
        <h2>Enter the verification code</h2>
        <form>
          <div class="col-md-9 col-sm-12">
            <div class="form-group form-group-lg">
              <a href="login-user.php">Login</a>
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