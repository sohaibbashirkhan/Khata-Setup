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
        <title>Dashboard - Show Customer</title>
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
                        <h1 class="mt-4">Customer Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">

<br> 
    <a class="text-center" href="CustomerAdd.php"> <button class=" btn btn-success">Add New</button></a>
   <br><br> <br>
<?php
    if(isset($_GET["add"])){
        ?>

<div class="container-fluid hide">
    <p class="bg-success text-light p-1 text-center"><b>Customer Add Success</b></p>
   </div>
        <?php
    }
?>
                <!-- table start     -->
    <table class="table" class="p-2" border="1" >
            <thead>
            <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Cnic</th>
                    <th>Address</th>
                </tr>
</thead>
            <tbody>
                <!-- Query -->
<?php
            include_once("conn.php");
                    $query = "SELECT * FROM `customer`";
                    $result = mysqli_query($conn,$query);  
                    if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><a href="Customeredit.php?id=<?=$row['id']?>" class="btn btn-success" >Edit</a></td>
                    <td><a href="Customerdelete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
                }                                     
                ?>
            </tbody>
        </table>	
                            <!-- table end -->
</div>
</main>
<br><br><br>
<h3 class="text-center"> Go To Form </h3>
<a class="text-center" href="CustomerAdd.php">Link</a>
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