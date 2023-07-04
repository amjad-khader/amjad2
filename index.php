
<?php 
include "connect.php";
$query = "select * from navbar";
$result_navbar = $connect->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
    <div class="opsite"></div>
<nav>
<h1>Portfo<span>lio</span></h1>

<ul>
<?php while($nav = $result_navbar -> fetch_assoc()){
?>
    <li><?php echo $nav['li'] ?></li>
    
    <?php } ?>

    <li><a href="Login.php" style="text-decoration: none; color: #f9004d; font-size: 20px;">Login</a></li>
    <li><a href="Register.php" style="text-decoration: none; color: #f9004d; font-size: 20px;">Register</a></li>
</ul>
</nav>


<div class="hero-div">
    <?php 
$query = "select * from section1";
$result = mysqli_query($connect,$query);
    ?>

    <?php while($sec1 = $result -> fetch_assoc()){
        ?>

    
<h3><?php echo $sec1['h31'] ?></h3>
<h2><?php echo $sec1['h2'] ?> <span> <?php echo $sec1['span'] ?> </span></h2>
<h3><?php echo $sec1['h32'] ?></h3>
<input type="text" placeholder="entar your email">

<button><?php echo $sec1['button'] ?></button>

<?php 
}
?>
</div>

    </header>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>