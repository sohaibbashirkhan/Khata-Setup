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
        <title>Dashboard - Admin Form</title>
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
                        <h1 class="mt-4">Add User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
<h1  style = "text-align : center;">Welcome To New User</h1>

<!--  =========================== Add User Form ============================== -->
<form action ="#" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" name="txtname" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="text" name="txtemail" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="text" name="txtpass" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="text" name="txtphone" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dob</label>
    <input type="text" name="txtdob" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Picture</label>
    <input type="file" name="txtpicture" class="form-control" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-success" name="submit">ADD</button>
</form>
</div>
</main>
<br><br><br>
<h3 class="text-center"> User Page </h3>
<a class="text-center" href="user.php">Link</a>
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
<!-- php -->
<?php
  if(isset($_POST["submit"])){
    $id= $_GET['id'];
    $Name = $_POST['txtname'];
    $Email = $_POST['txtemail'];
    $Password= $_POST['txtpass'];
    $Phone = $_POST['txtphone'];
    $DOB = $_POST['txtdob'];
    $PictureName = $_FILES['txtpicture']["name"];
    $PictureTmp = $_FILES['txtpicture']["tmp_name"];
    
                 // path
                 $path = "./picture/" . $PictureName;
                 move_uploaded_file($PictureTmp,$path);
                              // Query
$query="INSERT INTO `user`(`id`, `name`, `email`, `password`, `phone`, `dob`, `picture`) 
VALUES (null,'$Name','$Email','$Password','$Phone','$DOB','$PictureName')";

mysqli_query($conn,$query);
    ?>  
    <script>
      window.location.assign("user.php?add");
    </script>

    <?php
    }
  
?>