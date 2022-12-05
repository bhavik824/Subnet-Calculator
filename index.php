<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Login Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="container">
    <h1>Login Form</h1>
    <form method="POST" action="#" name="f1">
      <div class="form-control">
        <input type="text" name="t1" required>
        <label>Email</label>
      </div>
      <div class="form-control">
        <input type="password" name="t2" required>
        <label>Password</label>
      </div>
	  <input type="submit" class="btn" value="Login" name="b">
     <!-- <button class="btn">Login</button> -->
      <p class="text">Don't have an account? <a href="signin.php">Register</a></p>
    </form>
  </div>

  <script src="js.js"></script>
  
  <?php
  if(isset($_POST['b'])){
$u=$_POST['t1'];
$p=$_POST['t2'];
$con=new mysqli("localhost","root","","login");
if($con==true)
{
$cmd="select * from user where username='$u' and pass='$p'";
if($t=$con->query($cmd))
{
if($t->num_rows>0)
{
	
header("location:defination.html");
}
else
{
echo "invalid username or password";
}}
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
  
  ?>
</body>
</html>