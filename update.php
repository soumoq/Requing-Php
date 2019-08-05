<?php
require "init.php";
$name = $_POST["user"];
$user_name = $_POST["user_name"];
$phone= $_POST["phone"];

$sql = "UPDATE user_info1
SET user_name='$user_name',phone = '$phone'
WHERE name='$name';";

if(mysqli_query($con,$sql))
{
  echo json_encode(array('response'=>'update successfully'));
}
else
 {
  echo json_encode(array('response'=>'update falid'));
}
 ?>
