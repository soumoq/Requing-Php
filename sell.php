<?php
  require "init.php";
  $book_name =$_POST["book_name"];  $book_name1="ad";
  $slr_name =$_POST["slr_name"];    $slr_name1="soumo";
  $image=$_POST["image"];   $image1="asd111";
  $price=$_POST["price"];   $price1="45";
  $atr_name=$_POST["atr_name"];
  $sql1="INSERT INTO `sell` (`slr_id`, `slr_name`, `book_name`, `atr_name`, `image`, `price`) VALUES (NULL, '$slr_name', '$book_name', '$atr_name', '$image', '$price');";

  
  if(mysqli_query($con,$sql1))
  {
    //file_put_contents($upload_path,base64_decode($image));
    echo json_encode(array('response'=>'Image upload successfully'));
  }
  else
   {
    echo json_encode(array('response'=>'Image upload faled'));
   }

 ?>
