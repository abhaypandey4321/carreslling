<?php include './includes/header.php'; ?> 
<div id = "wrapper" > 
<?php include './includes/sidemenu.php'; ?> 
<div id = "content-wrapper" > 
 <div class="container-fluid">

<!-- Breadcrumbs-->
<ol class = "breadcrumb" > <li class="breadcrumb-item"> <a href = "#" > Dashboard </a>
                </li > <li class="breadcrumb-item active"> Overview </li>
            </ol > <style>
/* Custom card styles */.custom - card {
    border : 2 px solid #333;
    margin - bottom : 20 px;
}.custom - card - title {
    color : #333;
}.custom - card - text {
    color : #666;
}
</style>
<!-- Icon Cards-->
<div class = "row" >   
            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="images/1.jpg" height="200" width="100%" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="custom-card-title">Rolls Royal</h5>
                        <p class="custom-card-text">Luxury</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="images/2.jpg" height="200" width="100%" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="custom-card-title">Sports</h5>
                        <p class="custom-card-text">Sports Car</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="images/3.jpg" height="200" width="100%" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="custom-card-title">Normal</h5>
                        <p class="custom-card-text">Normal Car</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
</div>

          


</div>
 </div>
</div>


<?php include './includes/footer.php'; ?>
