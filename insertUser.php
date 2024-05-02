<?php

include('config.php');

if(isset($_POST['Register'])){
    $Fname=$_POST['firstName'];
    $Lname=$_POST['lastName'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
   
    $insert="INSERT INTO user(FirstName, LastName, Email, Password) VALUES 
                            ('$Fname','$Lname','$Email','$Password')";
    
    $result = mysqli_query($cont, $insert);
        
    if($result) {
        echo "welcome";
        header('location: product.html'); 
        exit;
    } else {
        echo "Error: " . mysqli_error($cont); 
   
    }}
  
?>