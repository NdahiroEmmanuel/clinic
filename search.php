
<?php
include("top.php");

if(isset($_POST['sub'])){
	$a=$_POST['seach'];
    ?>
    your search"<?php echo $a;?>"
    <?php
  $con=mysqli_connect("localhost","root","","project");
  $q=mysqli_query($con,"select *from house where name like'$a%' or sector_location like'$a%' or district_location like'$a%'
   or action like'$a%' or category like'$a%'");
  while($f=mysqli_fetch_array($q)){
    if($q){
		?> <table style="border:1px solid grey" target="frames">
        <tr target="frames"><td>
<a href="viewproducts.php?odsa=<?php echo $f['id'];?>">
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
       
    
		</table>


        <?php
    }
else
echo"failed";
?>
<?php
  }
?>
        <style>
            table{
float:left;



            }
            tr{
                float:left;
                margin:10px;
            }

</style>

<?php

          }
          ?>

<div class="lcc">
<?php

include("menu.php");
?>
<style>
    .lcc{
        margin-top:700px;
        margin-left:0px;
        margin-bottom:0px;
    }