<?php
 session_start();
 if(isset($_SESSION['user'])){
?>


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
  

<h3>Add Project</h3>

<form action="insert.php" id="register-form" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label >Project Name</label>
                <input type="text"class="form-control " id="project-name" name="pname" placeholder="project">
            </div>
            <div class="form-group">
                <label >Project Description</label>
                <input type="text" class="form-control " id="project-description" name="pdes" placeholder="Description">
            </div>
           
          <div class="form-group">
              <label  >Project Prototype</label><br>
              <input type="file" id="file" name="file"   > 
              
          </div>
             
          <div class="form-group">
              <label >Project Start date</label>
              <input type="text" class="form-control " id="p-s-d" name="psd" placeholder="date">
          </div>
             <div class="form-group">
                <label >Project Deadline</label>
                <input type="text" class="form-control " id="deadline" name="deadline" placeholder="deadline">
            </div>
            <div class="form-group">
                <label >Project manager name</label><br>
                <select  id="pmnmae"name="pmname">
                    <?php 
                     include('assets/server/connection.php');
                     $query = "select name from project_manager";
                     $result =mysqli_query($conn,$query);
                     //$sno=1;
                     while($rec=mysqli_fetch_assoc($result)){
                    ?>
                           <option value="<?=$rec['name'];?>"><?=$rec['name'];?></option>
                          
                            <?php }?>
                         </select>
                <!-- <input type="text" class="form-control " id="pmname" name="pmname" placeholder="manager"> -->
            </div>
            <div class="form-group">
                <label >Project developer name</label><br>
                <select  id="pdnmae"name="pdname">
                    <?php 
                     include('assets/server/connection.php');
                     $query = "select name from developer ";
                     $result =mysqli_query($conn,$query);
                     //$sno=1;
                     while($rec=mysqli_fetch_assoc($result)){
                    ?>
                           <option value="<?=$rec['name'];?>"><?=$rec['name'];?></option>
                          
                            <?php }?>
                         </select>
                <!-- <input type="text" class="form-control " id="pdname" name="pdname" placeholder="Developer"> -->
            </div>
            
            <div class="form-group">
            <label for="project">Choose a status:</label><br>
                      <select  name="status">
                           <option value="pending">pending</option>
                           <option value="completed">completed</option>
                            <option value="processing">processing</option>
                            <option value="hold">hold</option>
                            <option value="terminate">terminate</option>
                         </select>
                <!-- <input type="hidden" class="form-control " id="confirm-password" name="confirm_password" placeholder="confirm password"> -->
            </div>

            <div class="form-group mt-2">
               <input type="submit" class="btn "name="submit" id="register-btn" value="add_project">
            </div>
            <div class="form-group">
              <a href="login.php" id="login-url" class="btn ">viewprojects</a>
               </div>
            
        </form>
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