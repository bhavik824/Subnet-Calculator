<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="container">
    <h1>SignIn Form</h1>
    <form method="POST" action="#" name="f1">
      <div class="form-control">
        <input type="text" name="t1" required>
        <label>Email</label>
      </div>
      <div class="form-control">
        <input type="password" name="t2" required>
        <label>Password</label>
      </div>
	  <div class="form-control">
        <input type="password" name="t3" required>
        <label>Confirm Password</label>
      </div>
	  <input type="submit" class="btn" value="SIGN IN" name="b">
     <!-- <button class="btn">Login</button> -->
      <p class="text">Login to Account!! <a href="index.php">Login</a></p>
    </form>
  </div>

  <script src="js.js"></script>
  
  <?php
  if(isset($_POST['b'])){
  if($_POST['t2']===$_POST['t3']){
  
$u=$_POST['t1'];
$p=$_POST['t2'];
/* $cp=$_POST['t3']; */
/* if($p===$cp){ */


$con=new mysqli("localhost","root","","login");
if($con==true)
{
$cmd="insert into user values('$u','$p')";
if($con->query($cmd)==true)
{
echo "Your ID is created Successfully!!!";
}
else
{
echo "query prob in select";
}
}
else
{
echo "connection problem";
}
}
else{
echo "Password not Matched. Please Retype the Password";
}
	  
  }
  
  ?>
</body>
</html>