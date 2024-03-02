
	
		<?php
	$con=mysqli_connect("localhost","root","","project");
	$q=mysqli_query($con,"select*from house group by id");
	while($f=mysqli_fetch_array($q)){
		?>  <table style="border:1px solid grey">
        <tr><td>
<a href="deleteproduct.php?odsa=<?php echo $f['id'];?>">
<img src="<?php echo $f['image'];?>" width="270" height="200"></a><br>
	<b>
		<div class="filh"><br>
      
			<?php echo $f['district_location'];?>
			<?php echo $f['sector_location'];?><br>
			<?php echo $f['price'];?>
			<?php echo $f['action'];?><br>
			<?php echo $f['category'];?><br></td></tr></table>
    </div>
			</body>


		<?php
			}
			?>
		</table>

        <style>
            table{
float:left;


            }
            tr{
                float:left;
                margin:10px;
            }