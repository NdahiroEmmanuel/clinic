<?php
session_start();
?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body><center>

<div class="container">
  <h2>Login form</h2>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Registration number" name="email" width="400"style="width:200px">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" width="400"style="width:200px;background-color:#4f93a6;">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <input type="submit" class="btn btn-default" name="sub" style="background-color:#006991;color:white;font-style:louis George cafe">
  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['sub'])){
  $a=$_POST['email'];
  $b=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","sms");
$q=mysqli_query($con,"select*from students where stu_reg='$a'");
$f=mysqli_fetch_array($q);
if(is_array($f)){
	$_SESSION['cidss']=$f['stu_reg'];
	$_SESSION['name']=$f['stu_email'];
	$_SESSION['pass']=$f['password'];

	
	if($_SESSION['cidss']==$a){
    $qu=mysqli_query($con,"update students set password='$b'where stu_reg='$a'");
    if($qu){
      $qur=mysqli_query($con,"insert into students_account as select*from students");
if($qur){
  echo"successfull";
 }}}}
else
echo"failed";
}
?>
</form>
</body>
</html>

<style>
  body{
    background-image:url(gabi.png);
    background-repeat: no-repeat;
  background-size: cover;

  }
  </style>
