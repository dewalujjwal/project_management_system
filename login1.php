<?php 
 include('assets/server/connection.php');
   $name=$_POST['email'];
   $password=$_POST['password'];

   $result = mysqli_query($conn,"SELECT * FROM `users` WHERE user_email='$name'or num='$name'AND user_password='$password' " );
   session_start();
   if(mysqli_num_rows($result)){

     $_SESSION['user']=$name;

    echo " <script>
    alert(' Login successfully');
    window.location.href='index.php';
    </script>";

   }
   else{
    echo " <script>
    alert(' wprg email or password ');
    window.location.href='login.php';
    </script>";

   }
?>