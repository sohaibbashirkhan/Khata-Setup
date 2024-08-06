<?php
include_once("conn.php");
     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from product where id =' $id'"));
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Product Edit</title>
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
                        <h1 class="mt-4">Edit Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <h1  style = "text-align : center;">Welcome To Product Edit Page</h1>

                        <form action ="productupdate.php?id=<?= $row['id'] ?>" method="POST" enctype="multipart/form-data">
<!-- <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input type="text" value="<?= $row['id'] ?>" name= "id" class="form-control"  aria-describedby="emailHelp">
  </div> -->
<div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input type="text" value="<?= $row['title'] ?>" name= "txttitle" class="form-control"  aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">price</label>
    <input  type="text" value="<?= $row['price'] ?>" name="txtprice" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Picture</label>
    <input type="file"  value="<?= $row['picture'] ?>" name="txtpicture" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success" name="submit">Save</button>
</form>
</div>
</main>
<br><br><br>
<h3 class="text-center"> Product Page </h3>
<a class="text-center" href="Product.php">Link</a>                  
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
