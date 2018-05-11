<?php

$input_email = $_POST['input_email'];
$input_password = $_POST['input_password'];
$input_token = $_POST['input_token'];


        
   
            if ($input_token == $_COOKIE["cookie_token"]){
               
                 /* Valid Token */
     echo "Valid Token <br>";
     
       
     
    
    if($input_email == "IT13111502@my.sliit.lk" && $input_password == "IT13111502"){
        
        
         echo "Valid Email & Password";
        
        
        
    }else{
        
        
         echo "Invalid Email & Password";
        
        
        
    }
    
                
            }
       
     else {
        
         
         
         
     /* Invalid Token */
    
    echo "Invalid Token";
    
    
    
    }
    ?>