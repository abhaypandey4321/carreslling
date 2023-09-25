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
            <li class="breadcrumb-item active">View Car</li>
        </ol>
        <style>
        /* Custom CSS for DataTable */
        .custom-table {
            width: 100%;
            margin-bottom: 1rem;
        }

        .custom-table thead th {
            background-color: #333;
            color: #fff;
        }

        .custom-table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #fff;
        }
        .td{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-striped custom-table" id="dataTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>CarType</th>
                    <th>Price</th>
                    <th>Top Speed</th>
                    <th>Images</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   include "config.php";
                    $query="SELECT * FROM uploaddetails";
                    $result=mysqli_query($conn,$query);
                    $count=0;
                    while($run=mysqli_fetch_array($result)){
                     $count++;
                ?>
                    
                <tr>
                   <td><?php echo $count; ?></td>
                    <td><?php echo $run['Name']; ?></td>
                    <td><?php echo $run['CarType']; ?></td>
                    <td><?php echo $run['Price']; ?></td>
                    <td><?php echo $run['Speed']; ?></td>
                    <td><?php echo $run['File']; ?></td>
                    <td><a href="updatecar.php?id=<?php echo $run['Id']; ?>"><input type="submit" style="color:white; background-color:orange; border:1px solid orange;" value="Edit"></a></td> 
                    <td><a href="deletecar.php?id=<?php echo $run['Id']; ?>"><input type="submit" style="color:white; background-color:red; border:1px solid red;" value="Delete"></a></td>
                               </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

      </div>
        
        
        
        

    </div>



    <!-- Scroll to Top Button-->
    <?php include './includes/footer.php'; ?>