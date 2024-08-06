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
        <title>Dashboard - Order Add</title>
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
                        <h1 class="mt-4">Add payment</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
<h1  style = "text-align : center;">Welcome To New  Order Page</h1>

<!--  =========================== Add Order ADD Form ============================== -->
<form action ="#" method="POST" >
  <div class="mb-3">
    <label for="" class="form-label">Select Customer</label>

      <select name="txtuser" class="form-control">
        
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


  </div>
  <!-- <div class="mb-3">
    <label for="" class="form-label">Product</label>

    <select name="txtproduct" id="txtproduct" class="form-control">
          <option>Select</option>
        <?php
          $selectproduct = "SELECT * FROM `product`";
          $selectproresult = mysqli_query($conn,$selectproduct);
          if(mysqli_num_rows($selectproresult)){
            while ($selectdatarpoduct = mysqli_fetch_array($selectproresult)) {
                ?>
                      <option id="pro" value="<?php echo $selectdatarpoduct[1];?>"><?php echo $selectdatarpoduct[1];?></option>
                <?php
            }
          }
        ?>      
      </select>

  </div> -->

 

  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="number"  name="txtphone" class="form-control">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Date</label>
    <input type="date"  name="txtdate" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Amount</label>
    <input type="number"  name="txtamount" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Amount Left</label>
    <input type="number"  name="amountleft" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-success" name="submit">ADD</button>
</form>
</div>
</main>
<br><br><br>
<h3 class="text-center"> Payment Page </h3>
<a class="text-center" href="payment.php">Link</a>
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
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
      </body>
</html>
<!-- php -->
<?php

  if(isset($_POST["submit"])){
  
    $User = $_POST['txtuser'];
    $Phone = $_POST['txtphone'];
    $Date = $_POST['txtdate'];
    $Amount = $_POST['txtamount'];
    $AmountLeft = $_POST['amountleft'];
    
   // Query
$query="INSERT INTO `payment`(`id`, `userid`, `Phone`, `Date`, `Amount`,`AmountLeft`) VALUES (null,'$User','$Phone','$Date','$Amount','$AmountLeft')";

mysqli_query($conn,$query);
    ?>  

    <script>
      window.location.assign("payment.php?add");
    </script>

    <?php
    }
  
?>
