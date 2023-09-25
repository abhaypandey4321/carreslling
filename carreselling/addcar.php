<?php include './includes/header.php'; ?>

<div id="wrapper">
    <?php include './includes/sidemenu.php'; ?>
<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Car</li>
        </ol>
        <?php
        include "config.php";
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $cartype=$_POST['cartype'];
            $price=$_POST['price'];
            $speed=$_POST['speed'];
            $upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
            $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
        
            // Checks if user sent an empty form
            if(!empty(array_filter($_FILES['files']['name']))) {
        
                // Loop through each file in files[] array
                foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                    
                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                    $file_name = $_FILES['files']['name'][$key];
                    $file_size = $_FILES['files']['size'][$key];
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        
                    // Set upload file path
                    $filepath = $upload_dir.$file_name;
        
                    // Check file type is allowed or not
                    if(in_array(strtolower($file_ext), $allowed_types)) {
                        if(file_exists($filepath)) {
                            $filepath = $upload_dir.time().$file_name;
                            
                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                echo "{$file_name} successfully uploaded <br />";
                            }
                            else {					
                                echo "Error uploading {$file_name} <br />";
                            }
                        }
                    }
                    else {
                        // echo "Error uploading {$file_name} ";
                        // echo "({$file_ext} file type is not allowed)<br / >";
                    }
                }
            }
            else {
                echo "No files selected.";
            }
        
            $query="INSERT INTO uploaddetails (Name,CarType,Price,Speed,File) values ('$name','$cartype','$price','$speed','$file_name')";
            $result=mysqli_query($conn,$query);
            if($result==TRUE){
                echo "<script> alert('Car Details Successfully Done!!!')</script>";
            }
            else{
                echo "<script> alert('Something Went Wrong')</script>";
            }

        }

    ?>
        <div class="container">
            <h3 style="text-align:center">Car Reselling Form</h3><hr style="border:1px solid black;">
            <form method="post" action=""   enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Car Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="cartype">Car Type:</label>
                    <select class="form-control" onchange="topspeed();" id="cartype" name="cartype">
                        <?php
                           $query = "SELECT * FROM cartype";
                           $result=mysqli_query($conn,$query);
                        ?>
                        <option value="">Select Category</option>
                          <?php
                            while($run=mysqli_fetch_array($result)){
                                ?>
                        <option value="<?php echo $run['Id'] ?>"><?php echo $run['Type'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" min="0" required>
                </div>
                <div class="form-group">
                    <label for="speed">Top Speed:</label>
                    <input type="text" name="speed" id="speed" required>
                </div>
                <div class="form-group">
                    <label for="image">Car Images(can upload multiple):</label>
                    <input type="file" name="files[]" multiple></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload"/>
            </div>
        
        </form>
    </div>


    <script>
function topspeed(){
    var cartype_id = document.getElementById('cartype').value;
    // alert(cartype_id);return;
    if(cartype_id==1){
        var topspeed=100;
    }
    if(cartype_id==2){
        var topspeed=200;
    } 
    if(cartype_id==3){
        var topspeed=300;
    }
   document.getElementById('speed').value=topspeed;

}



</script>

      </div>
        
        
        
        

    </div>



    <!-- Scroll to Top Button-->
    <?php include './includes/footer.php'; ?>