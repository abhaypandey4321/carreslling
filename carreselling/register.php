<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <!-- Include Bootstrap CSS from a CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet"/>
    </head>
    <?php
    include "config.php";
    if(isset($_POST['register'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="INSERT INTO registration (name,email,password) values ('$name','$email','$password')";
        $result=mysqli_query($conn,$query);
        if($result == TRUE){
          echo "<script> alert('Customer Registration Successfully Done!!!')</script>"; 
        }
        else{
            echo "<script> alert('Something Else Wrong')</script>"; 
        }

    }
    ?>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-8">
                    <div class="registration-container">
                        <div class="registration-header">
                            <h2>Registration</h2>
                        </div>
                        <form method="post" action="" class="registration-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <input type="submit" name="register" value="Register"  class="btn btn-primary">
                            <div class="text-center py-3">
                                <div class="medium">
                                    <a href="login.php">Have an account? Go to login</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
