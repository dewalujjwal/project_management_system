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
  
<h3>Registration Form </h3>

<form action="insertt.php" id="register-form" method="POST">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control " id="register-name" name="name" placeholder="Jhon">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text" class="form-control " id="register-email" name="email" placeholder="xyz@mail.com">
            </div>
            <div class="form-group">
              <label >number</label>
              <input type="text" class="form-control " id="register-number" name="number" placeholder="1234567890">
          </div>
             <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control " id="password" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <label >Confirm Password</label>
                <input type="password" class="form-control " id="confirm-password" name="confirm_password" placeholder="confirm password">
            </div>
            <div class="form-group mt-2">
                <input type="submit" class="btn "name="submit" id="register-btn" value="register">
            </div>
            <div class="form-group">
              <a href="login.php" id="login-url" class="btn ">Do you have an account? Login</a>
               </div>
            
        </form>


        </body>
</html>