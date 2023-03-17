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
      <li class="nav-item ">
        <a class="nav-link" href="register.php">Register <span class="sr-only"></span></a>
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
  
 
  
  </body>
</html>