<?php 
$conn=mysqli_connect('localhost','root','','food');
if(isset($_POST['submit'])){
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
$message=mysqli_real_escape_string($conn,$_POST['message']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$contact=$_POST['contact'];
$email=mysqli_real_escape_string($conn,$_POST['email']);
$insert=mysqli_query($conn,"INSERT INTO `travel`(firstname,lastname,message,city,contact,email)VALUES('$firstname','$lastname','$message','$city','$contact','$email')");
if($insert){
   $message[]='form made successful';
}else{
  $message[]='form failed';
}
}
?>
<!doctype html>
<html>
<head>
<title>historical places website</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
 <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
div{
	text-align:center;
}
</style>
</head>

<body class="bg-light">

<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light py-0">
  
    <a class="navbar-brand" href="#"><img src="travel.jpg" style="width:60px;height:60px" class="rounded-pill">AP Tourist Places</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#section1"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2"><b>About us</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3"><b>Details</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4"><b>Residency&Food court</b></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/MYSITE/login/new.html"  target="_blank"><b>Upload</b></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#section5"><b>Contact Us</b></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="logout.php"><button type="button" class="btn btn-primary"><b>Logout </b></button></a>
        </li>
      </ul>
    </div>
 
</nav>
<div data-bs-spy="scroll" data-bs-target="#mynavbar" class="mt-5" >
 <h1 id="section1"><i>TOP DESTINATION PLACES IN ANDHRA PRADESH</i></h1> 
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tiru.jpg" style="height:500px;" class="d-block w-100" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <h3>TIRUPATI</h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="kakinada.jpg" style="height:500px;" class="d-block w-100" alt="slide2">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">KAKINADA</h3>
      

      </div>
    </div>
    <div class="carousel-item">
      <img src="guntur.jpg" style="height:500px;" class="d-block w-100" alt="slide3">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">GUNTUR</h3>
      
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Package -->
<h2  style="text-align:center;" id="section2"> Custom Cambodia Packages Book Now</h2>
<h4>Cambodia Tourism 2023!</h4>
<h4>Enjoy Cambodia Holiday With our Custom Tour Packages.</h4>
<section>
<div class="container my-5">
  <div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <!-- Card -->
      <div
           class="bg-image card shadow-1-strong"
           style="
                  background-image: url('kadapa1.jpg');
                  "
           >
        <div class="card-body text-white">
          <h5 class="card-title">Kadapa</h5>
          <p class="card-text">
         Kadapa is well known for its spicy and culinary food which is very similar to the South Indian food. Karam dosa is one of the most favourite item of kadapa citizens. You can see many scenries with full landscape.
          </p>
          <a href="form.html" class="btn btn-outline-light">Book Now</a>
        </div>
      </div>
      <!-- Card -->
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <!-- Card -->
      <div
           class="bg-image card shadow-1-strong"
           style="
                  background-image: url('kunool.jpeg');
                  "
           >
        <div class="card-body text-white">
          <h5 class="card-title">Kurnool</h5>
          <p class="card-text">
           This district derives its name from its chief town Kurnool the capital of former Nawabs, Capital of Andhra Pradesh State from 1st October 1953 to 1st November, 1956 and at present the headquarters of the district.
          </p>
          <a href="form.html" class="btn btn-outline-light">Book Now</a>
        </div>
      </div>
      <!-- Card -->
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <!-- Card -->
      <div
           class="bg-image card shadow-1-strong"
           style="
                  background-image: url('vishaka1.jpg');
                  "
           >
        <div class="card-body text-white">
          <h5 class="card-title">Vishakapatnam</h5>
          <p class="card-text">
           Visakhapatnam is Metro City in the state of Andhra Pradesh and also largest city in the state.the present name is given by Eastern Chalukyas king to their family deity Visakha in 1010 CE.Some of the famous items of Vizag are Putharekulu,  Pulihara and Murku.
          </p>
          <a href="form.html" class="btn btn-outline-light">Book Now</a>
        </div>
      </div>
      <!-- Card -->
    </div>
  </div>
</div>

</section>
<!--Customer Details-->
<div class="row">
<h3 id="section3">CUSTOMER DETAILS</h3>
<div class="col-6 my-5"><img src="girl.jpg" alt="tour" style="width:500px;height:510px;"></div>
<div class="col-6 my-5">
<div class="container-fluid bg-danger-subtle rounded my-8">

<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >

<?php 
  if(isset($message)){
      foreach($message as $message){
          echo '<p class"message">' .$message.'</p>';
     }
  }
?>
<span>first name</span>
<input type="text" name="firstname" placeholder="enter your first name" class="form-control">
<span>last name</span>
<input type="text" name="lastname" placeholder="enter your last name" class="form-control">
<span>Message</span>
<input type="text" name="message" placeholder="enter your message" class="form-control">
<span>City</span>
<input type="text" name="city" placeholder="enter city name" class="form-control">
<span>Contact</span>
<input type="number" name="contact" placeholder="enter your contact" class="form-control">
<span>email</span>
<input type="email" name="email" placeholder="enter your email" class="form-control">
<input type="submit" value="submit" name="submit" class=" btn btn-primary mb-5 my-3">
</form>
</div>
</div> 

</div>
<div class="row">
<h2 id="section4">RECIDENCY & FOOD COURTS</h2>
<div class="container">

<div class="row mx-12">
<div class="col-3">
<div class="card" style="width: 18rem;">
  <img src="symbol.jpg" class="card-img-top" alt="...">
  <div class="card-title">
  
    <a href="rfoob.php">Kadapa</a>
  </div>
</div>
</div>
<div class="col-3">
<div class="card" style="width: 18rem;">
  <img src="symbol.jpg" class="card-img-top" alt="...">
  <div class="card-title">
    
    <a href="rfoob1.php" >Kurnool</a>
  </div>
</div>
</div>
<div class="col-3 ">
<div class="card" style="width: 18rem;">
  <img src="symbol.jpg" class="card-img-top" alt="...">
  <div class="card-title">
    
    <a href="rfoob2.php">Vishakapatnam</a>
  </div>
</div>
</div>
<div class="col-3">
<div class="card" style="width: 18rem; mb-5">
  <img src="symbol.jpg" class="card-img-top" alt="...">
  <div class="card-title">
    
    <a href="rfoob3.php">Vijayawada</a>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
 <!-- Your website content here -->

    <footer class="bg-dark text-white py-4" id="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>123 Tourist Street, City<br>
                    Email: info@touristwebsite.com<br>
                    Phone: +1234567890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Subscribe</h5>
                    <p>Subscribe to our newsletter for the latest updates.</p>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; 2023 Tourist Website. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add Bootstrap JS and any other scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
