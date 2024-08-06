<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
  <link rel="stylesheet" href="css/table.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <br>
<h1 class="text-center h4 pb-2 mb-4 text-danger border-bottom border-danger">Bill Print </h1>
<!-- <h6 class="left">Asif 0300-3922131
    <br>
    Asif     0341-2424228
</h6> -->
    <?php
include_once("conn.php");
if(isset($_POST["submit"]))

$customer = $_POST["customer"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$select = "SELECT customer.name, customer.phone, customer.address,orders.date ,orders.product ,orders.price  from `orders` INNER JOIN `customer` on orders.userid = customer.id WHERE customer.id = $customer && date BETWEEN '$startdate' AND '$enddate'
";
$count = "SELECT SUM(orders.price) from `orders` INNER JOIN `customer` on orders.userid = customer.id WHERE customer.id = $customer && date BETWEEN '$startdate' AND '$enddate'";
$countresult = mysqli_query($conn,$count);
$countdata = mysqli_fetch_array($countresult);
$result = mysqli_query($conn,$select);
if(mysqli_num_rows($result)){
     $user = "SELECT * FROM `customer` WHERE `id` = $customer";
    $userresult = mysqli_query($conn,$user);
    $mydata = mysqli_fetch_array($userresult);
?>
<p class="fs-1">Name : <?php echo $mydata[1];?></p>
<table class="table table-bordered">
<!-- <tr>
<th></th>
<th></th>
</tr> -->
<tr>
    <br>
<th class="text-primary">Date</th>
<th class="text-success">Product</th>
<th class="text-info">Price</th>
</tr>
<tr>
    <?php
        while($data = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $data[3]?></td>
                    <td><?php echo $data[4]?></td>
                    <td><?php echo $data[5]?></td>

                </tr>
            <?php
    }
    ?>
</tr>
</table>
<br>
<h3 class="text-danger" >Total: <?php echo $countdata[0]; ?> </h3>
<?php

}
?>
<br style="text-align: center;" >
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-success" onclick="MyWork()">Print Bill</button>
</div>
</body>
<script type="text/javascript">
function MyWork(){
    window.print();
}
// var tarikha =New Date();
// document.write(formatdate(tarikha)+ "<br>");
// function formatdate(pd){
//     var date =pd.getdate();
//     var month =pd.getmonth();
//     month++;
//     var year=pd.getfullyear();
//     return date+" - "+ month" - "+year;
// }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/bootstrap.bundle.js"></script> -->
</html>




