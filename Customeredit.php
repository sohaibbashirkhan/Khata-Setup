<?php
include_once("conn.php");
     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from customer where id='$id'"));
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Customer Edit</title>
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
                        <h1 class="mt-4">Edit Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <h1  style = "text-align : center;">Welcome To Customer Edit Page</h1>
                        <form action ="Customerupdate.php?id=<?= $row['id'] ?>" method="POST">
<!-- <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input type="text" value="<?= $row['id'] ?>" name= "id" class="form-control"  aria-describedby="emailHelp">
  </div> -->
  <!-- <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input  type="text" value="<?= $row['Name'] ?>" name="txtname" class="form-control" >
  </div> -->
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input  type="text" value="<?= $row['name'] ?>" name="txtname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input  type="number" value="<?= $row['phone'] ?>" name="txtphone" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cnic</label>
    <input type="number" value="<?= $row['cnic'] ?>" name="txtcnic" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input type="text" value="<?= $row['address'] ?>" name="txtaddress" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success" name="submit">Save</button>
</form>
</div>
</main>
<br><br><br>
<h3 class="text-center"> Customer Page </h3>
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
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
