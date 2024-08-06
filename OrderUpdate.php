<?php
include_once("conn.php");
 
$id= $_GET['id'];
$User = $_POST['txtuser'];
$Product = $_POST['txtproduct'];
$Date = $_POST['txtdate'];
$Amount = $_POST['txtamount'];

//   $query = "UPDATE  SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
 $query =" UPDATE `orders` SET `userid`='[$User]',`productid`='[$Product]',`date`='[$Date]',`quntity`='[$Amount]' WHERE `id`=$id";

 $q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("Order.php");
</script>