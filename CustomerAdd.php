<?php
include_once("conn.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
        include_once("header.php");
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Customers</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <h1  style = "text-align : center;">Welcome To Add New Customer</h1>

<!--  =========================== Add New Customer Form ============================== -->

<form action ="#" method="POST" >
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="txtname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="number" name="txtphone" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cnic</label>
    <input type="number" name="txtcnic" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input type="text" name="txtaddress" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success" name="submit">ADD</button>
</form>
</div>
</main>
<br><br><br>
<h3 class="text-center"> Customers Page </h3>
<a class="text-center" href="Customer.php">Link</a>
                  
                </main>
   
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<!-- php -->

    <?php
  if(isset($_POST["submit"])){
    $Name =  mysqli_real_escape_string($conn,$_POST['txtname']);
    $Phone =  mysqli_real_escape_string($conn,$_POST['txtphone']);
    $Cnic =  mysqli_real_escape_string($conn,$_POST['txtcnic']);
    $Address =  mysqli_real_escape_string($conn,$_POST['txtaddress']);

                 
                              // Query
                              $query="INSERT INTO `customer`(`id`, `name`, `phone`, `cnic`,`address`) VALUES ('null','$Name','$Phone','$Cnic','$Address')";
mysqli_query($conn,$query);
    ?>  
  <script>
      window.location.assign("Customer.php?add");
    </script>

    <?php
    }
  
?>