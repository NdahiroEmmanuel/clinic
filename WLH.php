<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>NESA | Online Services</title>
        <style>
            input{padding: 2px 5px 2px 5px; border-radius: 5px; width: 75%;}
        </style>
                    
        <style>
            .left-column{
                white-space: nowrap;
                text-align: right;
                background: #dae3db;
                padding-left: 10px;
            }
            
            .right-column{
                white-space: nowrap;
                text-align: left;
                background: #dae3db;
                padding-right: 10px;
            } 
            .left-column-lost{
                white-space: nowrap;
                text-align: right;
                background:  #f4cf9f;
                padding-left: 10px;
            }
         
             .left-column-lost-merged{
                text-align: center;
                background: #f4cf9f;
                font-size: 15px;
                font-weight: bold;
                padding: 10px 50px 10px 50px;
            }   
            .right-column-lost{
                white-space: nowrap;
                text-align: left;
                background:  #f4cf9f;
                padding-right: 10px;
            }     
            table {
              border-collapse: collapse;
            }
            
            .send-button{margin-top: 10px; font-size: 20px; background: #9fe89d; padding: 5px; border-radius: 8px; width: 150px; cursor: pointer;}
            .send-button:hover{font-size: 22px; background:  #96d3e5; border-radius: 12px;}
        </style>  
    
    </head>
    <body>
        <div style="text-align: center; margin-top: 120px; font-family: Century Gothic;">

            <a href="http://nesa.gov.rw"><div style="border-radius: 20px; left: 25%; box-shadow: 0 4px 2px -2px gray; width: 50%; height: 100px;  background-image: url('../images/banner-nesa.png'); background-repeat: no-repeat; position: fixed; top: 0px; "></div></a>

            <span style="font-size: 30px">Gusaba Result Slip ya S3</span>
            <br>
            <br>
            
            <div align="center">
            <div style="
                    font-style: italic; 
                    font-size: 14px; 
                    background: #eee; 
                    width: 57%; 
                    border-radius: 25px; 
                    text-align: left; 
                    padding: 20px;
                    ">
                <div style="font-weight: bold; font-size: 16px;">
                    &nbsp;&nbsp;&nbsp; Mbere yo kuzuza form, soma neza aya mabwiriza:
                </div>
                <p>
                    <ul>
                        
                    Gusaba Result Slip hakenwe ibi bikurikira: <br><br>

                    <li>
                    1) Kopi y'indangamuntu niba usaba result slip afite indangamuntu.
                    </li> 
                    <br>
                    <b>Niba warigeze guhabwa result slip ukaba warayitaye, urasabwa:</b>
                    <li>
                    2) Bordereau ya 3,000 FRW yishyurwa kuri konte ya Rwanda Revenue Authority (RRA)
                    </li>
                    <li>
                    3) Icyemezo cy'uko wataye Result Slip (Attestation de perte) gitangwa n'ikigo yigagaho.
                    </li>
                    
                    <br>
                    <b>NB: Abakoze ikizamini kuva 1998 kugeza 2010 ntibarebwa n'ibi byavuzwe hejuru. Buzuza form gusa.</b>

                    </ul>
                </p>   

            </div>
            </div>
            
            <div>
                <form role="form" method="post" id="reused_form" action="S3DataProcess.php" enctype="multipart/form-data" >
                    <div align="center">
                               <!--
                        <span style="font-style: italic; font-size: 14px; "><span style="font-weight: bold; ">Note:</span> Icyangombwa kiboneka nyuma y'iminsi itatu uhereye igihe ugisabiye</span>
                            -->
                        <div style="margin-top: 20px; background: #dae3db; width: 60%; border-radius: 30px; padding: 25px 0 25px 0"> <!--top, right, bottom, left: clockwise from top -->
                            <hr>               


                        <table style="width: 100%">
                            <tr>
                                <td class="left-column" style="width: 50%">
                                    <label for="amazina_y_uwanditse"><span id="status_amazina_y_uwanditse"></span>Amazina y'uwanditse *:</label>
                                    </td>
                                <td class="right-column" style="width: 50%">
                                    
                                    <!-- 
                                    amazina_y_uwanditse should only consist of uppercases, lowercases and spaces
                                    In addition, the username length shouldn’t be more than 50 characters. 
                                    In RegEx, this rule can be expressed as [A-Za-z ]{1,50} 
                                    -->                    
                                    
                                    <input type="text" pattern="[A-Za-z ]{1,50}" class="form-control" id="amazina_y_uwanditse" name="amazina_y_uwanditse" required>
                                    
                                </td>
                        
                            </tr>  
                        
                            <tr>
                                <td class="left-column">
                                    <label for="telephone"><span id="status_telephone"></span>Nomero ya Tel *:</label>
                                    </td>
                                <td class="right-column">
                                    <!-- 
                                    Rwandan Phone should only consist of numbers from 0 to 9. 
                                    In addition, the phone length shouldn’t be more than 50 characters. 
                                    In RegEx, this rule can be expressed as [0-9]{1,10} 
                                    -->                    
                                    <input type="tel"  pattern="[0-9]{1,10}" onFocus="validate_amazina_y_uwanditse();" class="form-control" id="telephone" name="telephone" required>
                                </td>
                        
                            </tr> 
                            
                            <!--Start::Email Field-->
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_email"></span>Email *:</label>
                                    </td>
                                <td class="right-column">
                                    <input type="text" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" onFocus="validate_telephone();" class="form-control" id="email" name="email" required>
                                </td>
                            </tr>  
                            <!--End::Email Field-->                          
                
                            
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_amazina_y_uwakoze_ikizamini"></span>Amazina y'uwakoze ikizamini *:</label>
                                    </td>
                                <td class="right-column">
                                    <!-- 
                                    amazina_y_uwakoze_ikizamini should only consist of uppercases, lowercases and spaces
                                    In addition, the username length shouldn’t be more than 50 characters. 
                                    In RegEx, this rule can be expressed as [A-Za-z ]{1,50} 
                                    -->              
                                
                                    <input type="text" pattern="[A-Za-z ]{1,50}" onFocus="validate_email();" class="form-control" id="amazina_y_uwakoze_ikizamini" name="amazina_y_uwakoze_ikizamini" required>
                                    
                                </td>
                            </tr>  
                            
                
                        
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_ikigo_yigagaho"></span>Ikigo yigagaho *:</label>
                                    </td>
                                <td class="right-column">
                
                                    <!-- 
                                    ikigo_yigagaho should only consist of uppercases, lowercases and spaces
                                    In addition, the username length shouldn’t be more than 50 characters. 
                                    In RegEx, this rule can be expressed as [A-Za-z.-_ ]{1,50} 
                                    -->                    
                                    
                                    <input type="text" pattern="[A-Za-z.\-_ ]{1,50}" onFocus="validate_amazina_y_uwakoze_ikizamini();" class="form-control" id="ikigo_yigagaho" name="ikigo_yigagaho" required>
                                </td>
                            </tr>  
                        
                        
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_umwaka_yakozemo"></span>Umwaka yakozemo ikizamini *:</label>
                                    </td>
                                <td class="right-column">
                                    <span><select name='umwaka_yakozemo' id='umwaka_yakozemo' onFocus='validate_ikigo_yigagaho();' required><option value=''>YYYY</option><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2003-2004'>2003-2004</option><option value='2002-2003'>2002-2003</option><option value='2001-2002'>2001-2002</option><option value='2000-2001'>2000-2001</option><option value='1999-2000'>1999-2000</option><option value='1998-1999'>1998-1999</option></select></span>                                </td>
                            </tr>  
                        
                        
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_father_name"></span>Amazina ya Se *:</label>
                                    </td>
                                <td class="right-column">
                
                                    <!-- 
                                    father_name should only consist of uppercases, lowercases and spaces
                                    In addition, the username length shouldn’t be more than 50 characters. 
                                    In RegEx, this rule can be expressed as [A-Za-z ]{1,50} 
                                    -->
                                    
                                    <input type="text" pattern="[A-Za-z ]{1,50}" onFocus='validate_umwaka_yakozemo();' class="form-control" id="father_name" name="father_name" required>
                                </td>
                            </tr>  
                        
                        
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_mother_name"></span>Amazina ya Nyina *:</label>
                                    </td>
                                <td class="right-column">
                                    
                                    <!-- 
                                    mother_name should only consist of uppercases, lowercases and spaces
                                    In addition, the username length shouldn’t be more than 50 characters. 
                                    In RegEx, this rule can be expressed as [A-Za-z ]{1,50} 
                                    -->
                                    
                                    <input type="text" pattern="[A-Za-z ]{1,50}" onFocus="validate_father_name();" class="form-control" id="mother_name" name="mother_name" required>
                                </td>
                            </tr> 
 
 
 
 
 
                            <tr>
                                <td class="left-column">
                                    <label for="name"><span id="status_registration_number"></span>Index Number:</label>
                                    </td>
                                <td class="right-column">
                                    <input type="text" pattern="[A-Za-z0-9 ]{1,20}" onFocus="validate_mother_name();" class="form-control" id="registration_number" name="registration_number" required>
                                </td>
                            </tr>  
     

     
                                <tr>
                                    <td class="left-column">
                                        <label for="name"><span id="status_id_copy"></span>Kopi y'indangamuntu [pdf]:</label>
                                        </td>
                                    <td class="right-column">
                                        <input type="file" accept="application/pdf" name="id_copy" id ="id_copy" />
                                    </td>
                                </tr> 
                
                                <tr>
                                    <td class="left-column" style="height: 5px">
                                        </td>
                                    <td class="right-column">
                                    </td>
                                </tr>
                               
                               <!-- 
                                <tr style="border-bottom: 1px solid  #f5b697">
                                    <td class="left-column">
                                        <label for="name">Confirmation of result [pdf]:</label>
                                        </td>
                                    <td class="right-column">
                                        <input type="file" accept="application/pdf" name="urwandiko_ruvuye_ku_ishuri" required />
                                    </td>
                                </tr>                  
                                -->
                                
                                <tr style="border-top: 1px solid  #f5b697">
                                    <td colspan="2" class="left-column-lost-merged">
                                       Niba warigeze guhabwa result slip igatakara, ukaba wongeye kuyisaba; urasabwa 2 files zikurikira:
                                        </td>
                
                                </tr> 
                                
                                <tr>
                                    <td class="left-column-lost">
                                        <label for="name">RWF3000 receipt ya RRA [pdf]:</label>
                                        </td>
                                    <td class="right-column-lost">
                                        <input type="file" accept="application/pdf" name="receipt" />
                                    </td>
                                </tr>  
                                
                
                                <tr style="border-bottom: 1px solid  #f5b697">
                                    <td class="left-column-lost">
                                        <label for="name">Attestation de perte [pdf]:</label>
                                        </td>
                                    <td class="right-column-lost">
                                        <input type="file" accept="application/pdf" name="attestation_de_perte" />
                                    </td>
                                </tr>                  
                            </table>   
                            <hr>          
                        </div>
                        <button type="submit" class="send-button" onClick="validate_mother_name();" >Ohereza</button>
                    </div>  
                </form>
            </div>
        </div>
        
        <script>
        /*
        The function below checks for the validity of inputs entered in the above form.
        */
            
        function validate_amazina_y_uwanditse(){
            var inpObj = document.getElementById("amazina_y_uwanditse");
            if(!inpObj.checkValidity()){
                document.getElementById("amazina_y_uwanditse").style.backgroundColor = "yellow";
                document.getElementById("amazina_y_uwanditse").focus();
                document.getElementById("status_amazina_y_uwanditse").style.color = "red";
                document.getElementById("status_amazina_y_uwanditse").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("amazina_y_uwanditse").style.backgroundColor = "white"; 
                document.getElementById("status_amazina_y_uwanditse").innerHTML="";
            }
        } 
    
        function validate_telephone(){
            var inpObj = document.getElementById("telephone");
            if(!inpObj.checkValidity()){
                document.getElementById("telephone").style.backgroundColor = "yellow";
                document.getElementById("telephone").focus();
                document.getElementById("status_telephone").style.color = "red";
                document.getElementById("status_telephone").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("telephone").style.backgroundColor = "white"; 
                document.getElementById("status_telephone").innerHTML="";
            }
        } 
         
        function validate_email(){
            var inpObj = document.getElementById("email");
            if(!inpObj.checkValidity()){
                document.getElementById("email").style.backgroundColor = "yellow";
                document.getElementById("email").focus();
                document.getElementById("status_email").style.color = "red";
                document.getElementById("status_email").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("email").style.backgroundColor = "white"; 
                document.getElementById("status_email").innerHTML="";
            }
        }   
    
        function validate_amazina_y_uwakoze_ikizamini(){
            var inpObj = document.getElementById("amazina_y_uwakoze_ikizamini");
            if(!inpObj.checkValidity()){
                document.getElementById("amazina_y_uwakoze_ikizamini").style.backgroundColor = "yellow";
                document.getElementById("amazina_y_uwakoze_ikizamini").focus();
                document.getElementById("status_amazina_y_uwakoze_ikizamini").style.color = "red";
                document.getElementById("status_amazina_y_uwakoze_ikizamini").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("amazina_y_uwakoze_ikizamini").style.backgroundColor = "white"; 
                document.getElementById("status_amazina_y_uwakoze_ikizamini").innerHTML="";
            }
        } 
         
        function validate_ikigo_yigagaho(){
            var inpObj = document.getElementById("ikigo_yigagaho");
            if(!inpObj.checkValidity()){
                document.getElementById("ikigo_yigagaho").style.backgroundColor = "yellow";
                document.getElementById("ikigo_yigagaho").focus();
                document.getElementById("status_ikigo_yigagaho").style.color = "red";
                document.getElementById("status_ikigo_yigagaho").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("ikigo_yigagaho").style.backgroundColor = "white"; 
                document.getElementById("status_ikigo_yigagaho").innerHTML="";
            }
        } 
         
        function validate_umwaka_yakozemo(){
            var inpObj = document.getElementById("umwaka_yakozemo");
            if(!inpObj.checkValidity()){
                document.getElementById("umwaka_yakozemo").style.backgroundColor = "yellow";
                document.getElementById("umwaka_yakozemo").focus();
                document.getElementById("status_umwaka_yakozemo").style.color = "red";
                document.getElementById("status_umwaka_yakozemo").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("umwaka_yakozemo").style.backgroundColor = "white"; 
                document.getElementById("status_umwaka_yakozemo").innerHTML="";
            }
        } 
         
        function validate_father_name(){
            var inpObj = document.getElementById("father_name");
            if(!inpObj.checkValidity()){
                document.getElementById("father_name").style.backgroundColor = "yellow";
                document.getElementById("father_name").focus();
                document.getElementById("status_father_name").style.color = "red";
                document.getElementById("status_father_name").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("father_name").style.backgroundColor = "white"; 
                document.getElementById("status_father_name").innerHTML="";
            }
        } 
         
        function validate_mother_name(){
            var inpObj = document.getElementById("mother_name");
            if(!inpObj.checkValidity()){
                document.getElementById("mother_name").style.backgroundColor = "yellow";
                document.getElementById("mother_name").focus();
                document.getElementById("status_mother_name").style.color = "red";
                document.getElementById("status_mother_name").innerHTML="[Uzuza ukoresheje inyuguti zikwiye]";
                //inpObj.value ="";
            }
            else{
                document.getElementById("mother_name").style.backgroundColor = "white"; 
                document.getElementById("status_mother_name").innerHTML="";
            }
        } 

        </script>        
        
        
    </body>
</html>
            
  <?php

    $file = "Bang.png"; //Let say If I put the file name Bang.png
    echo "<a href='download.php?nama=".$file."'>donload</a> ";

?>
download.php

<?php
    $name= $_GET['nama'];
    download($name);

    function download($name) {
        $file = $nama_fail;

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            exit;
        }
    }


?>