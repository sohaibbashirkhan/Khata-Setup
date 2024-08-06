<?php
include_once("conn.php");

$id = $_GET["id"];

$query = "DELETE FROM `orders` WHERE `id` = $id";

mysqli_query($conn,$query);

?>
<script>
    window.location.assign("Order.php");
</script>