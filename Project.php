<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=6">
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
  background-color: #333;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin: 35px;
  margin-top: 0px;
  margin-left: 3%;
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
</head>
<body>

<div class="top">
  <img src="yora.jpg" width="100%" height="100" style="margin-bottom: 0px;">
  <form method="POST" action="search.php">

  <input style="border:0px solid black" type="text" name="seach" placeholder="search here" required>
  <button type="submit" href="search.php" target="frames" name="sub">seach</button>
  </form>

</div>
<div class="bd"style="background-color:#333;height: 65px;margin-top:0px">
<div class="dropdown">
  <button class="dropbtn">Home<i class="fa fa-caret-down"></i></button>
  
</div><div class="dropdown">
  <button class="dropbtn">Land <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">

  <?php
    $con=mysqli_connect("localhost","root","","project");
    $q=mysqli_query($con,"select count(*)as hou from house where action='for sale'");
    while($f=mysqli_fetch_array($q)){
      ?> 
    <a href="landforsale.php">For Sale(<?php echo $f['hou'];?>)
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
  
</div></div>
<div class="body">

<div class="columnsss" style="width: 20%;background-color: white"></div>
<div class="columnsss"style="width: 79.7%;background-color: white" name="cl"><iframe name="frames" width="100%" height="100%"></iframe></div>


</div>
</html><div class="col" style="width: 100%;">
<div class="columns" style="width: 50%;background-color: black"><h1 style="color: white">Adress</h1><h4 style="color: white">Rwanda-kigali-nyarugenge<br>At road kk23747-24302<br></h4><h1 style="color: white">&copy 2022 jaxofff</h1>
</div><div class="columns" style="width: 50%;background-color: black"><h1 style="color: white">Contact</h1><h4 style="color: white">phone number:0787549324<br>
  facebook:onlineshop<br>
instagram:onlishop<br>
twitter:shopon<br>
e-mail:onlineshoping1@gmail.com<br></h4>


<h1 style="color: white">&copy 2022 jaxofff</h1></div></div>
<style type="text/css">
   a{
    font-size: 10px;
  }

		.columns{
		float: left;
		height: 200px;
		background-color: black;
		margin-top: 0%;
		border: 0.2px solid black;
    width: 100%;
	}
    body{
    bottom: 0px;
    left: 0px;
    position: absolute;
    right: 0px;
    top: 0px;
    }
    .columnsss{
		float: left;
		height: 200px;
		background-color: black;
		margin-top: 0%;
		border: 1px solid black;
        height:800px;

	}
  bodys{
    margin-left:90px;
    margin-right:90px;
    margin-top:0px;
  }
</style>





