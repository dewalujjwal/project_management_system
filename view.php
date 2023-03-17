<?php
 session_start();
 if(isset($_SESSION['user'])){
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"/>
    
    
</head>
<body>
    
    <h1>Project Management System</h1> 


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Project Management System</a>
  
  <div  id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">View project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">AddProject</a>
      </li>
      <li class="nav-item">
      <?php 
            //   session_start();
                if(isset($_SESSION['user'])){
               echo"  <a class='nav-link ' href='logout.php'>Logout</a>";
                 
                }
                else{
                  echo"  <a class='nav-link ' href='login.php'>Login</a>";
                }
              ?>
        
      </li>
    </ul>
  </div>
</nav>
  



        <br>
        <div class="row">
            <div class="rec col-lg-7">
        <table class="table">
             <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Project Name</th>
                    <th>project description</th>
                    <th>project prototype</th>
                    <th>Start Date</th>
                    <th>Deadline</th>
                    <th>Manager name</th>
                    <th>developer name</th>
                    <th>Status</th>

                </tr>
             </thead>
             <tbody id="record">
             <?php
   include('assets/server/connection.php');
   $query = "select * from projects";

   $result =mysqli_query($conn,$query);
   $sno=1;
   while($rec=mysqli_fetch_assoc($result)){
?>
<tr>
   <td><?=$sno++?></td>
   <td><?=$rec['pname']?></td>
   <td><?=$rec['pdes']?></td>
   <td><?=$rec['pdf']?></td>
   <td><?=$rec['psd']?></td>
   <td><?=$rec['deadline']?></td>
   <td><?=$rec['pmname']?></td>
   <td><?=$rec['pdname']?></td>
   <td><?=$rec['status']?></td>
   <td>
      <a href="update.php?id=<?=$rec['id']?>"class="btn btn-warning">Update</a>
      <a href="delete.php?id=<?=$rec['id']?>" class="btn btn-danger">Delete</a>
   </td>

</tr>
<?php }

?>

                
             </tbody>
        </table>
       
        <?php }
else{
    echo"
    <script>
   
    window.location.href='login.php';
    </script>";
}
?>
        </body>
</html>
