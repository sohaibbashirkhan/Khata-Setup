<?php
include_once("conn.php");
 
$id= $_GET['id'];
$Name = $_POST['txtname'];
$Email = $_POST['txtemail'];
$Password= $_POST['txtpass'];
$Phone = $_POST['txtphone'];
$DOB = $_POST['txtdob'];
$PictureName = $_FILES['txtpicture']["name"];
$PictureTmp = $_FILES['txtpicture']["tmp_name"];

//   $query = "UPDATE  SET `Name`='$name',`Age`=$age,`add`='$add',`email`='$email',`pass`='$pass' WHERE `id`=$id";
 $query ="UPDATE `user` SET `name`='$Name',`email`='$Email',`password`='$Password',`phone`='$Phone',`dob`='$DOB',`picture`='$PictureName' WHERE `id`=$id";

 $q = mysqli_query($conn,$query);

?>
    <script>
    window.location.assign("user.php");
</script>