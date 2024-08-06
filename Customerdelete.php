<?php
include_once("conn.php");
$id = $_GET["id"];
$query = "DELETE FROM `customer` WHERE `id` = $id";
mysqli_query($conn,$query);
?>
<script>
    window.location.assign("Customer.php");
</script>