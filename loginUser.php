<?php 

  include('config.php');
  if(isset($_POST['login'])){
    $Un_Em= $_POST['email'];
    $password= $_POST['password'];
    $query= "SELECT * FROM user WHERE  Email='$Un_Em' AND Password ='$password' ";
    $result=mysqli_query($cont,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        header('location:product.html');
    }else{
        echo "invalid login";
        header('location:login.html');
    }
  }
 
?>