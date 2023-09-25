<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <!-- Include Bootstrap CSS from a CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet"/>
    </head>

<?php      
    include "config.php";
    if(isset($_POST['login'])){  
    $email = $_POST['email'];  
    $password = $_POST['password'];    
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($conn, $email);  
    $password = mysqli_real_escape_string($conn, $password);  
      
    $query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";  
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $count = 0;
    $count = mysqli_num_rows($result);
//            echo "No of Rows = ". $row;
    if ($count == 1) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['Id'] = $row['Id'];
         header("location:index.php", "_self");
        } 
    else {
            echo "<script>alert('Username or Password are incorrect');</script>";
         } 
    
  }     
?>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-8">
                    <div class="login-container">
                        <div class="login-header">
                            <h2>Login</h2>
                        </div>
                        <form method="post" action="" class="login-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <input type="submit" name="login" value="Login" class="btn btn-primary">
                            <div class="text-center py-3">
                                <div class="medium">
                                    <a href="register.php">Have an account? Go to Registration</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
