<?php
include_once("conn.php");
$id = $_GET["id"];
$query = "DELETE FROM `product` WHERE `id` = $id";
mysqli_query($conn,$query);
?>
<script>
    window.location.assign("Product.php");
</script>