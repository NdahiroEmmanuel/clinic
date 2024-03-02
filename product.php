<!DOCTYPE html>
<html>
<body>

<form  method="POST" enctype="multipart/form-data">
name<input type="text" name="nm"><br>
  district location<input type="text" name="dl"><br>
  sector location<input type="text" name="sl"><br>
  price<input type="text" name="pr"><br>
  action<input type="text" name="act"><br>
  image<input type="file" name="fileToUpload" id="fileToUpload"><br>
  category type<input type="text" name="cat"><br>
  <input type="submit" value="Upload" name="submits">
</form>
<?php
if(isset($_POST['submits'])){
	
	$a=$_POST['nm'];
	$b=$_POST['dl'];
	$c=$_POST['sl'];
	$d=$_POST['pr'];
	$e=$_POST['act'];
	$g=$_POST['cat'];
	$files=$_FILES["fileToUpload"]["tmp_name"];
	$path="myfolder/".$_FILES["fileToUpload"]["name"];
	move_uploaded_file($files,$path);
	$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"insert into house values('','$a','$b','$c','$d','$e','$path','$g')");
if($q){
	echo "inserted";
}
else
echo "failed";
}
?>
<table border="1"style="border-collapse: collapse;">
	<tr><th>Name</th><TH>District Location</TH><TH>Sector Location</TH><TH>Price</TH><TH>ACTIONS</TH><TH>Image</TH><TH>Category</TH><th>Decision</tr>
	
		<?php
	$con=mysqli_connect("localhost","root","","project");
	$q=mysqli_query($con,"select*from house");
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
		<td>
<a href="deleteproduct.php?oda=<?php echo $f['id'];?>">DELETE</a></td></tr>
			</body>


		<?php
			}
			?>
		</table>