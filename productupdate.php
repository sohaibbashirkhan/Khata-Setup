<?php
include_once("conn.php");
$id= $_GET['id'];
$Title = $_POST['txttitle'];
$Price = $_POST['txtprice'];
$PictureName = $_FILES['txtpicture']["name"];
$PictureTmp = $_FILES['txtpicture']["tmp_name"];

$query ="UPDATE `product` SET `title`= '$Title',`price`= '$Price',`picture`= '$PictureName'  WHERE `id`= '$id'";
$q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("Product.php");
</script>