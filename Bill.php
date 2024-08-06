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
include_once("header.php")
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Billing  Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <form action="billprint.php" method="POST">
                        <label for="">Select Customer</label>
                        <select name="customer" class="form-control">
                            <option>Select</option>
        <?php
          $selectquery = "SELECT * FROM `customer`";
          $selectresult = mysqli_query($conn,$selectquery);
          if(mysqli_num_rows($selectresult)){
            while ($selectdata = mysqli_fetch_array($selectresult)) {
                ?>
                      <option value="<?php echo $selectdata[0];?>"><?php echo $selectdata[1];?></option>
                <?php
            }
          }
        ?>
      </select>
      <br>
      <?php
    if(isset($_GET["add"])){
        ?>
<div class="container-fluid hide">
    <p class="bg-success text-light p-1 text-center"><b>Bill add success</b></p>
   </div>
        <?php
    }
?>
                            <div class="form-group">
                            <label for="">Start Date</label>
                            <input type="date" name="startdate" class="form-control">
                        </div>
                            <br>
                        <div class="form-group">
                            <label for="">End Date</label>
                            <input type="date" name="enddate" class="form-control">
                        </div>
                <br><br>
                        <div class="form-group">
                            <input type="submit" value="Generate Bill" name="submit" class="btn btn-success">
                        </div>
                        </form>
</div>
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
