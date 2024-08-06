<?php
include_once("conn.php")
?>
<?php
if (isset($_POST["submit"])) {
session_start();    
$email = $_POST["email"];
$pass = $_POST["pass"];
$query =   "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$pass'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result))
{while($data  = mysqli_fetch_assoc($result)){
$_SESSION["name"]  = $data["name"];
?>
  <script>
    window.location.assign('index.php');
  </script>
<?php
}
}else{
  ?>
  <script>
    window.location.assign('adminlogin.php?invalid');
  </script>
<?php
}   
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Admin Login Account</h2>
              <form action="#" method="POST">
                <div class="form-outline mb-4">
                <label class="form-label"  for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                <label class="form-label"  for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" name="pass" class="form-control form-control-lg" />
                </div>
                    <?php
                      if(isset($_GET["invalid"])){
                        ?>
                            <p class="text-danger">Invalid Email Password</p>
                        <?php
                      }
                    ?>
                <input type="submit" name="submit" class="btn btn-dark">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  


















   





































  
