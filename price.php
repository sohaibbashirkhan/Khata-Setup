<?php

include_once("conn.php");

$values = $_POST["values"];

$select = "SELECT * FROM `product` WHERE `title` = '$values'";

$result = mysqli_query($conn,$select);

while($row = mysqli_fetch_array($result)){
    echo $row["price"];
}



?>