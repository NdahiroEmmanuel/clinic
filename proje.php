<html>
    <body>
        <head>

        <title>

</title><body>
<div class="jss" style="background-color:grey;height:70px">
<div class="bd"style="background-color:#333;height: 65px;margin-top:0px">
<div class="dropdown">
  <button class="dropbtn" style="margin-top:80px">Home<i class="fa fa-caret-down"></i></button>
  
</div><div class="dropdown">
  <button class="dropbtn">Land <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">

  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for sale'");
    while($f=mysqli_fetch_array($q)){
      ?> 
    <a href="landforsale.php" target="cl">For Sale(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
    <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
<a href="project.php">For Rent (<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
  </div>
</div><div class="dropdown">
  <button class="dropbtn">Houses<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">

  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
    <a href="#">For Sale(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>

    <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
    <a href="#">For Rent(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>

  </div>
</div><div class="dropdown">
  <button class="dropbtn">Logde <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">

  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="#">For Sale(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>


  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="#">For Rent(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
  </div>
</div><div class="dropdown">
  <button class="dropbtn">Vehicles <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
    <a href="#">Motor vehicle(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>

    <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="#">car(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="#">Bycle(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
  </div>
</div><div class="dropdown">
  <button class="dropbtn">Electronics<i class="fa fa-caret-down" style="color: ;"></i></button>
  <div class="dropdown-content">
    <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="online.php">Mobile phone(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>

    <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="#">Tv(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
    
    <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="#">Computer(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>
  
  
  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for rent'");
    while($f=mysqli_fetch_array($q)){
      ?> 
  <a href="online">Camera(<?php echo $f['hou'];?>)
</a>
<?php
    }
    ?>


  </div>
</div><div class="dropdown">
  <button class="dropbtn"><a href="" style="text-decoration: none;color:white;font-size: 25px;">Login</a></button>
  
</div></div></div>
<div class="columns" style="width: 20%;background-color: white"></div>
<div class="columns"style="width: 79.7%;background-color: white" name="cl"><iframe name="cl" width="100%" height="100%"></iframe></div>
    <style>
.columns{
		float: left;
		height: 200px;
		background-color: black;
		margin-top: 0%;
		border: 1px solid black;
        height:100%

	}
    body{
        margin-left:0px;
        margin-top:0px;
        margin-right:0px;
    }
    .jss{
position: relative;

    }
    </style>
    <style>



* {
  box-sizing: border-box;
}



@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}


.dropbtn {
  background-color:white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.dropdown {
  position: block;
  display:block;
  margin: 3px;
  margin-top: 0px;
  float:bottom;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#333;
  min-width: 115px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size:15px;
}

.dropdown-content a:hover {background-color: white;
color:black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  color: red;
}
.bd{
  width: 100%;
}
</style>