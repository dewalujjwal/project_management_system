<?php 
include('assets/server/connection.php');
     
   if(isset($_POST['submit'])){
    $pname=$_POST['pname'];
    $id=$_POST['id'];
    $pdes=$_POST['pdes'];
    $fname=$_FILES['file']['name'];
    
    $tname=$_FILES['file']['tmp_name'];
    
    move_uploaded_file($tname,'./pdf/'.$pname);
    $psd=$_POST['psd'];
    $deadline=$_POST['deadline'];
    $pmname=$_POST['pmname'];
    $pdname=$_POST['pdname'];
    $status=$_POST['status']; 

   


    
    
   

      
      
       @ mysqli_query($conn,"UPDATE `projects` SET `pname`='$pname',`pdes`='$pdes',`pdf`='$fname',`psd`='$psd',`deadline`='$deadline',`pmname`='$pmname',`pdname`='$pdname',`status`='$status' WHERE id='$id'");
    echo " <script>
        alert('updated successfully');
          window.location.href='view.php';
    </script>";
      
    
   }
  
   ?>



?>