<?php     //start php
  include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!----======== CSS ======== -->
     <link rel="stylesheet" href="style1.css">
    <!----===== Icons CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Personal Details</title>
</head>
<body> 
     
     
      <div class="container">
      <header>Personal Details</header>
        
            
      <form action=""method="POST">
           
        <div class="form first">
        <div class="details personal">  

                <div class="fields">

                         <div class="input-field">
                            <label><b> Name</b></label>
                            <input type="text"  name="name"required>
                           </div>
                     
                           <div class="input-field">
                            <label><b>Email</b></label>
                            <input type="email"  name="email" required>
                            </div>
         
                         <div class="input-field">
                          <label for="gender-select"><b>Gender</b></label> 
                          <select type="gender" name="gender">
                          <option value="">--Please choose an option--</option>
                          <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                         </div>
                        
                         <div class="input-field">
                         <label><b>Enter your birthday</b></label>
                        <input type="date" name="date">
                        </div>

                        <div class="input-field">
                            <label><b>Mobile Number</b></label>
                            <input type="mobile"name="mobile"required>
                            </div>

                            <div class="input-field">
                            <label><b>Father's Name</b></label>
                            <input type="text" name="faname"  required>
                            </div>

                            <div class="input-field">
                            <label><b>Father's occupation</b></label>
                            <input type="foccupation" name="foccupation"  required>   
                            </div>

                            <div class="input-field">
                            <label><b>Mother's Name</b></label>
                            <input type="text"  name="mname"  required>
                            </div>

                            <div class="input-field">
                            <label><b>Mother's occupation</b></label>
                            <input type="moccupation"  name="moccupation"  required>
                            </div>

                            <div class="input-field">
                            <label><b>Nationality</b></label>
                            <input type="nationality"  name="nationality"   required>
                            </div>

                            <div class="input-field">
                            <label><b>State</b></label>
                            <input type="state"  name="state"   required>
                            </div>

                            <div class="input-field">
                            <label><b>District</b></label>
                            <input type="dist"  name="dist" required>
                            </div>

                            <div class="input-field">
                            <label><b>Pincode</b></label>
                            <input type="pincode"   name="pincode" required>
                            </div>

                
                     <button class="nextBtn">
                     <input type="submit" name="submit">
                     </button>


                </div>      
             </div>

             </div>
        
             </form> 
            </div>
            
              

   
    <script src="script1.js"></script>
    
    <?php
           if(isset($_POST['submit']))
           
           {
              
            $name = $_POST['name']; 
            $email = $_POST['email']; 
            $gender = $_POST['gender']; 
            $date = $_POST['date']; 
            $mobile = $_POST['mobile']; 
            $faname = $_POST['faname']; 
            $foccupation = $_POST['foccupation']; 
            $mname = $_POST['mname']; 
            $moccupation = $_POST['moccupation']; 
            $nationality = $_POST['nationality']; 
            $state = $_POST['state']; 
            $dist = $_POST['dist']; 
            $pincode = $_POST['pincode']; 
            
            $result = mysqli_query($mysqli,"INSERT into users values('','$name','$email','$gender','$date','$mobile','$faname','$foccupation','$mname','$moccupation','$nationality','$state','$dist','$pincode')");

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