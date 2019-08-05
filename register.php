<?php
require "init.php";
$name = $_POST["user"];
$user_name = $_POST["user_name"];
$user_pass = $_POST["user_pass"];
$phone= $_POST["phone"];
$sql_query = "INSERT INTO `user_info1` (`id`, `name`, `user_name`, `password`,`phone`) VALUES (NULL, '$name', '$user_name', '$user_pass','$phone')";
if(mysqli_query($con,$sql_query))
{
  echo "Success";

}
else {
  echo "Fld";
}
?>
