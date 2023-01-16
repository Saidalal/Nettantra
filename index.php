<?php
    session_start();

    $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <title>MULTIPLE FORM PAGES</title>
</head>
<body>
    
    <div class="container">
        <nav>
           
            <div class="logo"><img src="logo.png"</div>
            <ul class="navItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="personald/index1.php">Personal Details </a></li>
                <li><a href="educationd/index2.php">Education Details </a></li>
                <li><a href="document/index3.php">Documents Verifications</a></li>
             </ul>   
           
         <div class="links">
             
            <a href="https://www.linkedin.com/" target="_new"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/" target="_new"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/_blank" target="_new"><i class="fab fa-twitter"></i></a>
         </div> 
        </nav> 
        
    <div class="wrapper">
       <div class="cols cols0">
         <span class="topline">Nettantra</span>
         <h1><span class="multitext"</span></h1>
         <p> NetTantra is a boutique Technology Consulting Firm specializing in the
              fields of AI, Blockchain, Cloud Computing, IT & Software Development.</p>
       </div> 
    <div class="cols cols1"></div>

    
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
            <script>
        var typed = new Typed(".multitext",
        {
            strings : ["TECHNOLOGY","DESIGN","CONSULTING"],
            loop : true,
            typeSpeed : 100,
            backSpeed : 80,
            backDelay : 1500
        })
        </script>
        </script>

</body>
</html>