

<?php

include 'layouts/header.php';
include 'connect.php';

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

$query = "select * from register_admin where email = '$email' and password = '$password'";

$result = $connect -> query($query);

$lenght = $result->num_rows ;

if($lenght == 1){

  setcookie("username","تم تسجيل الدخول بنجاح",time()+ 1);

  session_start();
  $_SESSION['auth'] = true;
header("location:dashboard.php");
}else{
  echo "<script>alert('The email or password are wrong')</script>";
}
}

?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><b>Login Page</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home Page</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Register.php"><b>Register</b></a>
        </li>
       
         
      </ul>
    
    </div>
  </div>
</nav>
<section class="sec-reg">
<div class="container">

<div class="row">
    <div class="col">

    <form action="" method="POST">
 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address : </label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
  </div>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
  </div>



  <div class="mb-3">
  <input type="submit" name="submit" class="btn btn-primary" value="LOG IN">
  </div>

</form>
    </div>
    
    <div class="col">
<img src="images/img2.webp" alt="">
    </div>

</div>
</div>

</section>




<?php include 'layouts/footer.php'

?>