<?php
 include('assets/server/connection.php');
 $id=$_GET['id'];
 $query = "DELETE FROM projects WHERE id='$id'";
 $result = mysqli_query($conn,$query);

 echo " <script>
        alert('deleted successfully');
          window.location.href='view.php';
    </script>";
 ?>