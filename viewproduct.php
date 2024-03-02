


<?php
$id=$_GET['odsa'];
?><a href="project.php" target="cl">Back</a>
<table border="1"style="border-collapse: collapse;">
<tr><th>Name</th><TH>District Location</TH><TH>Sector Location</TH><TH>Price</TH><TH>ACTIONS</TH><TH>Image</TH><TH>Category</TH></tr>

	<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select*from house where id='$id'");
while($f=mysqli_fetch_array($q)){
	?>
	<tr>
		<td><?php echo $f['name'];?></td>
		<td><?php echo $f['district_location'];?></td>
		<td><?php echo $f['sector_location'];?></td>
		<td><?php echo $f['price'];?></td>
		<td><?php echo $f['action'];?></td>
		<td><img src="<?php echo $f['image'];?>" width="400" height="200"></td>
		<td><?php echo $f['category'];?></td>
	</tr>
		</body>


	<?php
		}
		?>
	</table>
