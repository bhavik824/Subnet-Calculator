<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


  <div class="container">
    <h1>Feedback Form</h1>
    <form method="POST" action="#" name="f1">
      <div class="form-control">
        <input type="text" name="t1" required>
        <label>Name</label>
      </div>
      <div class="form-control">
        <input type="text" name="t2" required>
        <label>Email</label>
      </div>
	  <div class="form-control">
	  <input type="text" name="t3" required>
        
        <label>Was this Helpful?</label>
      </div> 
	  <div class="form-control">
	  <input type="text" name="t4" required>
        
        <label>Any Suggestions?</label>
      </div> 
	  <input type="submit" class="btn"  name="b">
	  
    </div>
      
    </form>
  

  <script src="js.js"></script>
  
  <?php
  if(isset($_POST['b'])){
  
  
$n=$_POST['t1'];
$em=$_POST['t2'];
$h=$_POST['t3'];
$s=$_POST['t4'];

$con=new mysqli("localhost","root","","login");
if($con==true)
{
$cmd="insert into feedback values('$n','$em','$h','$s')";
if($con->query($cmd)==true)
{
header("location:last.php");
}

else
{
echo "query prob in insert";
}
}
else
{
echo "connection problem";
}
}
  
  ?>
  
  <form method="POST" action="defination.html" name="f1">
 <input type="submit" class="btn" value="Back" name="b">
 </form>
  
  </body>
</html>