<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 


function Palindrome($string){ 
      
    // got the code from the internet :D:D:D:D
    if ((strlen($string) == 1) || (strlen($string) == 0)){ 
        echo "Palindrome"; 
    } 
  
    else{ 
          
        
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){ 
              
        
            return Palindrome(substr($string,1,strlen($string) -2)); 
        } 
        else{  
            echo " Not a Palindrome"; } 
    } 
} 
  
$string = "dadad"; 
Palindrome($string); 

 
?>
</body>
</html>