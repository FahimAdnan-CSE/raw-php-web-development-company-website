
  <!DOCTYPE html>
  <html>
  <head>
  	<title>My Tecno BD</title>
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
    width: 25%;
  }
  .contact-form button:focus{
    box-shadow:none;
  }







  </style>

  </head>


  <body>

    <!-- Heading -->

  	<div class="all">
  		
     <div class=" pos" style="background-color:#95a5a6;" id="javascriptbgcolor"> 

      <h1 class="container text-left" id="javascriptcolor1">MyTchnoBD</h1>
      <div id="myDIV" class="Hello" align="center" >
  <h1 class="" id="javascriptcolor2">Hello</h1>
</div>

<br>
<!-- <p class="text-center" id="changeme">Change Me</p>
<label class="switch">
  <input type="checkbox" checked onclick="myFunction1(this)" > 
  <span class="slider round"></span>
</label> -->
      <h2 class="container text-center" id="javascriptcolor3">Work today, befits tomorrow</h2>



      <div class="topright"><a href="login-user.php" class="btn btn-light btn-lg " role="button" aria-pressed="true"  onclick="myFunction()" >Login/SignUp</a></button></div>

      <br><br>

    </div>


<!-- Nav bar -->


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav justify-content-center" id="navi3">
      <ul class="navbar-nav ">
        <li class="nav-item active ">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#work">Our Works</a>
        </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">Registration</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link " href="login-user.php">View Our Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="1contact_us.php" target="_blank">Contact Us</a>
      </li>
    </ul>
  </nav>


  <!-- Slider -->


  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/slider/bg.jpg " alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h1 class="text-secondary container">Web Design??</h1>
          <h2 class="text-dark container">We create responsive website for you</h2>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="image/slider/bg2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h1 class="text-secondary container">App Design??</h1>
          <h2 class="text-dark container">We create best apps for you</h2>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="image/slider/bg3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
         <h1 class="text-secondary container">Tension for domain and hosting??Don't worry</h1>
          <h2 class="text-dark container">We also give this service</h2>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  </div>


  <br> <br>

  <!-- Service -->


  <div class="container " id="services">
   <h1 class="container text-center">Our Services</h1>  <br> <br>

   <div class="container row spacing-70 service-process text-center">        
    <div class="col-sm-6 col-md-4 extra-service-area text-center ">
      <a href="#about" target="_blank" class="servicecolor">
        <div class="feature animate zoomIn" data-anim-type="zoomIn" data-anim-delay="500">
         <div class="service-section-img">
          <img src="image/services/01.png" alt="Offshore Development">
        </div>
        <h3>Offshore<br>Development</h3>
      </div>
    </a>
  </div>

  <div class="col-sm-6 col-md-4 extra-service-area ">
    <a href="#androidapp" target="_blank" class="servicecolor">
      <div class="feature animate zoomIn" data-anim-type="zoomIn" data-anim-delay="500">
        <div class="service-section-img">
         <img src="image/services/02.png" alt="Mobile App Development">
       </div>
       <h3>Mobile App<br>Development</h3>
     </div>
   </a>
  </div>

  <div class="col-sm-6 col-md-4 extra-service-area ">
    <a href="#domainhost" class="servicecolor">
      <div class="feature animate zoomIn" data-anim-type="zoomIn" data-anim-delay="500">
        <div class="service-section-img">
         <img src="image/services/03.png" alt="Web Hosting">
       </div>
       <h3>Web<br>Hosting</h3>
     </div>
   </a>
  </div>   

  <div class="col-md-2 hidden-xs"></div>
  <div class="col-sm-6 col-md-4 extra-service-area ">
   <a href="#about" class="servicecolor">
     <div class="feature animate zoomIn" data-anim-type="zoomIn" data-anim-delay="500">
       <div class="service-section-img">
        <img src="image/services/07.png" alt="Web Development">
      </div>
      <h3>Web<br>Development</h3>
    </div>
  </a>
  </div>

  <div class="col-sm-6 col-md-4 extra-service-area ">
   <a href="#about" class="servicecolor">
     <div class="feature animate zoomIn" data-anim-type="zoomIn" data-anim-delay="500">
       <div class="service-section-img">
         <img src="image/services/08.png" alt="Social Network Development">
       </div>
       <h3>Social Network<br>Development</h3>
     </div>
   </a>
  </div>
  <div class="col-md-2 hidden-xs"></div>
  </div>
  <br><br>

  </div>


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
            <img src="image\recent_work\thumb.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\recent_work\thumb10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\recent_work\thumb26.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card">
            <img src="image\recent_work\thumb33.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="image\recent_work\thumb48.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card d-none d-md-block">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
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
  <!-- About -->


  <div class="bg-dark" id="about">
    <h1 class="container text-center text-light">About</h1><br>
    <h4 class="container text-center text-info">Contact With Us For Services <a href="1contact_us.php"  class="btn btn-warning btn-lg " role="button" aria-pressed="true" target="_blank">Click</a></h4><br>

    <h1 class="container text-center text-light">Web Development Services</h1>
    <h3 class="container text-center " style="color: white;">Get 360° Web Solutions at MyTechnoBd</h3>
    <p class="container" style="color: white;">Since 2001, 700+ companies have worked with mytechnobd. We have achieved a lot since the beginning. We are an award winning best web design & development company in Bangladesh. Sky is our limit. We work to meet our client's expectation. We build brand from the beginning till the growth and success.</p>
    <br>
    <p class="container" style="color: white;">Trust us with your project. We value your trust. We ensure to make you happy with any of our web services you ask for.

    There are thousands of web design and development companies in Bangladesh. Mytechnobd Limited is one of the top listed web design and development company in BD. We have a talented team of web developers & designers. Our service area is vast. We provide web design & development services, we develop mobile apps & web apps & so o</p><br>


  </div> <br><br>

  <div class="bg-dark" id="androidapp">

   <h1 class="container text-center text-light">Android App Development Services</h1>
   <h3 class="container text-center " style="color: white;">Get 360° Android APP Solutions at MyTechnoBd</h3>
   <p class="container" style="color: white;">Since 2001, 700+ companies have worked with MyTechnobd. We have achieved a lot since the beginning. We are an award winning best web design & development company in Bangladesh. Sky is our limit. We work to meet our client's expectation. We build brand from the beginning till the growth and success.</p>
   <br>
   <p class="container" style="color: white;">Trust us with your project. We value your trust. We ensure to make you happy with any of our web services you ask for.

   There are thousands of web design and development companies in Bangladesh. MyTechnobd Limited is one of the top listed web design and development company in BD. We have a talented team of web developers & designers. Our service area is vast. We provide web design & development services, we develop mobile apps & web apps & so o</p><br>


  </div>	<br><br>

  <div class="bg-dark" id="domainhost">

   <h1 class="container text-center text-light">Domain And Hosting Services</h1>
   <p class="container text-center " style="color: white;">Linux starter hosting includes all the features you need to get your web site hosted powerfully and easily. Linux web hosting (sometime referred to as LAMP - Linux, Apache, MySQL PHP) solutions are suitable for webmasters who use Linux hosting features, such as Perl programming, PHP programming and MySQL database. Linux web site hosting is a powerful and reliable hosting solution and as Linux is an open source software, it is affordable. For Linux, we use the CentOS operating system with cPanel and WHM Control Panels. Linux is the original hosting platform, highly respected and still a very popular platform. Linux is best if you need MySQL support including PHP scripting.</p>
   <br>
   <p class="container" style="color: white;">Trust us with your project. We value your trust. We ensure to make you happy with any of our web services you ask for.

   There are thousands of web design and development companies in Bangladesh. MyTechnobd Limited is one of the top listed web design and development company in BD. We have a talented team of web developers & designers. Our service area is vast. We provide web design & development services, we develop mobile apps & web apps & so o</p><br>


  </div> <br><br>







  <!-- Skill -->


  <div class="container bg-primary">

   <h1 class="container text-center">Our Skills</h1>

   <p>HTML</p>
   <div class="container1">
    <div class="skills html">90%</div>
  </div>

  <p>CSS</p>
  <div class="container1">
    <div class="skills css">80%</div>
  </div>

  <p>JavaScript</p>
  <div class="container1">
    <div class="skills js">65%</div>
  </div>

  <p>PHP</p>
  <div class="container1">
    <div class="skills php">60%</div> 
  </div> <br><br>

  </div>
  <br><br>





  <br>

  <!-- About Us -->




  <br> 

  <div class="container" id="contactus">

   <h1 class="container text-center">Follow Us</h1>

