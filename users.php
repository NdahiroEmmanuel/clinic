<!DOCTYPE html>
<html>
<body>
	<?php
	include("clinic.html");
	?><center><b>
<link rel="stylesheet" href="users.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="container">
<h1 style="color:blue">
   Add System Users</H1>

<form  method="POST" class="form-group" style="border:0px solid grey;border-radius:10px;width:300px">
	<table>
		<tr>
<td>Username</td><td><input type="text" name="nms" class="form-control"></td></tr>
<td>Phone Number</td><td><input type="number" name="dls" class="form-control"></td></tr>
<td>Email</td><td><input type="email" name="sls"class="form-control"></td></tr>
<td>Role</td><td><input type="text" name="prs"class="form-control"></td></tr>
<td>Password</td><td><input type="password" name="acts" class="form-control" required></td></tr>
<td><button type="submit" value="Add User" name="submitss" class="btn btn-default"style="background-color:darkblue;color:white">Add User</button></td>
<td><center><a href=""><button type="reset" value="Cancel" class="btn btn-default" style="background-color:darkblue;color:white"class="cll">Cancel</button></a></td></tr></table>
</form>
<?php
if(isset($_POST['submitss'])){
	
	$a=$_POST['nms'];
	$b=$_POST['dls'];
	$c=$_POST['sls'];
	$d=$_POST['prs'];
	$e=$_POST['acts'];
	$con=mysqli_connect("localhost","root","","clinic");
$q=mysqli_query($con,"insert into users values('','$a','$b','$c','$d','$e')");
if($q){
	echo "inserted";
}
else
echo "failed";
}
?>



<style>
	.cll{
		border:0px solid darkblue;
		border-radius:10px;
		color:white;
		padding:15px;
	}
	a{
		text-decolation:none;
	}
	</style>