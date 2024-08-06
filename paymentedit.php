<?php
include_once("conn.php");
     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from payment where id='$id'"));
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Payment Edit</title>
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
                        <h1 class="mt-4">Payment Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <h1  style = "text-align : center;">Welcome To Payment Edit Page</h1>
<form action ="paymentupdate.php?id=<?= $row['id'] ?>" method="POST" >
<!-- <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input type="text" value="<?= $row['id'] ?>" name= "id" class="form-control"  aria-describedby="emailHelp">
  </div> -->
  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="number" value="<?= $row['phone'] ?>"  name="txtphone" class="form-control">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Date</label>
    <input type="date" value="<?= $row['date'] ?>" name="txtdate" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Amount</label>
    <input type="number" value="<?= $row['amount'] ?>" name="txtamount" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Amount</label>
    <input type="number" value="<?= $row['amountleft'] ?>" name="amountleft" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-success" name="submit">Save</button>
</form>
</div>
</main>
<br><br><br>
<h3 class="text-center"> User Page </h3>
<a class="text-center" href="payment.php">Link</a>
                  
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