<br>
  </div>


  





  <div class=" card-deck col d-flex justify-content-center">
    <div class="card">
      <img class="card-img-top" src="image\joinus\2.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">My Techno BD- Official  Twitter?</h5>
        <p class="card-text">My Techno BD - Official YouTube Channel regularly releases precious video guidelines  Subscribe to our YouTube channel, watch the videos and gather knowledge.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="image\joinus\1.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">My Techno BD- Official YouTube Channel</h5>
        <p class="card-text">My Techno BD - Official YouTube Channel regularly releases precious video guidelines  Subscribe to our YouTube channel, watch the videos and gather knowledge.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="image\joinus\3.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Join our Facebook Community</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>


  </div>

  <br> <br> <br> <br> <br>








  <div class="" style="background-color:black;">

   <br>
   <p class="container text-center">©2021 by MyTecnoBD. Created & designed by Md Fahim Shahriar Adnan</p>
   <p class="container text-center">Mobile:0170000000,Address:17/Pallabi,Email:fahimadnan5@gmail.com</p><br>

  </div>



  </div>





  <script type="text/javascript" src="js/script.js">
 
 //Extern js 



// function myFunction1(x)
// {

//  if (x.checked === false) {
//     document.getElementById("myDIV").style.WebkitBackfaceVisibility = "visible"; // Code for Chrome, Safari, Opera
//     document.getElementById("myDIV").style.backfaceVisibility = "visible";
//      document.getElementById("javascriptcolor1").style.color="#34495e";
//     document.getElementById("javascriptcolor2").style.color="#34495e";
//     document.getElementById("javascriptcolor3").style.color="#34495e";
//       document.getElementById("javascriptbgcolor").style.background="#e67e22";
//   } else {
//     document.getElementById("myDIV").style.WebkitBackfaceVisibility = "hidden"; // Code for Chrome, Safari, Opera
//     document.getElementById("myDIV").style.backfaceVisibility = "hidden";
   

//   }

// }
  </script>







  </body>





  </html>