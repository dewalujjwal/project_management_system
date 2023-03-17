<?php 
include('assets/server/connection.php');
     
   if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    
    $confirm_password = $_POST['confirm_password'];
       if($_POST['password'] != $_POST['confirm_password']){
        echo"
        <script>
        alert('passwords are not matiching');
        window.location.href='register.php';
        </script>";

       }

    else{
      $dup_no = mysqli_query($conn,"SELECT * FROM `users` WHERE num = '$number'");
        $dup_email = mysqli_query($conn,"SELECT * FROM `users` WHERE user_email= '$email'");
      if(mysqli_num_rows($dup_email)||mysqli_num_rows($dup_no)){
        echo"
        <script>
        alert('This email is already registered');
        window.location.href='register.php';
        </script>";
       
   
      }
      else{
        mysqli_query($conn,"INSERT INTO `users` (`user_name`, `user_email`, `num`, `user_password`) VALUES ( '$name', '$email', '$number', '$password')");
       echo " <script>
        alert(' registered successfully');
        window.location.href='login.php';
        </script>";
      }

   }
  }
   ?>



?>