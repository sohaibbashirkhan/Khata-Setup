<?php
include_once("conn.php");
 
$id= $_GET['id'];
$phone = $_POST['txtphone'];
$date = $_POST['txtdate'];
$amount = $_POST['txtamount'];
$amountleft = $_POST['amountleft'];


//   $query = "UPDATE  SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
//  $query ="UPDATE `payment` SET `name`='$Name',`amount`='$Amount',`payment`='$Pay' WHERE `id`=$id";
$query ="UPDATE `payment` SET `phone`='$phone',`date`='$date',`amount`='$amount',`amountleft`='$amountleft' WHERE `id`=$id";

 $q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("Payment.php");
</script>