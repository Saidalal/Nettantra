<?php 
 include("connect.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Education Details</title>
</head>
<body>
      
     
     <div class="edu"><h1>Education Details</h1>
     <form action=""method="POST">
     <div class="main">
    
           
     <div id="name">
    
               <label ><b> HSC Institution name: </b></label>
              <input type="hsc" name="hsc" placeholder="Enter Your Institution Name"><br><br>
               
              <label><b>HSC Board : </b></label>
                
               <input type="radio"  name="hscboard" value="CBSE">
               <label for="cbse">CBSE</label>
               <input type="radio"  name="hscboard" value="ICSE">
               <label for="icse">ICSE</label>
               <input type="radio"  name="hscboard" value="STATE BOARD">
               <label for="sboard">STATE BOARD</label>
               
               <br><br>

               <label><b>HSC Percentage : </b></label>
               <input type="hscpercent" name="hscpercent"  placeholder="Enter Your percentage"><br><br>

               <label ><b>SSC Institution name : </b></label>
              <input type="ssc" name="ssc" placeholder="Enter Your Institution Name"><br><br>
               
              <label><b>SSC Board : </b></label>
                
               <input type="radio"  name="sscboard" value="CBSE">
               <label for="cbse">CBSE</label>
               <input type="radio"  name="sscboard" value="ICSE">
               <label for="icse">ICSE</label>
               <input type="radio"  name="sscboard" value="STATE BOARD">
               <label for="sboard">STATE BOARD</label>
                <br> <br>

               <label><b>SSC Percentage : </b></label>
               <input type="sscpercent" name="sscpercent" placeholder="Enter Your percentage"><br><br>
               
               <label ><b>Currently Persuing : </b></label>
              <input type="cp" name="cp" placeholder="Enter Your Institution Name"><br><br>
               
              <label ><b>Current Institution name : </b></label>
              <input type="ci" name="ci" placeholder="Enter Your Institution Name"><br><br>
               
              <label ><b>Overall Percentage : </b></label>
              <input type="op" name="op" placeholder="Enter Your overall percentage"><br><br>
               
              <label><b>BackLog if Any, : </b></label>
                
               <input type="radio" name="backlog" value="YES">
               <label for="yes">Yes</label>
               <input type="radio"  name="backlog" value="NO">
               <label for="no">No</label>
              </div>

              <div class="button">
              <input type="submit" name="submit">
              </div> 
             

      </div> 
       </form>
     </div>

     <?php
           if(isset($_POST['submit']))
           
           {

     $hsc= $_POST['hsc']; 
     $hscboard = $_POST['hscboard']; 
     $hscpercent = $_POST['hscpercent']; 
     $ssc = $_POST['ssc']; 
     $sscboard = $_POST['sscboard']; 
     $sscpercent = $_POST['sscpercent']; 
     $cp = $_POST['cp']; 
     $ci = $_POST['ci']; 
     $op = $_POST['op']; 
     $backlog = $_POST['backlog'];


     $result =mysqli_query($mysqli,"INSERT INTO education values('','$hsc','$hscboard','$hscpercent','$ssc','$sscboard','$sscpercent','$cp','$ci','$op','$backlog')");

     if($result)
     {
         echo  "Success"; 
     }
 
     else{

          echo  "Failed"; 
      }

    }
     
 ?>
</body>
</html>