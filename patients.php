<?php
include("doctor_page.php");
?>

<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
<link rel="stylesheet" href="bootstrap\css">


  <div class="container">
<h1 style="color:blue"><center>
   Add New Patient</H1><b><center>
   <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fistname">First Name<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
      <input type="text" class="form-control" name="fn" placeholder="Enter First name"required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
      <input type="text" class="form-control" name="ln" placeholder="Last name"required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Registration Number<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
    <input type="number" class="form-control" name="rn" placeholder="Registration Number"required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Address<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
    <input type="text" class="form-control" name="addr" placeholder="Address"required>
  </div></div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
      <input type="number" class="form-control" name="pn" placeholder="Add phone number"required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Date of Birth<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
      <input type="date" class="form-control" name="dob"required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Class<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
      <select name="class" class="form-control"required>
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Year of study<sup style="color:red;font-size:20px;margin-top:200px">*</sup></label>
      <select name="yos" class="form-control"required>
        <option selected>choose....</option>
        <option>Year 1</option>
        <option>Year 2</option>
        <var><option> Year 3</option>
        <option>Year 4</option>
        <option>Year 5</option>
        <option>Year 6</option></var>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>