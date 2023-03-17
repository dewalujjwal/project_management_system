<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Home</title>
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
              session_start();
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


<?php 
include('assets/server/connection.php');
$id=$_GET['id'];
$query = "select * from projects where id=$id";
$result=mysqli_query($conn,$query);
if($rec=mysqli_fetch_assoc($result)){


?>





<h3>Update Project</h3>
<form action="edit.php" id="register-form" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label >Project Name</label>
                <input type="text"class="form-control " id="project-name" name="pname" value="<?=$rec['pname']?>">
            </div>
            <div class="form-group">
                <label >Project Description</label>
                <input type="text" class="form-control " id="project-description" name="pdes" value="<?=$rec['pdes']?>">
            </div>
           
          <div class="form-group">
              <label  >Project Prototype</label>
              <input type="file" id="file" name="file" value="<?=$rec['pdf']?>"   > 
              <input type="hidden" id="id" name="id" value="<?=$rec['id']?>"   > 
          </div>
             
          <div class="form-group">
              <label >Project Start date</label>
              <input type="text" class="form-control " id="p-s-d" name="psd" value="<?=$rec['psd']?>">
          </div>
             <div class="form-group">
                <label >Project Deadline</label>
                <input type="text" class="form-control " id="deadline" name="deadline" value="<?=$rec['deadline']?>">
            </div>
            <div class="form-group">
                <label >Project manager name</label>
                <input type="text" class="form-control " id="pmname" name="pmname" value="<?=$rec['pmname']?>">
            </div>
            <div class="form-group">
                <label >Project developer name</label>
                <input type="text" class="form-control " id="pdname" name="pdname" value="<?=$rec['pdname']?>">
            </div>
            
            <div class="form-group">
            <label for="project">Choose a status:</label>
                      <select  name="status"value="<?=$rec['status']?>">
                           <option value="pending">pending</option>
                           <option value="completed">completed</option>
                            <option value="processing">processing</option>
                            <option value="hold">hold</option>
                            <option value="terminate">terminate</option>
                         </select>
                <!-- <input type="hidden" class="form-control " id="confirm-password" name="confirm_password" placeholder="confirm password"> -->
            </div>

            <div class="form-group mt-2">
               <input type="submit" class="btn "name="submit" id="register-btn" value="update">
            </div>
            <div class="form-group">
              <a href="login.php" id="login-url" class="btn ">viewprojects</a>
               </div>
            
        </form>
        <?php }?>


        </body>
</html>