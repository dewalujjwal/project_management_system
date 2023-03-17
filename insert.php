<?php 
include('assets/server/connection.php');
     
   if(isset($_POST['submit'])){
    $pname=$_POST['pname'];
    $pdes=$_POST['pdes'];
    $fname=$_FILES['file']['name'];
    
    $tname=$_FILES['file']['tmp_name'];
    
    move_uploaded_file($tname,'./pdf/'.$fname);
    $psd=$_POST['psd'];
    $deadline=$_POST['deadline'];
    $pmname=$_POST['pmname'];
    $pdname=$_POST['pdname'];
    $status=$_POST['status']; 


  echo $pmname;
  echo $status;


    
    
   

      $dup_no = mysqli_query($conn,"SELECT * FROM `projects` WHERE pname = '$pname'");
       // $dup_email = mysqli_query($conn,"SELECT * FROM `users` WHERE user_email= '$email'");
      if(mysqli_num_rows($dup_no)){
         echo"
         <script>
         alert('This project is already added');
         window.location.href='add.php';
         </script>";
       
   
      }
      else{
       @ mysqli_query($conn,"INSERT INTO `projects` ( `pname`, `pdes`, `pdf`, `psd`, `deadline`, `pmname`, `pdname`, `status`) VALUES ('$pname', '$pdes', '$fname', '$psd', '$deadline', '$pmname', '$pdname', '$status')");
        echo " <script>
         alert(' registered successfully');
         window.location.href='view.php';
         </script>";
      }

   }
  
   ?>



?>