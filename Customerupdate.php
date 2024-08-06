<?php
include_once("conn.php");
$id= $_GET['id'];
$Name = $_POST['txtname'];
$Phone = $_POST['txtphone'];
$Cnic = $_POST['txtcnic'];
$Address = $_POST['txtaddress'];
//   $query = "UPDATE  SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
 $query ="UPDATE `customer` SET `name`='$Name',`phone`='$Phone',`cnic`='$Cnic',`address`='$Address' WHERE `id`=$id";
 $q = mysqli_query($conn,$query);
?>
    <script>
    window.location.assign("Customer.php");
</script>