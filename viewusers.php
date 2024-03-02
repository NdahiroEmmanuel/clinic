<?php
include("clinic.html");
?>
<center>
    <h1 style="color:blue">
    System Users</H1><link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/bootstrapjs.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="container">

  <table class="table table-bordered">
	<tr><th>User Name</th><TH>Phone Number</TH><TH>Email</TH><TH>Role</TH><TH>Password</TH><TH>Actions</TH></tr>
	
		<?php
	$con=mysqli_connect("localhost","root","","clinic");
	$q=mysqli_query($con,"select*from users");
	while($f=mysqli_fetch_array($q)){
		?>
		<tr>
			<td><?php echo $f['username'];?></td>
			<td><?php echo $f['phone_number'];?></td>
			<td><?php echo $f['email'];?></td>
			<td><?php echo $f['role'];?></td>
			<td><?php echo $f['password'];?></td>
		<td>
<button  class="btn btn-default" style="background-color:green;color:white"><a href="deleteuser.php?oda=<?php echo $f['user_id'];?>"style="color:white">Delete</a></button>
<button  class="btn btn-default"style="background-color:green;color:white"><a href="updateuser.php?oda=<?php echo $f['user_id'];?>"style="color:white">Update</a></td></tr></button>
			</body>


		<?php
			}
			?>
		</table>
        <style>
            a:hover{
                text-decoration:none;
            }
            </style>