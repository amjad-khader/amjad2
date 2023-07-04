<?php 
include 'layouts/header.php';
include "connect.php";
if(isset($_POST['submit'])){
  $u_name = $_POST['uname'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $c_pass = $_POST['C_Password'];

$query = "select * from register_admin where email = '$email' ";
$result = $connect -> query($query);
if($result->num_rows>0){
echo "<script>alert('Email is registered')</script>";
}else{

  if($pass == $c_pass){
$query_insert = "INSERT INTO register_admin (username,email,password, `confirm password`)VALUES('$u_name','$email','$pass','$c_pass')";
$connect -> query($query_insert);
    header("location:Login.php"); 

}else{
echo "<script>alert('Password and Confirm Password is different')</script>";
  }

  
}

}
?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><b>Register Page</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home Page</b></a>
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
    <label for="exampleInputEmail1" class="form-label">User Name : </label>
    <input type="text" class="form-control" name="uname" placeholder="Enter Your Name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address : </label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
  </div>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="C_Password" placeholder="Enter Your Confirm Password">
  </div>

  <div class="mb-3">
  <input type="submit" name="submit" class="btn btn-primary" value="register">
  </div>

</form>
    </div>
    
    <div class="col">
<img src="images/mobile-login-concept-illustration_114360-83.webp" alt="">
    </div>
</div>
</div>

</section>

<?php include 'layouts/footer.php'

?>